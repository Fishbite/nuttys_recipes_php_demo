<?php
// ###### WARNING! ######
// running this file creates the basic  controller and view files
// ###### BEWARE IT WILL OVERWIRTE ANY EXISTING FILES ######
// it also READS the `controllers_output.txt` file that stores
// ALL the meta-data taken from each static HTML recipe file

// you ABSOLUTLEY DO NOT want to create the view stubs - they are useless!
// DISABLE the creation of views and assess the output carefully

// CONFIG - change these directories for testing purposes
$metaFile = __DIR__ . '/../controllers_output5.txt'; // name the input file
$controllersDir = __DIR__ . '/../controllers/recipes'; // BAK files up in here first
// Disable or remove writing these view stubs!!!!
$viewsDir = __DIR__ . '/../views/recipes/stubs'; // pointed to harmless DIR

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
