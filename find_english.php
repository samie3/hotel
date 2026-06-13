<?php
$file = $argv[1];
$lines = file($file);
$count = 0;

foreach ($lines as $i => $line) {
    $line = trim($line);
    if (empty($line) || strpos($line, '//') === 0) continue;
    
    if (preg_match("/^\$_LANG\['([^']+)'\]\s*=\s*'([^']*)';$/", $line, $m)) {
        $key = $m[1];
        $val = $m[2];
        
        // Skip if contains Arabic characters
        if (preg_match('/[\x{0600}-\x{06FF}]/u', $val)) continue;
        
        // Skip empty values
        if (empty($val)) continue;
        
        // Skip pure numbers/symbols
        if (preg_match('/^[\d\s\-\.:\/,\(\)]+$/', $val)) continue;
        
        // Skip very short strings
        if (strlen($val) < 3) continue;
        
        // Skip standard English-only patterns
        if (preg_match('/^[A-Z][a-z]+(\s[A-Z][a-z]+)*\s*$/', $val) 
            || preg_match('/^[a-z]/', $val)) {
            echo "Line " . ($i+1) . ": " . $line . "\n";
            $count++;
        }
    }
}
echo "\nTotal English strings: $count\n";
