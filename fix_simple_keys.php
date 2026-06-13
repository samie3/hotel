<?php
$base = "/home/u475940437/domains/laviparkhotels.com/public_html";

// Fix dashguestcycle: add simple key format
$f = "$base/modules/dashguestcycle/translations/ar.php";
$c = file_get_contents($f);

$add = array(
    md5("Guests (Adults/Children)") => "الضيوف (بالغين/أطفال)",
    md5("Cancelled Bookings") => "الحجوزات الملغاة",
    md5("Guest Messages") => "رسائل الضيوف",
    md5("Occupied Rooms") => "الغرف المشغولة",
    md5("New Bookings") => "حجوزات جديدة",
    md5("Departures") => "المغادرون",
    md5("Arrivals") => "الواصلون",
    md5("Operations Today") => "عمليات اليوم",
    md5("In-house") => "داخل الفندق",
    md5("Cancellations") => "الإلغاءات",
);

// Remove return from middle
$c = preg_replace("/^return \$_MODULE;\s*\n/m", "", $c);

$added = 0;
foreach ($add as $hash => $ar) {
    $simpleKey = strtolower("<{dashguestcycle}prestashop>dashguestcycle_" . $hash);
    if (strpos($c, $simpleKey) === false) {
        $c = rtrim($c) . "\n\$_MODULE['$simpleKey'] = '$ar';";
        $added++;
    }
}
$c = rtrim($c) . "\nreturn \$_MODULE;\n";
file_put_contents($f, $c);
include $f;
echo "dashguestcycle: Added $added (total: " . count($_MODULE) . ", syntax: " . (php -l $f ? "OK" : "FAIL") . ")\n";
$key = strtolower("<{dashguestcycle}prestashop>dashguestcycle_" . md5("Guests (Adults/Children)"));
echo "  Guests key found: " . (isset($_MODULE[$key]) ? $_MODULE[$key] : "NO") . "\n";

// Fix dashoccupancy
$f = "$base/modules/dashoccupancy/translations/ar.php";
$c = file_get_contents($f);
$add = array(
    md5("Occupancy") => "الإشغال",
    md5("Occupied") => "مشغول",
    md5("Available") => "متاح",
    md5("Unavailable") => "غير متاح",
    md5("Occupied Rooms") => "الغرف المشغولة",
);
$c = preg_replace("/^return \$_MODULE;\s*\n/m", "", $c);
$added = 0;
foreach ($add as $hash => $ar) {
    $simpleKey = strtolower("<{dashoccupancy}prestashop>dashoccupancy_" . $hash);
    if (strpos($c, $simpleKey) === false) {
        $c = rtrim($c) . "\n\$_MODULE['$simpleKey'] = '$ar';";
        $added++;
    }
}
$c = rtrim($c) . "\nreturn \$_MODULE;\n";
file_put_contents($f, $c);
include $f;
echo "dashoccupancy: Added $added (total: " . count($_MODULE) . ", syntax: " . (php -l $f ? "OK" : "FAIL") . ")\n";
$key = strtolower("<{dashoccupancy}prestashop>dashoccupancy_" . md5("Occupancy"));
echo "  Occupancy key found: " . (isset($_MODULE[$key]) ? $_MODULE[$key] : "NO") . "\n";
