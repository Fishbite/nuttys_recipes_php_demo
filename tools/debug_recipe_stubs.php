<?php
$metaFile = __DIR__ . '/controllers_output_utf8.txt';

$lines = file($metaFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if (!$lines) {
    exit("❌ Could not read lines from $metaFile\n");
}

echo "📄 Total lines: " . count($lines) . "\n";

foreach ($lines as $i => $line) {
    echo "🔹 Line $i: " . bin2hex($line) . " (" . $line . ")\n";
    if ($i > 5) {
        break;
    } // Stop after a few lines
}


$currentSlug = '';
$data = [];

foreach ($lines as $i => $line) {
    $line = trim($line);

    if (preg_match('/^\/\/\s*======\s*(.+?)\.controller\.php\s*======/', $line, $matches)) {
        if ($currentSlug) {
            echo "✅ Block completed for: $currentSlug\n";
            print_r($data);
        }

        $currentSlug = $matches[1];
        echo "📦 Found block at line $i: $currentSlug\n";
        $data = [];
        continue;
    }

    if (preg_match('/^\$(\w+)\s*=\s*(.+);$/', $line, $m)) {
        $key = $m[1];
        $val = trim($m[2], '\'" ');
        $val = html_entity_decode($val, ENT_QUOTES | ENT_HTML5);
        $val = str_replace(["\\'", 'ÔÇö'], ["'", '—'], $val);
        $data[$key] = $val;
        echo "🟡 Parsed: $key = $val\n";
    }
}

if ($currentSlug && !empty($data)) {
    echo "✅ Final block: $currentSlug\n";
    print_r($data);
}
