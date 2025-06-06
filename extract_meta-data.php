<?php

$directory = __DIR__ . '/old-html'; // Folder containing legacy .html files
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($directory)
);

foreach ($iterator as $file) {
    if ($file->isFile() && strtolower($file->getExtension()) === 'html') {
        $filename = $file->getFilename();
        $basename = pathinfo($filename, PATHINFO_FILENAME);
        $html = file_get_contents($file->getPathname());

        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTML($html);
        libxml_clear_errors();

        $xpath = new DOMXPath($dom);

        // Extract title
        $title = $dom->getElementsByTagName('title')->item(0)?->nodeValue ?? '';

        // Meta Description
        $description = '';
        $descNode = $xpath->query('//meta[@name="description"]')->item(0);
        if ($descNode instanceof DOMElement) {
            $description = $descNode->getAttribute('content');
        }

        // Open Graph Description
        $ogDescription = '';
        $ogDescNode = $xpath->query('//meta[@property="og:description"]')->item(0);
        if ($ogDescNode instanceof DOMElement) {
            $ogDescription = $ogDescNode->getAttribute('content');
        }

        // Open Graph Image
        $ogImage = '';
        $ogImageNode = $xpath->query('//meta[@property="og:image"]')->item(0);
        if ($ogImageNode instanceof DOMElement) {
            $ogImage = $ogImageNode->getAttribute('content');
        }

        // Canonical URL
        $canonical = '';
        $canonicalNode = $xpath->query('//link[@rel="canonical"]')->item(0);
        if ($canonicalNode instanceof DOMElement) {
            $canonical = $canonicalNode->getAttribute('href');
        }

        // Output formatted PHP controller variables
        echo "// ====== {$basename}.controller.php ======\n";
        echo '$title = ' . var_export($title, true) . ";\n";
        echo '$description = ' . var_export($description, true) . ";\n";
        echo '$ogDescription = ' . var_export($ogDescription, true) . ";\n";
        echo '$ogImage = ' . var_export($ogImage, true) . ";\n";
        echo '$canonical = ' . var_export($canonical, true) . ";\n";
        echo "\n";
    }
}
