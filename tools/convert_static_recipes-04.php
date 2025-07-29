<?php
// converts multiple HTML files to PHP
// replaces parts of documents with PHP partials

// for debugging purposes only
require __DIR__  . "/../functions.php";
// for debugging purposes only

// set the directory where the static HTML files are stored
$dir = new DirectoryIterator(__DIR__ . '/../old-html');
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        $file = $fileinfo->getFilename();
        // var_dump($file);
        $filename = pathinfo($file, PATHINFO_FILENAME);
        // var_dump($filename);

        // $inputPath = __DIR__ . '/old-html/beef-stroganoff.html';
        $inputPath = __DIR__ . "/../old-html/$file";
        $outputPath = __DIR__ . "/../views/recipes/$filename.view.php";

        
        $html = file_get_contents($inputPath);

        // ************** GET THE CORRECT TITLE START ************** \\
        // 🔍 Extract <h1> from .title-wrap
        $recipeName = ucfirst(str_replace('-', ' ', $filename));

        // var_dump($recipeName);
        // die();

        if (preg_match('#<div class="title-wrap">.*?<h1[^>]*>(.*?)</h1>#is', $html, $match)) {
            $recipeName = html_entity_decode(trim($match[1]));
        }

        // ✍️ Update $recipeName in the controller
        $controllerPath = __DIR__ . "/../controllers/recipes/$filename.controller.php";

        if (file_exists($controllerPath)) {
            $controllerCode = file_get_contents($controllerPath);

            $controllerCode = preg_replace(
                '/\$recipeName\s*=\s*\'.*?\';/',
                '$recipeName = ' . var_export($recipeName, true) . ';',
                $controllerCode
            );

            file_put_contents($controllerPath, $controllerCode);
            echo "✅ Controller updated: $controllerPath\n";
        } else {
            echo "⚠️  Controller not found for: $filename\n";
        }
        // ************** GET THE CORRECT TITLE END ************** \\

        // ************** GET THE CORRECT SUB-TITLE START ************** \\
        // === Extract optional subheading <h2> if present between <h1> and first <p>
        
        $subHeading = '';

        // Extract only the <h2> that appears *after* the matched <h1> and *before* the first <p>
        if (preg_match(
            '#<div class="title-wrap">.*?<h1[^>]*>.*?</h1>(.*?)<p#is',
            $html,
            $sectionMatch
        )) {
            $betweenH1andP = $sectionMatch[1];

            // Find a <h2> inside that snippet (if any)
            if (preg_match('#<h2[^>]*>(.*?)</h2>#i', $betweenH1andP, $h2Match)) {
                $subHeading = html_entity_decode(trim($h2Match[1]));
            }
        }


        // ************** GET THE CORRECT SUB-TITLE END ************** \\

        // Replace <head> ... </head> with PHP partial
        $html = preg_replace(
            '#<head>.*?</head>#s',
            '<?php require __DIR__ . \'/../partials/head-recipe.view.php\'; ?>',
            $html
        );

        // Replace <nav class="nav-main">...</nav> with PHP partial
        $html = preg_replace(
            '#<nav class="nav-main".*?</nav>#s',
            '<?php require __DIR__ . \'/../partials/nav-main.view.php\'; ?>',
            $html
        );

        // Replace the title-banner section (div.title-wrap and logo-main image)
        $html = preg_replace(
            '#<div class="title-wrap">.*?<img\s+[^>]*class="logo-main"[^>]*?>#s',
            '<?php require __DIR__ . \'/../partials/title-banner-recipe.view.php\'; ?>',
            $html
        );

        // Find the final closing </section> and split there
        $sectionEndPos = strrpos($html, '</section>');

        if ($sectionEndPos !== false) {
            // Everything before and including the final </section>
            $before = substr($html, 0, $sectionEndPos + strlen('</section>'));

            // Append footer + script just once
            $after = <<<PHP
<?php require __DIR__ . '/../partials/footer.php'; ?>
<script src="/scripts/tabs.js"></script>
</body>
</html>
PHP;

            $html = $before . "\n" . $after;
        } else {
            echo "⚠️ No closing </section> found in: $inputPath\n";
        }

        // ************ CREATE LOG FILE START ************ \\
        // === Optional logging ===
        $logFile = __DIR__ . '/../conversion-log.txt';
        $logLine = "$filename => name: $recipeName";
        if (!empty($subHeading)) {
            $logLine .= ", sub: $subHeading";
        }
        $logLine .= "\n";
        file_put_contents($logFile, $logLine, FILE_APPEND);
        // ************ CREATE LOG FILE END ************ \\


        // Write the new view file
        file_put_contents($outputPath, $html);
        echo "✅ View file created: $outputPath\n";

        // === Add route to routes.php ===
        $routesFile = __DIR__ . '/../controllers/routes.php';
        $routeKey = str_replace('.html', '', basename($inputPath));
        $routePath = "/recipes/$routeKey";
        $routeEntry = "    '$routePath' => __DIR__  . '/recipes/$routeKey.controller.php',\n";

        // Read in the full file
        $routesContent = file_get_contents($routesFile);

        // Check if the route already exists
        if (str_contains($routesContent, "'$routePath'")) {
            echo "ℹ️  Route already exists: $routePath\n";
        } else {
            // Find the location of the $routes array
            $pattern = '/(\$routes\s*=\s*\[\s*)(.*?)(\s*\];)/s';

            if (preg_match($pattern, $routesContent, $matches)) {
                $before = $matches[1];
                $body = $matches[2];
                $after = $matches[3];

                // Append new route at the end of the array body
                $newBody = rtrim($body) . "\n" . $routeEntry;

                // Reconstruct the full content
                $newRoutesContent = preg_replace($pattern, $before . $newBody . $after, $routesContent);

                file_put_contents($routesFile, $newRoutesContent);
                echo "✅ Route added to routes.php: $routePath\n";
            } else {
                echo "❌ Failed to locate routes array in routes.php\n";
            }
        }
    }
}
