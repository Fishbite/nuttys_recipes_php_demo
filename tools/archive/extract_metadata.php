<?php

// ###############################################################################
// NOTE: VS Code may incorrectly flag getAttribute() as undefined — safe to ignore
// ###############################################################################

// === Configuration ===
$sourceDir = __DIR__ . '/old-html';
$outputFile = __DIR__ . '/controllers_output3.txt';

// === Get HTML files ===
$htmlFiles = glob("$sourceDir/*.html");

if (!$htmlFiles) {
    exit("❌ No HTML files found in $sourceDir\n");
}

$output = '';

foreach ($htmlFiles as $filePath) {
    $filename = basename($filePath);
    $slug = pathinfo($filename, PATHINFO_FILENAME);
    $slug = trim($slug);

    echo "🔍 Parsing $filename...\n";

    $dom = new DOMDocument();
    libxml_use_internal_errors(true); // silence invalid HTML warnings
    $html = file_get_contents($filePath);

    if (empty($html)) {
        echo "⚠️ Skipped $filename — file empty.\n";
        continue;
    }

    $dom->loadHTML($html);
    $xpath = new DOMXPath($dom);

    // === Extract title ===
    $titleTag = $dom->getElementsByTagName('title')->item(0);
    $title = $titleTag ? trim($titleTag->nodeValue) : '';

    // === Extract <meta name="description">
    $description = '';
    $descMeta = $xpath->query('//meta[@name="description"]')->item(0);
    if ($descMeta) {
        $description = $descMeta->getAttribute('content');
    }

    // === Extract <meta property="og:description">
    $ogDescription = '';
    $ogDescMeta = $xpath->query('//meta[@property="og:description"]')->item(0);
    if ($ogDescMeta) {
        $ogDescription = $ogDescMeta->getAttribute('content');
    }

    // === Extract <meta property="og:image">
    $ogImage = '';
    $ogImgMeta = $xpath->query('//meta[@property="og:image"]')->item(0);
    if ($ogImgMeta) {
        $ogImage = $ogImgMeta->getAttribute('content');
    }

    // === Extract <link rel="canonical">
    $canonical = '';
    $canonicalLink = $xpath->query('//link[@rel="canonical"]')->item(0);
    if ($canonicalLink) {
        $canonical = $canonicalLink->getAttribute('href');
    }

    // === Build block ===
    $block = "// ====== $slug.controller.php ======\n";
    $block .= '$title = ' . var_export($title, true) . ";\n";
    $block .= '$description = ' . var_export($description, true) . ";\n";
    $block .= '$ogDescription = ' . var_export($ogDescription, true) . ";\n";
    $block .= '$ogImage = ' . var_export($ogImage, true) . ";\n";
    $block .= '$canonical = ' . var_export($canonical, true) . ";\n\n";

    $output .= $block;
}

file_put_contents($outputFile, $output);

echo "✅ Metadata written to: $outputFile\n";
