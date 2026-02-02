<?php
$args = isset($argv) ? implode(' ', array_slice($argv, 1)) : '';
$verbose = (strpos($args, 'verbose=true') !== false || strpos($args, '--verbose') !== false);

if ($verbose) {
    echo "[verbose] " . date('c') . "\n";
    echo "[verbose] cwd: " . getcwd() . "\n";
    echo "[verbose] script: " . __FILE__ . "\n";
    echo "[verbose] run\n";
    echo "---\n";
}

require __DIR__ . '/index.php';
echo "\n";
