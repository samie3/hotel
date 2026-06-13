<?php
// Place this file in the admin707akbcps/ directory
define('_PS_ADMIN_DIR_', getcwd());
define('PS_ADMIN_DIR', _PS_ADMIN_DIR_);
require(_PS_ADMIN_DIR_.'/../config/config.inc.php');
require(_PS_ADMIN_DIR_.'/functions.php');

$context = Context::getContext();

$headerTpl = _PS_ADMIN_DIR_.'/themes/default/template/header.tpl';
if (!file_exists($headerTpl)) { die("ERROR: header.tpl not found\n"); }

$tplContent = file_get_contents($headerTpl);
if (strpos($tplContent, 'language_infos') === false) { die("ERROR: language_infos not found\n"); }
echo "OK: header.tpl has language_infos\n";

// Compile the header template to check for errors
try {
    ob_start();
    $context->smarty->display($headerTpl);
    $html = ob_get_clean();
    if (strpos($html, 'language_infos') !== false) {
        echo "OK: Language switcher renders in HTML\n";
    } else {
        echo "WARN: language_infos not in output\n";
    }
} catch (Exception $e) {
    echo "ERROR: Smarty compilation failed: " . $e->getMessage() . "\n";
    exit(1);
}

@unlink(__FILE__);
echo "DONE\n";
