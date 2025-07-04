<?php
// converts multiple HTML files to PHP
// replaces parts of documents with PHP partials

// set the directory where the static HTML files are stored
$dir = new DirectoryIterator('old-html');
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
        $file = $fileinfo->getFilename();
        // var_dump($file);
        $filename = pathinfo($file, PATHINFO_FILENAME);
        // var_dump($filename);

        // $inputPath = __DIR__ . '/old-html/beef-stroganoff.html';
        $inputPath = __DIR__ . "/old-html/$file";
        $outputPath = __DIR__ . "/views/recipes/$filename.view.php";

        $html = file_get_contents($inputPath);

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

        // Insert footer and script between </section> & </body>
        // </section> — matches the closing section tag literally.
        // \s*.*? — matches any whitespace and any characters non-greedily (stopping at the next part).
        // (?=</body>) — a lookahead to ensure we stop just before </body> (so it doesn’t get consumed).
        // We preserve </section> and insert the footer/script right after it.
        $html = preg_replace(
            '#</section>\s*.*?(?=</body>)#s',
            "</section>\n  <?php require __DIR__ . '/../partials/footer.php'; ?>\n  <script src=\"/scripts/tabs.js\"></script>\n",
            $html
        );

        // Write the new view file
        file_put_contents($outputPath, $html);
        echo "✅ View file created: $outputPath\n";

        // === Add route to routes.php ===
        $routesFile = __DIR__ . '/controllers/routes.php';
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
