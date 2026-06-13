<?php
// Use sed-like approach - read the file line by line and replace specific patterns
$file = "themes/hotel-reservation-theme/lang/ar.php";
$content = file_get_contents($file);

// We'll use str_replace with full line matching (including trailing semicolon)
$replacements = [
    "order-opc_d87f73e8ff8d933ed2ba5ddf25040827'] = 'Instant checkout';" => 
        "order-opc_d87f73e8ff8d933ed2ba5ddf25040827'] = '\xd8\xa7\xd9\x84\xd8\xaf\xd9\x81\xd8\xb9\x20\xd8\xa7\xd9\x84\xd9\x81\xd9\x88\xd8\xb1\xd9\x8a';",
    
    "order-opc-advanced_d87f73e8ff8d933ed2ba5ddf25040827'] = 'Instant checkout';" => 
        "order-opc-advanced_d87f73e8ff8d933ed2ba5ddf25040827'] = '\xd8\xa7\xd9\x84\xd8\xaf\xd9\x81\xd8\xb9\x20\xd8\xa7\xd9\x84\xd9\x81\xd9\x88\xd8\xb1\xd9\x8a';",
    
    "authentication_d87f73e8ff8d933ed2ba5ddf25040827'] = 'Instant checkout';" => 
        "authentication_d87f73e8ff8d933ed2ba5ddf25040827'] = '\xd8\xa7\xd9\x84\xd8\xaf\xd9\x81\xd8\xb9\x20\xd8\xa7\xd9\x84\xd9\x81\xd9\x88\xd8\xb1\xd9\x8a';",
    
    "order-opc-new-account_766d4aaf3e045538be23f9a9e17a1593'] = 'Instant Checkout';" => 
        "order-opc-new-account_766d4aaf3e045538be23f9a9e17a1593'] = '\xd8\xa7\xd9\x84\xd8\xaf\xd9\x81\xd8\xb9\x20\xd8\xa7\xd9\x84\xd9\x81\xd9\x88\xd8\xb1\xd9\x8a';",
    
    "order-opc-new-account-advanced_766d4aaf3e045538be23f9a9e17a1593'] = 'Instant Checkout';" => 
        "order-opc-new-account-advanced_766d4aaf3e045538be23f9a9e17a1593'] = '\xd8\xa7\xd9\x84\xd8\xaf\xd9\x81\xd8\xb9\x20\xd8\xa7\xd9\x84\xd9\x81\xd9\x88\xd8\xb1\xd9\x8a';",
];

$count = 0;
foreach ($replacements as $old => $new) {
    // Add the $_LANG prefix
    $old_full = '$_LANG[\'' . $old;
    $new_full = '$_LANG[\'' . $new;
    if (strpos($content, $old_full) !== false) {
        $content = str_replace($old_full, $new_full, $content);
        $count++;
    } else {
        // Try without semicolon
        $old_full_no = '$_LANG[\'' . rtrim($old, ';');
        if (strpos($content, $old_full_no) !== false) {
            $content = str_replace($old_full_no, $new_full, $content);
            $count++;
        }
    }
}

file_put_contents($file, $content);
echo "Fixed $count translations\n";
