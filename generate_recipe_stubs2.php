<?php
// CONFIG
$metaFile = __DIR__ . '/controllers_output3.txt';
$controllersDir = __DIR__ . '/controllers/recipes';
$viewsDir = __DIR__ . '/views/recipes';

// Create directories if they don't exist
@mkdir($controllersDir, 0755, true);
@mkdir($viewsDir, 0755, true);

// Load metadata lines
$lines = file($metaFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if (!$lines) {
    exit("❌ Could not read controllers_output.txt\n");
}

$currentSlug = '';
$buffer = [];

foreach ($lines as $line) {
    if (preg_match('/^\/\/\s*======\s*(.+?)\.controller\.php\s*======/', $line, $m)) {
        if ($currentSlug && !empty($buffer)) {
            createRecipeStub($currentSlug, $buffer, $controllersDir, $viewsDir);
        }
        $currentSlug = trim($m[1]);
        $buffer = [];
    } else {
        $buffer[] = $line;
    }
}

// Process final block
if ($currentSlug && !empty($buffer)) {
    createRecipeStub($currentSlug, $buffer, $controllersDir, $viewsDir);
}

echo "✅ All recipe controller and view stubs generated!\n";

// --------------------------------------
function createRecipeStub($slug, $lines, $controllersDir, $viewsDir)
{
    $controllerPath = "$controllersDir/{$slug}.controller.php";
    $viewPath = "$viewsDir/{$slug}.view.php";

    $controllerContent = "<?php\n\n";
    $inNowdoc = false;

    foreach ($lines as $line) {
        // Preserve nowdoc blocks
        if (preg_match("/^\$[a-zA-Z_]+\s*=\s*<<<'TEXT'/", $line)) {
            $inNowdoc = true;
        }

        $controllerContent .= $line . "\n";

        if ($inNowdoc && trim($line) === 'TEXT;') {
            $inNowdoc = false;
        }
    }

    $controllerContent .= "\nrequire __DIR__ . '/../../views/recipes/{$slug}.view.php';\n";

    file_put_contents($controllerPath, $controllerContent);

    // --- View template ---
    $viewContent = <<<HTML
<main>
    <section class="recipe-single">
        <h1><?= htmlspecialchars(\$recipeName) ?></h1>
        <p><?= nl2br(htmlspecialchars(\$recipeIntro)) ?></p>
        <!-- TODO: Insert full recipe markup here -->
    </section>
</main>
HTML;

    file_put_contents($viewPath, $viewContent);
}
