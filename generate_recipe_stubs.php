<?php
// CONFIG
$metaFile        = __DIR__ . '/controllers_output.txt';
$controllersDir  = __DIR__ . '/controllers/recipes';
$viewsDir        = __DIR__ . '/views/recipes';

// Create output dirs
@mkdir($controllersDir, 0755, true);
@mkdir($viewsDir, 0755, true);

// Load lines
$lines = file($metaFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if (!$lines) {
    exit("❌ Could not read lines from $metaFile\n");
}
echo "📄 controllers_output.txt lines loaded: " . count($lines) . "\n";

$currentSlug = '';
$data = [];
$firstBlockProcessed = false;

foreach ($lines as $line) {
    $line = trim($line);

    // Detect new recipe block
    if (preg_match('/^\/\/\s*======\s*(.+?)\.controller\.php\s*======/', $line, $matches)) {
        // Process the previous block before starting a new one
        if ($currentSlug && !empty($data)) {
            echo "✍️ Writing files for $currentSlug\n";
            createFiles($currentSlug, $data, $controllersDir, $viewsDir);
            $firstBlockProcessed = true;
        }
        $currentSlug = $matches[1];
        $data = [];
        continue;
    }

    // Parse key-value lines
    if (preg_match('/^\$(\w+)\s*=\s*(.+);$/', $line, $m)) {
        $key = $m[1];
        $val = trim($m[2], '\'" ');
        $val = html_entity_decode($val, ENT_QUOTES | ENT_HTML5);
        $val = str_replace(["\\'", 'ÔÇö'], ["'", '—'], $val);
        $data[$key] = $val;
    }
}

// Process the last block after the loop
if (!$firstBlockProcessed && $currentSlug && !empty($data)) {
    echo "✍️ Writing files for the first block: $currentSlug\n";
    createFiles($currentSlug, $data, $controllersDir, $viewsDir);
} elseif ($currentSlug && !empty($data)) {
    echo "✍️ Writing final files for $currentSlug\n";
    createFiles($currentSlug, $data, $controllersDir, $viewsDir);
}

echo "🎉 All done!\n";

// -------------------------
function createFiles($slug, $data, $controllersDir, $viewsDir)
{
    $viewPath = "$viewsDir/$slug.view.php";
    $ctrlPath = "$controllersDir/{$slug}-show.controller.php";

    $title = addslashes($data['title'] ?? '');
    $description = addslashes($data['description'] ?? '');
    $ogDescription = addslashes($data['ogDescription'] ?? '');
    $ogImage = addslashes($data['ogImage'] ?? '');
    $canonical = addslashes($data['canonical'] ?? '');

    $viewContent = <<<HTML
<main>
    <section class="recipe-single">
        <h1><?= htmlspecialchars(\$title) ?></h1>
        <p><?= htmlspecialchars(\$description) ?></p>
        <!-- TODO: Insert recipe content here -->
    </section>
</main>

HTML;

    $controllerContent = <<<PHP
<?php

// Page metadata
\$title = '$title';
\$description = '$description';
\$ogDescription = '$ogDescription';
\$ogImage = '$ogImage';
\$canonical = '$canonical';

require __DIR__ . '/../../views/recipes/$slug.view.php';
PHP;

    $viewResult = file_put_contents($viewPath, $viewContent);
    $ctrlResult = file_put_contents($ctrlPath, $controllerContent);

    if ($viewResult !== false && $ctrlResult !== false) {
        echo "✅ Created $slug.view.php and $slug-show.controller.php\n";
    } else {
        echo "❌ Failed to write files for $slug\n";
    }
}
