<?php
// Add translations with the CORRECT key format (no template path)
$modules = array(
    "dashguestcycle" => array(
        "Arrivals" => "الواصلون",
        "Departures" => "المغادرون",
        "New Bookings" => "حجوزات جديدة",
        "Occupied Rooms" => "الغرف المشغولة",
        "Guest Messages" => "رسائل الضيوف",
        "Cancelled Bookings" => "الحجوزات الملغاة",
        "Guests (Adults/Children)" => "الضيوف (بالغين/أطفال)",
        "Operations Today" => "عمليات اليوم",
        "Refresh" => "تحديث",
        "In-house" => "داخل الفندق",
        "Cancellations" => "الإلغاءات",
    ),
    "dashoccupancy" => array(
        "Occupancy" => "الإشغال",
        "Occupied" => "مشغول",
        "Available" => "متاح",
        "Unavailable" => "غير متاح",
        "Occupied Rooms" => "الغرف المشغولة",
    ),
    "dashgoals" => array(
        "Revenue" => "الإيرادات",
        "Average Order Value" => "متوسط قيمة الطلب",
        "Net Profit" => "صافي الربح",
        "Sales" => "المبيعات",
        "Conversion Rate" => "معدل التحويل",
        "Visits" => "الزيارات",
        "Orders" => "الطلبات",
    ),
);

foreach ($modules as $modName => $strings) {
    $file = "/home/u475940437/domains/laviparkhotels.com/public_html/modules/$modName/translations/ar.php";
    
    // Read current content
    $content = file_get_contents($file);
    
    // Remove return statement from middle if present
    $content = preg_replace("/^return \$_MODULE;\s*\n/m", "", $content);
    
    $added = 0;
    foreach ($strings as $eng => $ar) {
        $hash = md5($eng);
        
        // Key WITHOUT template path (what QloApps might look for)
        $simpleKey = strtolower("<{$modName}prestashop>{$modName}_{$hash}");
        
        // Only add if not already present
        if (strpos($content, $simpleKey) === false) {
            $content = rtrim($content) . "\n\$_MODULE['$simpleKey'] = '$ar';\n";
            $added++;
        }
    }
    
    // Add return at end
    $content = rtrim($content) . "\nreturn \$_MODULE;\n";
    
    file_put_contents($file, $content);
    
    // Verify
    $count = 0;
    include $file;
    $count = count($_MODULE);
    echo "$modName: Added $added (total: $count, syntax: " . (php -l $file ? "OK" : "FAIL") . ")\n";
}
