<?php
$testDir = __DIR__ . '/test_dir';
$testFile = $testDir . '/test_file.txt';

mkdir($testDir, 0755, true);
$result = file_put_contents($testFile, 'Test content');

if ($result === false) {
    echo "Failed to write to $testFile\n";
} else {
    echo "Successfully wrote to $testFile\n";
}
