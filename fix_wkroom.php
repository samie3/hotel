<?php
// Fix wkhotelroom translations - add missing AR translations
$file = "modules/wkhotelroom/translations/ar.php";
$content = file_get_contents($file);

$additions = '
$_MODULE[\'<{wkhotelroom}prestashop>hotelroomdisplayblock_8570857bbcd1e365642f035961a774e4\'] = \'احجز الآن\';
$_MODULE[\'<{wkhotelroom}prestashop>hotelroomdisplayblock_4351cfebe4b61d8aa5efa1d020710005\'] = \'عرض\';
';

$content = str_replace("return \$_MODULE;", $additions . "\nreturn \$_MODULE;", $content);
file_put_contents($file, $content);
echo "Done: wkhotelroom/translations/ar.php\n";
