<?php
// CONFIG
$htmlDir = __DIR__ . '/../old-html';
$outputFile = __DIR__ . '/../controllers_output5.txt';

$files = glob("{$htmlDir}/*.html");
if (!$files) {
    exit("❌ No .html files found in \$htmlDir\n");
}

$out = fopen($outputFile, 'w');

foreach ($files as $file) {
    $basename = basename($file, '.html');
    $html = file_get_contents($file);

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    $xpath = new DOMXPath($dom);

    $pageTitle = $xpath->query('//title')->item(0)?->nodeValue ?? '';
    $metaDescription = '';
    $ogDescription = '';
    $ogImage = '';
    $canonical = '';
    $styleBlock = '';
    $stylesheets = [];

    foreach ($xpath->query('//meta') as $meta) {
        if (! $meta instanceof DOMElement) {
            continue;
        }
        $name = $meta->getAttribute('name');
        $property = $meta->getAttribute('property');
        $content = $meta->getAttribute('content');

        if ($name === 'description') {
            $metaDescription = $content;
        }
        if ($property === 'og:description') {
            $ogDescription = $content;
        }
        if ($property === 'og:image') {
            $ogImage = $content;
        }
        if ($property === 'og:url') {
            $canonical = $content;
        }
    }

    foreach ($xpath->query('//style') as $styleNode) {
        if (! $styleNode instanceof DOMElement) {
            continue;
        }
        $styleBlock = trim($styleNode->nodeValue);
    }

    foreach ($xpath->query('//link[@rel="stylesheet"]') as $linkNode) {
        if (! $linkNode instanceof DOMElement) {
            continue;
        }
        $href = trim($linkNode->getAttribute('href'));
        if ($href) {
            $stylesheets[] = $href;
        }
    }

    $recipeName = ucwords(str_replace('-', ' ', $basename));

    fwrite($out, "// ====== {$basename}.controller.php ======\n");
    fwrite($out, "\$pageTitle = '" . addslashes(trim($pageTitle)) . "';\n");
    fwrite($out, "\$metaDescription = <<<'TEXT'\n$metaDescription\nTEXT;\n");
    fwrite($out, "\$ogDescription = <<<'TEXT'\n$ogDescription\nTEXT;\n");
    fwrite($out, "\$ogImage = '" . addslashes(trim($ogImage)) . "';\n");
    fwrite($out, "\$canonical = '" . addslashes(trim($canonical)) . "';\n");
    fwrite($out, "\n");

    fwrite($out, "\$recipeName = '" . addslashes($recipeName) . "';\n");
    fwrite($out, "\$recipeIntro = <<<'TEXT'\n$metaDescription\nTEXT;\n");

    if ($styleBlock !== '') {
        fwrite($out, "\n\$styleBlock = <<<CSS\n$styleBlock\nCSS;\n");
    }

    if (!empty($stylesheets)) {
        fwrite($out, "\n\$stylesheets = [\n");
        foreach ($stylesheets as $sheet) {
            fwrite($out, "    '" . addslashes($sheet) . "',\n");
        }
        fwrite($out, "];\n");
    }

    fwrite($out, "\n");
}

fclose($out);
echo "✅ Metadata extracted to controllers_output5.txt\n";
