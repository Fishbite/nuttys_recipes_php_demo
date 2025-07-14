<?php
// helper file to remove the leading DOT from image paths in a file
$viewsDir = __DIR__ . '/../views/recipes';
$files = new DirectoryIterator($viewsDir);

foreach ($files as $fileinfo) {
    if ($fileinfo->isFile() && $fileinfo->getExtension() === 'php') {
        $filePath = $fileinfo->getPathname();
        $content = file_get_contents($filePath);

        // Normalize image paths
        $updated = preg_replace_callback(
            '/(src|href|poster)=["\'](?:\.{0,2}\/)?images\//i',
            fn ($matches) => $matches[1] . '="/images/',
            $content
        );

        if ($updated !== $content) {
            file_put_contents($filePath, $updated);
            echo "✅ Updated: {$fileinfo->getFilename()}\n";
        }
    }
}
