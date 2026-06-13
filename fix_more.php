<?php
// Fix more critical English strings in theme AR lang file
// Using hex escapes for Arabic to avoid PHP single-quote issues
$file = "themes/hotel-reservation-theme/lang/ar.php";
$content = file_get_contents($file);

$replacements = [
    // "Instant Checkout" variants
    "order-opc-new-account_766d4aaf3e045538be23f9a9e17a1593'] = 'Instant Checkout';" => 
        "order-opc-new-account_766d4aaf3e045538be23f9a9e17a1593'] = '\xd8\xa7\xd9\x84\xd8\xaf\xd9\x81\xd8\xb9\x20\xd8\xa7\xd9\x84\xd9\x81\xd9\x88\xd8\xb1\xd9\x8a';",
    "order-opc-new-account-advanced_766d4aaf3e045538be23f9a9e17a1593'] = 'Instant Checkout';" => 
        "order-opc-new-account-advanced_766d4aaf3e045538be23f9a9e17a1593'] = '\xd8\xa7\xd9\x84\xd8\xaf\xd9\x81\xd8\xb9\x20\xd8\xa7\xd9\x84\xd9\x81\xd9\x88\xd8\xb1\xd9\x8a';",
    
    // "Guest checkout"
    "order-opc-new-account_12819315d9cf421dcaac8122a71ececa'] = 'Guest checkout';" => 
        "order-opc-new-account_12819315d9cf421dcaac8122a71ececa'] = '\xd8\xa7\xd9\x84\xd8\xaf\xd9\x81\xd8\xb9\x20\xd9\x83\xd8\xb2\xd8\xa7\xd8\xa6\xd8\xb1';",
    "order-opc-new-account-advanced_12819315d9cf421dcaac8122a71ececa'] = 'Guest checkout';" => 
        "order-opc-new-account-advanced_12819315d9cf421dcaac8122a71ececa'] = '\xd8\xa7\xd9\x84\xd8\xaf\xd9\x81\xd8\xb9\x20\xd9\x83\xd8\xb2\xd8\xa7\xd8\xa6\xd8\xb1';",

    // "Proceed to checkout"
    "shopping-cart_7e0bf6d67701868aac3116ade8fea957'] = 'Proceed to checkout';" => 
        "shopping-cart_7e0bf6d67701868aac3116ade8fea957'] = '\xd8\xa7\xd9\x84\xd9\x85\xd8\xaa\xd8\xa7\xd8\xa8\xd8\xb9\xd8\xa9\x20\xd8\xa5\xd9\x84\xd9\x89\x20\xd8\xa7\xd9\x84\xd8\xaf\xd9\x81\xd8\xb9';",
    "authentication_7e0bf6d67701868aac3116ade8fea957'] = 'Proceed to checkout';" => 
        "authentication_7e0bf6d67701868aac3116ade8fea957'] = '\xd8\xa7\xd9\x84\xd9\x85\xd8\xaa\xd8\xa7\xd8\xa8\xd8\xb9\xd8\xa9\x20\xd8\xa5\xd9\x84\xd9\x89\x20\xd8\xa7\xd9\x84\xd8\xaf\xd9\x81\xd8\xb9';",
    "order-address_7e0bf6d67701868aac3116ade8fea957'] = 'Proceed to checkout';" => 
        "order-address_7e0bf6d67701868aac3116ade8fea957'] = '\xd8\xa7\xd9\x84\xd9\x85\xd8\xaa\xd8\xa7\xd8\xa8\xd8\xb9\xd8\xa9\x20\xd8\xa5\xd9\x84\xd9\x89\x20\xd8\xa7\xd9\x84\xd8\xaf\xd9\x81\xd8\xb9';",
    "order-address-multishipping_7e0bf6d67701868aac3116ade8fea957'] = 'Proceed to checkout';" => 
        "order-address-multishipping_7e0bf6d67701868aac3116ade8fea957'] = '\xd8\xa7\xd9\x84\xd9\x85\xd8\xaa\xd8\xa7\xd8\xa8\xd8\xb9\xd8\xa9\x20\xd8\xa5\xd9\x84\xd9\x89\x20\xd8\xa7\xd9\x84\xd8\xaf\xd9\x81\xd8\xb9';",
    "order-carrier_7e0bf6d67701868aac3116ade8fea957'] = 'Proceed to checkout';" => 
        "order-carrier_7e0bf6d67701868aac3116ade8fea957'] = '\xd8\xa7\xd9\x84\xd9\x85\xd8\xaa\xd8\xa7\xd8\xa8\xd8\xb9\xd8\xa9\x20\xd8\xa5\xd9\x84\xd9\x89\x20\xd8\xa7\xd9\x84\xd8\xaf\xd9\x81\xd8\xb9';",
    "order-carrier-advanced_7e0bf6d67701868aac3116ade8fea957'] = 'Proceed to checkout';" => 
        "order-carrier-advanced_7e0bf6d67701868aac3116ade8fea957'] = '\xd8\xa7\xd9\x84\xd9\x85\xd8\xaa\xd8\xa7\xd8\xa8\xd8\xb9\xd8\xa9\x20\xd8\xa5\xd9\x84\xd9\x89\x20\xd8\xa7\xd9\x84\xd8\xaf\xd9\x81\xd8\xb9';",

    // "Free" 
    "shopping-cart_b24ce0cd392a5b0b8dedc66c25213594'] = 'Free';" => 
        "shopping-cart_b24ce0cd392a5b0b8dedc66c25213594'] = '\xd9\x85\xd8\xac\xd8\xa7\xd9\x86\xd9\x8a';",
    "order-carrier_b24ce0cd392a5b0b8dedc66c25213594'] = 'Free';" => 
        "order-carrier_b24ce0cd392a5b0b8dedc66c25213594'] = '\xd9\x85\xd8\xac\xd8\xa7\xd9\x86\xd9\x8a';",
    "order-carrier-advanced_b24ce0cd392a5b0b8dedc66c25213594'] = 'Free';" => 
        "order-carrier-advanced_b24ce0cd392a5b0b8dedc66c25213594'] = '\xd9\x85\xd8\xac\xd8\xa7\xd9\x86\xd9\x8a';",
    "order-carrier-opc-advanced_b24ce0cd392a5b0b8dedc66c25213594'] = 'Free';" => 
        "order-carrier-opc-advanced_b24ce0cd392a5b0b8dedc66c25213594'] = '\xd9\x85\xd8\xac\xd8\xa7\xd9\x86\xd9\x8a';",
    "order-opc_b24ce0cd392a5b0b8dedc66c25213594'] = 'Free';" => 
        "order-opc_b24ce0cd392a5b0b8dedc66c25213594'] = '\xd9\x85\xd8\xac\xd8\xa7\xd9\x86\xd9\x8a';",
    "order-opc-advanced_b24ce0cd392a5b0b8dedc66c25213594'] = 'Free';" => 
        "order-opc-advanced_b24ce0cd392a5b0b8dedc66c25213594'] = '\xd9\x85\xd8\xac\xd8\xa7\xd9\x86\xd9\x8a';",

    // "Your shopping cart" / "Your shopping cart is empty"
    "order-opc_a40cab5994f36d4c48103a22ca082e8f'] = 'Your shopping cart';" => 
        "order-opc_a40cab5994f36d4c48103a22ca082e8f'] = '\xd8\xb9\xd8\xb1\xd8\xa8\xd8\xa9\x20\xd8\xa7\xd9\x84\xd8\xaa\xd8\xb3\xd9\x88\xd9\x82';",
    "order-opc-advanced_a40cab5994f36d4c48103a22ca082e8f'] = 'Your shopping cart';" => 
        "order-opc-advanced_a40cab5994f36d4c48103a22ca082e8f'] = '\xd8\xb9\xd8\xb1\xd8\xa8\xd8\xa9\x20\xd8\xa7\xd9\x84\xd8\xaa\xd8\xb3\xd9\x88\xd9\x82';",
    "shopping-cart_a40cab5994f36d4c48103a22ca082e8f'] = 'Your shopping cart';" => 
        "shopping-cart_a40cab5994f36d4c48103a22ca082e8f'] = '\xd8\xb9\xd8\xb1\xd8\xa8\xd8\xa9\x20\xd8\xa7\xd9\x84\xd8\xaa\xd8\xb3\xd9\x88\xd9\x82';",
    "shopping-cart-advanced_a40cab5994f36d4c48103a22ca082e8f'] = 'Your shopping cart';" => 
        "shopping-cart-advanced_a40cab5994f36d4c48103a22ca082e8f'] = '\xd8\xb9\xd8\xb1\xd8\xa8\xd8\xa9\x20\xd8\xa7\xd9\x84\xd8\xaa\xd8\xb3\xd9\x88\xd9\x82';",

    "order-opc_879f6b8877752685a966564d072f498f'] = 'Your shopping cart is empty.';" => 
        "order-opc_879f6b8877752685a966564d072f498f'] = '\xd8\xb9\xd8\xb1\xd8\xa8\xd8\xa9\x20\xd8\xa7\xd9\x84\xd8\xaa\xd8\xb3\xd9\x88\xd9\x82\x20\xd9\x81\xd8\xa7\xd8\xb1\xd8\xba\xd8\xa9.';",
    "order-opc-advanced_879f6b8877752685a966564d072f498f'] = 'Your shopping cart is empty.';" => 
        "order-opc-advanced_879f6b8877752685a966564d072f498f'] = '\xd8\xb9\xd8\xb1\xd8\xa8\xd8\xa9\x20\xd8\xa7\xd9\x84\xd8\xaa\xd8\xb3\xd9\x88\xd9\x82\x20\xd9\x81\xd8\xa7\xd8\xb1\xd8\xba\xd8\xa9.';",
    "shopping-cart_879f6b8877752685a966564d072f498f'] = 'Your shopping cart is empty.';" => 
        "shopping-cart_879f6b8877752685a966564d072f498f'] = '\xd8\xb9\xd8\xb1\xd8\xa8\xd8\xa9\x20\xd8\xa7\xd9\x84\xd8\xaa\xd8\xb3\xd9\x88\xd9\x82\x20\xd9\x81\xd8\xa7\xd8\xb1\xd8\xba\xd8\xa9.';",
    "order-payment-advanced_879f6b8877752685a966564d072f498f'] = 'Your shopping cart is empty.';" => 
        "order-payment-advanced_879f6b8877752685a966564d072f498f'] = '\xd8\xb9\xd8\xb1\xd8\xa8\xd8\xa9\x20\xd8\xa7\xd9\x84\xd8\xaa\xd8\xb3\xd9\x88\xd9\x82\x20\xd9\x81\xd8\xa7\xd8\xb1\xd8\xba\xd8\xa9.';",

    // "Delivery address" / "Invoice address"
    "order-opc_af0f5bdc5be121b9307687aeeae38c17'] = 'Delivery address';" => 
        "order-opc_af0f5bdc5be121b9307687aeeae38c17'] = '\xd8\xb9\xd9\x86\xd9\x88\xd8\xa7\xd9\x86\x20\xd8\xa7\xd9\x84\xd8\xaa\xd9\x88\xd8\xb5\xd9\x8a\xd9\x84';",
    "order-opc-advanced_af0f5bdc5be121b9307687aeeae38c17'] = 'Delivery address';" => 
        "order-opc-advanced_af0f5bdc5be121b9307687aeeae38c17'] = '\xd8\xb9\xd9\x86\xd9\x88\xd8\xa7\xd9\x86\x20\xd8\xa7\xd9\x84\xd8\xaa\xd9\x88\xd8\xb5\xd9\x8a\xd9\x84';",
    "shopping-cart_af0f5bdc5be121b9307687aeeae38c17'] = 'Delivery address';" => 
        "shopping-cart_af0f5bdc5be121b9307687aeeae38c17'] = '\xd8\xb9\xd9\x86\xd9\x88\xd8\xa7\xd9\x86\x20\xd8\xa7\xd9\x84\xd8\xaa\xd9\x88\xd8\xb5\xd9\x8a\xd9\x84';",

    "order-opc_601d8c4b9f72fc1862013c19b677a499'] = 'Invoice address';" => 
        "order-opc_601d8c4b9f72fc1862013c19b677a499'] = '\xd8\xb9\xd9\x86\xd9\x88\xd8\xa7\xd9\x86\x20\xd8\xa7\xd9\x84\xd9\x81\xd8\xa7\xd8\xaa\xd9\x88\xd8\xb1\xd8\xa9';",
    "order-opc-advanced_601d8c4b9f72fc1862013c19b677a499'] = 'Invoice address';" => 
        "order-opc-advanced_601d8c4b9f72fc1862013c19b677a499'] = '\xd8\xb9\xd9\x86\xd9\x88\xd8\xa7\xd9\x86\x20\xd8\xa7\xd9\x84\xd9\x81\xd8\xa7\xd8\xaa\xd9\x88\xd8\xb1\xd8\xa9';",

    // "Error(s)"
    "order-opc_5fbddd8d4e0d8c7a868272f2f171df09'] = 'There is %d error';" => 
        "order-opc_5fbddd8d4e0d8c7a868272f2f171df09'] = '\xd9\x8a\xd9\x88\xd8\xac\xd8\xaf\x20\x25\x64\x20\xd8\xae\xd8\xb7\xd8\xa3';",
    "order-opc-advanced_5fbddd8d4e0d8c7a868272f2f171df09'] = 'There is %d error';" => 
        "order-opc-advanced_5fbddd8d4e0d8c7a868272f2f171df09'] = '\xd9\x8a\xd9\x88\xd8\xac\xd8\xaf\x20\x25\x64\x20\xd8\xae\xd8\xb7\xd8\xa3';",

    // "Cart" 
    "blockcart_5e6bec65889fa2fd93c5354f026e86fd'] = 'View cart';" =>
        "blockcart_5e6bec65889fa2fd93c5354f026e86fd'] = '\xd8\xb9\xd8\xb1\xd8\xb6\x20\xd8\xb9\xd8\xb1\xd8\xa8\xd8\xa9\x20\xd8\xa7\xd9\x84\xd8\xad\xd8\xac\xd8\xb2';",

    // "None"
    "discount_6adf97f83acf6453d4a6a4b1070f3754'] = 'None';" =>
        "discount_6adf97f83acf6453d4a6a4b1070f3754'] = '\xd9\x84\xd8\xa7\x20\xd8\xa3\xd8\xad\xd8\xaf';",

    // "Next" / "Previous" / "Show all"  
    "global_10ac3d04253ef7e1ddc73e6091c0cd55'] = 'Next';" =>
        "global_10ac3d04253ef7e1ddc73e6091c0cd55'] = '\xd8\xa7\xd9\x84\xd8\xaa\xd8\xa7\xd9\x84\xd9\x8a';",
    "global_dd1f775e443ff3b9a89270713580a51b'] = 'Previous';" =>
        "global_dd1f775e443ff3b9a89270713580a51b'] = '\xd8\xa7\xd9\x84\xd8\xb3\xd8\xa7\xd8\xa8\xd9\x82';",
    "pagination_10ac3d04253ef7e1ddc73e6091c0cd55'] = 'Next';" =>
        "pagination_10ac3d04253ef7e1ddc73e6091c0cd55'] = '\xd8\xa7\xd9\x84\xd8\xaa\xd8\xa7\xd9\x84\xd9\x8a';",
    "pagination_dd1f775e443ff3b9a89270713580a51b'] = 'Previous';" =>
        "pagination_dd1f775e443ff3b9a89270713580a51b'] = '\xd8\xa7\xd9\x84\xd8\xb3\xd8\xa7\xd8\xa8\xd9\x82';",
    "pagination_eb92025cb8c66f1850c13a9b602a1856'] = 'Show all';" =>
        "pagination_eb92025cb8c66f1850c13a9b602a1856'] = '\xd8\xb9\xd8\xb1\xd8\xb6\x20\xd8\xa7\xd9\x84\xd9\x83\xd9\x84';",
];

$count = 0;
foreach ($replacements as $old => $new) {
    $old_full = '$_LANG[\'' . $old;
    $new_full = '$_LANG[\'' . $new;
    if (strpos($content, $old_full) !== false) {
        $content = str_replace($old_full, $new_full, $content);
        $count++;
    }
}

file_put_contents($file, $content);
echo "Fixed $count more translations\n";
