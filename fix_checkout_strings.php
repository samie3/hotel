<?php
// Fix key English strings in the Arabic theme translation file
// Focus on checkout-related strings visible to users

$file = "themes/hotel-reservation-theme/lang/ar.php";
$content = file_get_contents($file);

$replacements = [
    // order-opc page
    ["order-opc_d87f73e8ff8d933ed2ba5ddf25040827'] = 'Instant checkout'", "order-opc_d87f73e8ff8d933ed2ba5ddf25040827'] = 'الدفع الفوري'"],
    ["order-opc-advanced_d87f73e8ff8d933ed2ba5ddf25040827'] = 'Instant checkout'", "order-opc-advanced_d87f73e8ff8d933ed2ba5ddf25040827'] = 'الدفع الفوري'"],
    ["authentication_d87f73e8ff8d933ed2ba5ddf25040827'] = 'Instant checkout'", "authentication_d87f73e8ff8d933ed2ba5ddf25040827'] = 'الدفع الفوري'"],
    
    // order-opc-new-account strings
    ["order-opc-new-account_766d4aaf3e045538be23f9a9e17a1593'] = 'Instant Checkout'", "order-opc-new-account_766d4aaf3e045538be23f9a9e17a1593'] = 'الدفع الفوري'"],
    ["order-opc-new-account_12819315d9cf421dcaac8122a71ececa'] = 'Guest checkout'", "order-opc-new-account_12819315d9cf421dcaac8122a71ececa'] = 'الدفع كزائر'"],
    ["order-opc-new-account_ce025dc66f590f8c03ad9556bc376d9e'] = 'A fast and easy check out process'", "order-opc-new-account_ce025dc66f590f8c03ad9556bc376d9e'] = 'عملية دفع سريعة وسهلة'"],
    ["order-opc-new-account_d50965b89f4bf0dfbc5b1f13052421a4'] = 'Create your account today and enjoy:'", "order-opc-new-account_d50965b89f4bf0dfbc5b1f13052421a4'] = 'أنشئ حسابك اليوم واستمتع بـ:'"],
    ["order-opc-new-account_7a8fe8aaa64e691d82f429d39e0df3a5'] = 'Personalized and secure access'", "order-opc-new-account_7a8fe8aaa64e691d82f429d39e0df3a5'] = 'وصول آمن وشخصي'"],
    ["order-opc-new-account_c28639657b4e3352241f83d8b6021e4e'] = 'New Customer'", "order-opc-new-account_c28639657b4e3352241f83d8b6021e4e'] = 'عميل جديد'"],
    ["order-opc-new-account_6a35e1439d14f62e7177f59c175c886f'] = 'Account information saved successfully'", "order-opc-new-account_6a35e1439d14f62e7177f59c175c886f'] = 'تم حفظ معلومات الحساب بنجاح'"],
    
    // order-opc-new-account-advanced
    ["order-opc-new-account-advanced_766d4aaf3e045538be23f9a9e17a1593'] = 'Instant Checkout'", "order-opc-new-account-advanced_766d4aaf3e045538be23f9a9e17a1593'] = 'الدفع الفوري'"],
    ["order-opc-new-account-advanced_12819315d9cf421dcaac8122a71ececa'] = 'Guest checkout'", "order-opc-new-account-advanced_12819315d9cf421dcaac8122a71ececa'] = 'الدفع كزائر'"],
    ["order-opc-new-account-advanced_ce025dc66f590f8c03ad9556bc376d9e'] = 'A fast and easy check out process'", "order-opc-new-account-advanced_ce025dc66f590f8c03ad9556bc376d9e'] = 'عملية دفع سريعة وسهلة'"],
    ["order-opc-new-account-advanced_d50965b89f4bf0dfbc5b1f13052421a4'] = 'Create your account today and enjoy:'", "order-opc-new-account-advanced_d50965b89f4bf0dfbc5b1f13052421a4'] = 'أنشئ حسابك اليوم واستمتع بـ:'"],
    ["order-opc-new-account-advanced_7a8fe8aaa64e691d82f429d39e0df3a5'] = 'Personalized and secure access'", "order-opc-new-account-advanced_7a8fe8aaa64e691d82f429d39e0df3a5'] = 'وصول آمن وشخصي'"],
    ["order-opc-new-account-advanced_c28639657b4e3352241f83d8b6021e4e'] = 'New Customer'", "order-opc-new-account-advanced_c28639657b4e3352241f83d8b6021e4e'] = 'عميل جديد'"],
    ["order-opc-new-account-advanced_6a35e1439d14f62e7177f59c175c886f'] = 'Account information saved successfully'", "order-opc-new-account-advanced_6a35e1439d14f62e7177f59c175c886f'] = 'تم حفظ معلومات الحساب بنجاح'"],

    // order-opc advanced page
    ["order-opc-advanced_238a062a6a2543fd85d6616a8506fbe8'] = 'No carrier is needed for this order'", "order-opc-advanced_238a062a6a2543fd85d6616a8506fbe8'] = 'لا حاجة لشركة شحن لهذا الطلب'"],
    ["order-opc-advanced_25d8efaba32cb44a922a727f20eaa002'] = 'The service terms have not been accepted'", "order-opc-advanced_25d8efaba32cb44a922a727f20eaa002'] = 'لم يتم قبول شروط الخدمة'"],
    ["order-opc-advanced_2e75f367f058646a1ba2fd01ceb74423'] = 'You do not need to accept the Terms of Service for this order.'", "order-opc-advanced_2e75f367f058646a1ba2fd01ceb74423'] = 'لا تحتاج إلى قبول شروط الخدمة لهذا الطلب.'"],
    ["order-opc-advanced_449374f661344e843453c4e189ddeed8'] = 'Modify my address'", "order-opc-advanced_449374f661344e843453c4e189ddeed8'] = 'تعديل عنواني'"],
    ["order-opc-advanced_4ce81305b7edb043d0a7a5c75cab17d0'] = 'There is'", "order-opc-advanced_4ce81305b7edb043d0a7a5c75cab17d0'] = 'يوجد'"],
    ["order-opc-advanced_601d8c4b9f72fc1862013c19b677a499'] = 'Invoice address'", "order-opc-advanced_601d8c4b9f72fc1862013c19b677a499'] = 'عنوان الفاتورة'"],
    ["order-opc-advanced_78fa1019f9a9759b45c76e186393756f'] = 'Your new order was not accepted.'", "order-opc-advanced_78fa1019f9a9759b45c76e186393756f'] = 'لم يتم قبول طلبك الجديد.'"],
    ["order-opc-advanced_879f6b8877752685a966564d072f498f'] = 'Your shopping cart is empty.'", "order-opc-advanced_879f6b8877752685a966564d072f498f'] = 'عربة التسوق فارغة.'],
    ["order-opc-advanced_9504d494016e17a6de7e7b51da637bc4'] = 'No carrier has been selected'", "order-opc-advanced_9504d494016e17a6de7e7b51da637bc4'] = 'لم يتم اختيار شركة شحن'"],
    ["order-opc-advanced_a40cab5994f36d4c48103a22ca082e8f'] = 'Your shopping cart'", "order-opc-advanced_a40cab5994f36d4c48103a22ca082e8f'] = 'عربة التسوق'"],
    ["order-opc-advanced_ad52144224a9fb9e04b8b9ef22ce36f7'] = 'Please start by selecting an address.'", "order-opc-advanced_ad52144224a9fb9e04b8b9ef22ce36f7'] = 'يرجى البدء باختيار عنوان.'], 
    ["order-opc-advanced_af0f5bdc5be121b9307687aeeae38c17'] = 'Delivery address'", "order-opc-advanced_af0f5bdc5be121b9307687aeeae38c17'] = 'عنوان التوصيل'"],
    ["order-opc-advanced_b24ce0cd392a5b0b8dedc66c25213594'] = 'Free'", "order-opc-advanced_b24ce0cd392a5b0b8dedc66c25213594'] = 'مجاني'"],
    ["order-opc-advanced_d236af51d8eac54fe7c366af1f6b358c'] = 'The service terms have been accepted'", "order-opc-advanced_d236af51d8eac54fe7c366af1f6b358c'] = 'تم قبول شروط الخدمة'"],
    ["order-opc-advanced_ea295188b69aa5e04810abcc38b2b2be'] = 'has been selected'", "order-opc-advanced_ea295188b69aa5e04810abcc38b2b2be'] = 'تم اختياره'"],
    ["order-opc-advanced_fe816ec4b30c11a39edfd8b0a4cfab49'] = 'Error(s)'", "order-opc-advanced_fe816ec4b30c11a39edfd8b0a4cfab49'] = 'خطأ'"],
    
    // order-opc
    ["order-opc_238a062a6a2543fd85d6616a8506fbe8'] = 'No carrier is needed for this order'", "order-opc_238a062a6a2543fd85d6616a8506fbe8'] = 'لا حاجة لشركة شحن لهذا الطلب'"],
    ["order-opc_25d8efaba32cb44a922a727f20eaa002'] = 'The service terms have not been accepted'", "order-opc_25d8efaba32cb44a922a727f20eaa002'] = 'لم يتم قبول شروط الخدمة'"],
    ["order-opc_2e75f367f058646a1ba2fd01ceb74423'] = 'You do not need to accept the Terms of Service for this order.'", "order-opc_2e75f367f058646a1ba2fd01ceb74423'] = 'لا تحتاج إلى قبول شروط الخدمة لهذا الطلب.'"],
    ["order-opc_449374f661344e843453c4e189ddeed8'] = 'Modify my address'", "order-opc_449374f661344e843453c4e189ddeed8'] = 'تعديل عنواني'"],
    ["order-opc_4ce81305b7edb043d0a7a5c75cab17d0'] = 'There is'", "order-opc_4ce81305b7edb043d0a7a5c75cab17d0'] = 'يوجد'"],
    ["order-opc_601d8c4b9f72fc1862013c19b677a499'] = 'Invoice address'", "order-opc_601d8c4b9f72fc1862013c19b677a499'] = 'عنوان الفاتورة'"],
    ["order-opc_78fa1019f9a9759b45c76e186393756f'] = 'Your new order was not accepted.'", "order-opc_78fa1019f9a9759b45c76e186393756f'] = 'لم يتم قبول طلبك الجديد.'"],
    ["order-opc_879f6b8877752685a966564d072f498f'] = 'Your shopping cart is empty.'", "order-opc_879f6b8877752685a966564d072f498f'] = 'عربة التسوق فارغة.'],  
    ["order-opc_9504d494016e17a6de7e7b51da637bc4'] = 'No carrier has been selected'", "order-opc_9504d494016e17a6de7e7b51da637bc4'] = 'لم يتم اختيار شركة شحن'"],
    ["order-opc_a40cab5994f36d4c48103a22ca082e8f'] = 'Your shopping cart'", "order-opc_a40cab5994f36d4c48103a22ca082e8f'] = 'عربة التسوق'"],
    ["order-opc_ad52144224a9fb9e04b8b9ef22ce36f7'] = 'Please start by selecting an address.'", "order-opc_ad52144224a9fb9e04b8b9ef22ce36f7'] = 'يرجى البدء باختيار عنوان.'], 
    ["order-opc_af0f5bdc5be121b9307687aeeae38c17'] = 'Delivery address'", "order-opc_af0f5bdc5be121b9307687aeeae38c17'] = 'عنوان التوصيل'"],
    ["order-opc_b24ce0cd392a5b0b8dedc66c25213594'] = 'Free'", "order-opc_b24ce0cd392a5b0b8dedc66c25213594'] = 'مجاني'"],
    ["order-opc_d236af51d8eac54fe7c366af1f6b358c'] = 'The service terms have been accepted'", "order-opc_d236af51d8eac54fe7c366af1f6b358c'] = 'تم قبول شروط الخدمة'"],
    ["order-opc_ea295188b69aa5e04810abcc38b2b2be'] = 'has been selected'", "order-opc_ea295188b69aa5e04810abcc38b2b2be'] = 'تم اختياره'"],
    ["order-opc_fe816ec4b30c11a39edfd8b0a4cfab49'] = 'Error(s)'", "order-opc_fe816ec4b30c11a39edfd8b0a4cfab49'] = 'خطأ'"],
    
    // shopping-cart 
    ["shopping-cart_a40cab5994f36d4c48103a22ca082e8f'] = 'Your shopping cart'", "shopping-cart_a40cab5994f36d4c48103a22ca082e8f'] = 'عربة التسوق'"],
    ["shopping-cart_879f6b8877752685a966564d072f498f'] = 'Your shopping cart is empty.'", "shopping-cart_879f6b8877752685a966564d072f498f'] = 'عربة التسوق فارغة.'], 
    ["shopping-cart_7e0bf6d67701868aac3116ade8fea957'] = 'Proceed to checkout'", "shopping-cart_7e0bf6d67701868aac3116ade8fea957'] = 'المتابعة إلى الدفع'"],
    ["shopping-cart_300225ee958b6350abc51805dab83c24'] = 'Continue shopping'", "shopping-cart_300225ee958b6350abc51805dab83c24'] = 'متابعة التسوق'"],
    ["shopping-cart_ecba3578d8cd65126d4a47c76b3c9c2d'] = 'Free Shipping!'", "shopping-cart_ecba3578d8cd65126d4a47c76b3c9c2d'] = 'شحن مجاني!' ],
    ["shopping-cart_12a7a93d72ded50311b52c7d0a853e3c'] = 'Take advantage of our exclusive offers:'", "shopping-cart_12a7a93d72ded50311b52c7d0a853e3c'] = 'استفد من عروضنا الحصرية:' ],
    ["shopping-cart_b4f90d226d5212c67236540da6b5c2da'] = 'Last product added'", "shopping-cart_b4f90d226d5212c67236540da6b5c2da'] = 'آخر منتج مضاف'"],

    // header 
    ["header_0fcd4065ff78fceb3083316ddb958bc1'] = 'You cannot place a new order from your country.'", "header_0fcd4065ff78fceb3083316ddb958bc1'] = 'لا يمكنك تقديم طلب جديد من بلدك.'"],

    // global
    ["global_10ac3d04253ef7e1ddc73e6091c0cd55'] = 'Next'", "global_10ac3d04253ef7e1ddc73e6091c0cd55'] = 'التالي'"],
    ["global_dd1f775e443ff3b9a89270713580a51b'] = 'Previous'", "global_dd1f775e443ff3b9a89270713580a51b'] = 'السابق'"],
    ["global_518618624f7d931b76b761392084e22a'] = 'Maximum room occupancy reached'", "global_518618624f7d931b76b761392084e22a'] = 'تم الوصول إلى الحد الأقصى لإشغال الغرفة'"],
    ["global_9c9ec1df0cc86f831589bb715633f7d5'] = 'Invalid occupancy(adults/children) found.'", "global_9c9ec1df0cc86f831589bb715633f7d5'] = 'تم العثور على إشغال غير صحيح (بالغون/أطفال).'"],
    ["global_d004768c5d1afc4cde7dfa0f92d65c57'] = 'Maximum children occupancy reached'", "global_d004768c5d1afc4cde7dfa0f92d65c57'] = 'تم الوصول إلى الحد الأقصى لإشغال الأطفال'"],
    ["global_e56aaea7e45aaed1fde0de56e450d567'] = 'Only adults can be accommodated'", "global_e56aaea7e45aaed1fde0de56e450d567'] = 'يمكن استيعاب البالغين فقط'"],
    ["global_ed0d591f4a9fa5aa7db188a241a1ff45'] = 'Maximum adult occupancy reached'", "global_ed0d591f4a9fa5aa7db188a241a1ff45'] = 'تم الوصول إلى الحد الأقصى لإشغال البالغين'"],

    // errors
    ["errors_5fbddd8d4e0d8c7a868272f2f171df09'] = 'There is %d error'", "errors_5fbddd8d4e0d8c7a868272f2f171df09'] = 'يوجد %d خطأ'"],
    ["errors_9ead913c5b7c87efda39ca9640c46ae4'] = 'There are %d errors'", "errors_9ead913c5b7c87efda39ca9640c46ae4'] = 'يوجد %d أخطاء'"],

    // breadcrumb
    ["breadcrumb_56cf8b33ab527ab81b4f6b3ceac090dd'] = 'Return to Home'", "breadcrumb_56cf8b33ab527ab81b4f6b3ceac090dd'] = 'العودة إلى الرئيسية'"],

    // authentication
    ["authentication_7e0bf6d67701868aac3116ade8fea957'] = 'Proceed to checkout'", "authentication_7e0bf6d67701868aac3116ade8fea957'] = 'المتابعة إلى الدفع'"],
    ["authentication_0ba7583639a274c434bbe6ef797115a4'] = 'Register'", "authentication_0ba7583639a274c434bbe6ef797115a4'] = 'تسجيل'"],
    ["authentication_5bef23eb7efff2736c5583bda59e5eb7'] = 'Create your account'", "authentication_5bef23eb7efff2736c5583bda59e5eb7'] = 'إنشاء حسابك'"],
    ["authentication_07b66aebbc092434ec2f0558f229ad53'] = 'Please enter your email address to create an account.'", "authentication_07b66aebbc092434ec2f0558f229ad53'] = 'يرجى إدخال بريدك الإلكتروني لإنشاء حساب.'"],
    ["authentication_1011bae349c34405e0c47931fc7ef8ad'] = 'Your company information'", "authentication_1011bae349c34405e0c47931fc7ef8ad'] = 'معلومات شركتك'"],
    ["authentication_59ba30f362294e33f80618c601fd2801'] = 'There are %s errors'", "authentication_59ba30f362294e33f80618c601fd2801'] = 'يوجد %s أخطاء'"],
    ["authentication_8b5dd64ab8d0b8158906796b53a200e2'] = 'E-mail address'", "authentication_8b5dd64ab8d0b8158906796b53a200e2'] = 'البريد الإلكتروني'"],
    ["authentication_57478054ae00730105f1bfe535b2225e'] = 'Recover your forgotten password'", "authentication_57478054ae00730105f1bfe535b2225e'] = 'استعادة كلمة المرور المنسية'"],
    ["authentication_b78a3223503896721cca1303f776159b'] = 'Title'", "authentication_b78a3223503896721cca1303f776159b'] = 'اللقب'"],
    ["authentication_93edfc7af9b6471b30030cf17646e36c'] = 'Sign up for our newsletter!'", "authentication_93edfc7af9b6471b30030cf17646e36c'] = 'اشترك في نشرتنا البريدية!' ],
    ["authentication_baca087296e01b5d69799dd53bcd7950'] = 'Receive special offers from our partners!'", "authentication_baca087296e01b5d69799dd53bcd7950'] = 'استلم عروضاً خاصة من شركائنا!' ],
    ["authentication_aee0c5ed0554d46465080ed36d1d93ab'] = 'Please use another address for invoice'", "authentication_aee0c5ed0554d46465080ed36d1d93ab'] = 'يرجى استخدام عنوان آخر للفاتورة'"], 
    ["authentication_af0f5bdc5be121b9307687aeeae38c17'] = 'Delivery address'", "authentication_af0f5bdc5be121b9307687aeeae38c17'] = 'عنوان التوصيل'"],
    ["authentication_2eac22e71eedb5bdb8f94a1354964017'] = 'My Invoice address'", "authentication_2eac22e71eedb5bdb8f94a1354964017'] = 'عنوان فاتورتي'"],
    ["authentication_c773457e85b990c10f8823eacb21346c'] = 'Tax identification'", "authentication_c773457e85b990c10f8823eacb21346c'] = 'الرقم الضريبي'"],
    ["authentication_d83893e5c6dab1264313e6a0bc77814b'] = 'Street address, P.O. Box, Company name, etc.'", "authentication_d83893e5c6dab1264313e6a0bc77814b'] = 'عنوان الشارع، صندوق بريد، اسم الشركة، إلخ.'"],
    ["authentication_d973a0b6f38ebe7c83094d3dc4e04ae5'] = 'Assign an address alias for future reference.'", "authentication_d973a0b6f38ebe7c83094d3dc4e04ae5'] = 'اختر اسماً مستعاراً للعنوان للرجوع إليه مستقبلاً.'"],
    ["authentication_261ed9f602d575774ae05f2d9f3003da'] = 'Apartment, suite, unit, building, floor, etc...'", "authentication_261ed9f602d575774ae05f2d9f3003da'] = 'شقة، جناح، وحدة، مبنى، طابق، إلخ...'"],
    ["authentication_eeabead01c6c6f25f22bf0b041df58a9'] = 'You must register at least one phone number.'", "authentication_eeabead01c6c6f25f22bf0b041df58a9'] = 'يجب تسجيل رقم هاتف واحد على الأقل.'"],
    ["authentication_0f68b904e33d9ac04605aecc958bcf52'] = 'Additional information'", "authentication_0f68b904e33d9ac04605aecc958bcf52'] = 'معلومات إضافية'"],
    ["authentication_41c2fff4867cc204120f001e7af20f7a'] = 'Mobile phone'", "authentication_41c2fff4867cc204120f001e7af20f7a'] = 'جوال'"],
    ["authentication_fe66abce284ec8589e7d791185b5c442'] = 'Home phone'", "authentication_fe66abce284ec8589e7d791185b5c442'] = 'هاتف المنزل'"],
    ["authentication_46a2a41cc6e552044816a2d04634545d'] = 'State'", "authentication_46a2a41cc6e552044816a2d04634545d'] = 'المنطقة'"],
    ["authentication_57d056ed0984166336b7879c2af3657f'] = 'City'", "authentication_57d056ed0984166336b7879c2af3657f'] = 'المدينة'"],
    ["authentication_59716c97497eb9694541f7c3d37b1a4d'] = 'Country'", "authentication_59716c97497eb9694541f7c3d37b1a4d'] = 'البلد'"],
    ["authentication_1c76cbfe21c6f44c1d1e59d54f3e4420'] = 'Company'", "authentication_1c76cbfe21c6f44c1d1e59d54f3e4420'] = 'الشركة'"],
    ["authentication_7cb32e708d6b961d476baced73d362bb'] = 'VAT number'", "authentication_7cb32e708d6b961d476baced73d362bb'] = 'الرقم الضريبي'"],
    ["authentication_b60bb13a87fe3ae5463aeb0980a5a8a1'] = 'Identification number'", "authentication_b60bb13a87fe3ae5463aeb0980a5a8a1'] = 'رقم الهوية'"],
    ["authentication_ea318a4ad37f0c2d2c368e6c958ed551'] = 'DNI / NIF / NIE'", "authentication_ea318a4ad37f0c2d2c368e6c958ed551'] = 'رقم الهوية / الإقامة'"],
    ["authentication_10803b83a68db8f7e7a33e3b41e184d0'] = 'Date of Birth'", "authentication_10803b83a68db8f7e7a33e3b41e184d0'] = 'تاريخ الميلاد'"],
    ["authentication_15bbb9d0bbf25e8d2978de1168c749dc'] = 'Website'", "authentication_15bbb9d0bbf25e8d2978de1168c749dc'] = 'الموقع'"],
    ["authentication_4f68183551e5dbd7c341347ffe308682'] = 'SIRET'", "authentication_4f68183551e5dbd7c341347ffe308682'] = 'السجل التجاري'"],
    ["authentication_85fb93a8ee9440499692da24a1621769'] = 'APE'", "authentication_85fb93a8ee9440499692da24a1621769'] = 'رمز النشاط'"],
    ["authentication_455175f3f5be6306247babb349c0515a'] = 'Your address'", "authentication_455175f3f5be6306247babb349c0515a'] = 'عنوانك'"],
    ["authentication_ae7bdef7fe2bbbbf02c11e92c5fceb40'] = 'My address'", "authentication_ae7bdef7fe2bbbbf02c11e92c5fceb40'] = 'عنواني'"],
    ["authentication_dd7bf230fde8d4836917806aff6a6b27'] = 'Address'", "authentication_dd7bf230fde8d4836917806aff6a6b27'] = 'العنوان'"],
    ["authentication_e4eb5dadb6ee84c5c55a8edf53f6e554'] = 'Zip/Postal Code'", "authentication_e4eb5dadb6ee84c5c55a8edf53f6e554'] = 'الرمز البريدي'"],
    ["authentication_6335a00a08fde0fbb8f6d6630cdadd92'] = 'Your personal information'", "authentication_6335a00a08fde0fbb8f6d6630cdadd92'] = 'معلوماتك الشخصية'"],
    ["authentication_5e74f2daf4ae8030571ceee5b4837579'] = 'Social title'", "authentication_5e74f2daf4ae8030571ceee5b4837579'] = 'اللقب الاجتماعي'"],

    // best-sales
    ["best-sales_3cb29f0ccc5fd220a97df89dafe46290'] = 'Top sellers'", "best-sales_3cb29f0ccc5fd220a97df89dafe46290'] = 'الأكثر مبيعاً'"],
    ["best-sales_73d3cc7826075c127caaadb0e20162ab'] = 'No top sellers for the moment.'", "best-sales_73d3cc7826075c127caaadb0e20162ab'] = 'لا توجد منتجات الأكثر مبيعاً حالياً.'"],

    // address pages
    ["address_3908e1afa0ff22fbf112aff3c5ba55c1'] = 'Your addresses'", "address_3908e1afa0ff22fbf112aff3c5ba55c1'] = 'عناوينك'"],
    ["address_393d8c6bc7a04264bd9523dc8c92b818'] = 'New address'", "address_393d8c6bc7a04264bd9523dc8c92b818'] = 'عنوان جديد'"],
    ["address_455175f3f5be6306247babb349c0515a'] = 'Your address'", "address_455175f3f5be6306247babb349c0515a'] = 'عنوانك'"],
    ["address_dd7bf230fde8d4836917806aff6a6b27'] = 'Address'", "address_dd7bf230fde8d4836917806aff6a6b27'] = 'العنوان'"],
    ["address_ae7bdef7fe2bbbbf02c11e92c5fceb40'] = 'My address'", "address_ae7bdef7fe2bbbbf02c11e92c5fceb40'] = 'عنواني'"],
    ["address_d7f172af352aa5232de5295afeaa68e5'] = 'To add a new address, please fill out the form below.'", "address_d7f172af352aa5232de5295afeaa68e5'] = 'لإضافة عنوان جديد، يرجى ملء النموذج أدناه.'"],
    ["address_89a9a0e5aec9360bc3b0141c8d42e586'] = 'Please assign an address title for future reference.'", "address_89a9a0e5aec9360bc3b0141c8d42e586'] = 'يرجى تسمية عنوان للرجوع إليه مستقبلاً.'"],
    ["address_de0c35a9efd08e5ee77a80203ae4221d'] = 'Back to your addresses'", "address_de0c35a9efd08e5ee77a80203ae4221d'] = 'العودة إلى عناوينك'"],
    ["address_e9b6b3aa3cab28048d3879710882e1de'] = 'Modify address'", "address_e9b6b3aa3cab28048d3879710882e1de'] = 'تعديل العنوان'"],
    ["address_0f68b904e33d9ac04605aecc958bcf52'] = 'Additional information'", "address_0f68b904e33d9ac04605aecc958bcf52'] = 'معلومات إضافية'"],
    ["address_1c76cbfe21c6f44c1d1e59d54f3e4420'] = 'Company'", "address_1c76cbfe21c6f44c1d1e59d54f3e4420'] = 'الشركة'"],
    ["address_41c2fff4867cc204120f001e7af20f7a'] = 'Mobile phone'", "address_41c2fff4867cc204120f001e7af20f7a'] = 'جوال'"],
    ["address_fe66abce284ec8589e7d791185b5c442'] = 'Home phone'", "address_fe66abce284ec8589e7d791185b5c442'] = 'هاتف المنزل'"],
    ["address_46a2a41cc6e552044816a2d04634545d'] = 'State'", "address_46a2a41cc6e552044816a2d04634545d'] = 'المنطقة'"],
    ["address_57d056ed0984166336b7879c2af3657f'] = 'City'", "address_57d056ed0984166336b7879c2af3657f'] = 'المدينة'"],
    ["address_59716c97497eb9694541f7c3d37b1a4d'] = 'Country'", "address_59716c97497eb9694541f7c3d37b1a4d'] = 'البلد'"],
    ["address_7cb32e708d6b961d476baced73d362bb'] = 'VAT number'", "address_7cb32e708d6b961d476baced73d362bb'] = 'الرقم الضريبي'"],
    ["address_b60bb13a87fe3ae5463aeb0980a5a8a1'] = 'Identification number'", "address_b60bb13a87fe3ae5463aeb0980a5a8a1'] = 'رقم الهوية'"],
    ["address_ea318a4ad37f0c2d2c368e6c958ed551'] = 'DNI / NIF / NIE'", "address_ea318a4ad37f0c2d2c368e6c958ed551'] = 'رقم الهوية / الإقامة'"],
    ["address_846a54955f32846032981f8fe48c35ff'] = 'Address (Line 2)'", "address_846a54955f32846032981f8fe48c35ff'] = 'العنوان (سطر 2)'"],
    ["address_eeabead01c6c6f25f22bf0b041df58a9'] = 'You must register at least one phone number.'", "address_eeabead01c6c6f25f22bf0b041df58a9'] = 'يجب تسجيل رقم هاتف واحد على الأقل.'"],
    ["address_e4eb5dadb6ee84c5c55a8edf53f6e554'] = 'Zip/Postal Code'", "address_e4eb5dadb6ee84c5c55a8edf53f6e554'] = 'الرمز البريدي'"],

    // occupancy_field
    ["occupancy_field_2577f809a5362f66fdaf41939c4cffa2'] = 'Per Night'", "occupancy_field_2577f809a5362f66fdaf41939c4cffa2'] = 'للليلة'"],
    ["occupancy_field_366b3b2be6ee2d29f66ed59482cdd3e8'] = 'Hurry!'", "occupancy_field_366b3b2be6ee2d29f66ed59482cdd3e8'] = 'أسرع!' ],
    ["occupancy_field_45f8e9ffb4a29edde60b1222f52cfaac'] = 'Max guests:'", "occupancy_field_45f8e9ffb4a29edde60b1222f52cfaac'] = 'الحد الأقصى للضيوف:' ],
    ["occupancy_field_647b89b705fafd7d44aa6f01a5cb4711'] = 'Qty:'", "occupancy_field_647b89b705fafd7d44aa6f01a5cb4711'] = 'الكمية:' ],
    ["occupancy_field_751084766b65386f2722dbdc869666e1'] = 'Select 1'", "occupancy_field_751084766b65386f2722dbdc869666e1'] = 'اختر 1' ],
    ["occupancy_field_75aeb98e5241592ad6a6c2c4c78a16ef'] = 'years'", "occupancy_field_75aeb98e5241592ad6a6c2c4c78a16ef'] = 'سنوات' ],
    ["occupancy_field_7a8d73bf1700c767bbf764f8f87dc6f3'] = 'No more rooms available.'", "occupancy_field_7a8d73bf1700c767bbf764f8f87dc6f3'] = 'لا توجد غرف متاحة أكثر.' ],
    ["occupancy_field_89fa83c10537f50a74b4af9a9cdceb0e'] = 'Select Occupancy'", "occupancy_field_89fa83c10537f50a74b4af9a9cdceb0e'] = 'اختر الإشغال' ],
    ["occupancy_field_96cf4454dc3ef5d9fdb449d7abd5fa8f'] = 'Add Room'", "occupancy_field_96cf4454dc3ef5d9fdb449d7abd5fa8f'] = 'إضافة غرفة' ],
    ["occupancy_field_9b8fc0e9b16f8e2cb772f9831ea846cb'] = 'rooms left'", "occupancy_field_9b8fc0e9b16f8e2cb772f9831ea846cb'] = 'غرف متبقية' ],
    ["occupancy_field_b869993b9e9305a5028b33ee8b221dd4'] = 'View More'", "occupancy_field_b869993b9e9305a5028b33ee8b221dd4'] = 'عرض المزيد' ],
    ["occupancy_field_cd3a74d0bf26efbb0f247cbb44c98ba4'] = 'All Children'", "occupancy_field_cd3a74d0bf26efbb0f247cbb44c98ba4'] = 'جميع الأطفال' ],
    ["occupancy_field_e2c3fe80068ddc3c888b732be82b11dd'] = 'Click to add more rooms.'", "occupancy_field_e2c3fe80068ddc3c888b732be82b11dd'] = 'انقر لإضافة غرف إضافية.' ],
    ["occupancy_field_efc0cedad738398f004a3970b4f47468'] = 'No room available for this hotel!'", "occupancy_field_efc0cedad738398f004a3970b4f47468'] = 'لا توجد غرف متاحة لهذا الفندق!' ],
    ["occupancy_field_301daa1cc881bbe0d0dbbf4dbe444e90'] = 'Under 1'", "occupancy_field_301daa1cc881bbe0d0dbbf4dbe444e90'] = 'أقل من 1' ],

    // room_type_list - same as occupancy
    ["room_type_list_2577f809a5362f66fdaf41939c4cffa2'] = 'Per Night'", "room_type_list_2577f809a5362f66fdaf41939c4cffa2'] = 'للليلة'"],
    ["room_type_list_366b3b2be6ee2d29f66ed59482cdd3e8'] = 'Hurry!'", "room_type_list_366b3b2be6ee2d29f66ed59482cdd3e8'] = 'أسرع!' ],
    ["room_type_list_45f8e9ffb4a29edde60b1222f52cfaac'] = 'Max guests:'", "room_type_list_45f8e9ffb4a29edde60b1222f52cfaac'] = 'الحد الأقصى للضيوف:' ],
    ["room_type_list_647b89b705fafd7d44aa6f01a5cb4711'] = 'Qty:'", "room_type_list_647b89b705fafd7d44aa6f01a5cb4711'] = 'الكمية:' ],
    ["room_type_list_751084766b65386f2722dbdc869666e1'] = 'Select 1'", "room_type_list_751084766b65386f2722dbdc869666e1'] = 'اختر 1' ],
    ["room_type_list_75aeb98e5241592ad6a6c2c4c78a16ef'] = 'years'", "room_type_list_75aeb98e5241592ad6a6c2c4c78a16ef'] = 'سنوات' ],
    ["room_type_list_7a8d73bf1700c767bbf764f8f87dc6f3'] = 'No more rooms available.'", "room_type_list_7a8d73bf1700c767bbf764f8f87dc6f3'] = 'لا توجد غرف متاحة أكثر.' ],
    ["room_type_list_89fa83c10537f50a74b4af9a9cdceb0e'] = 'Select Occupancy'", "room_type_list_89fa83c10537f50a74b4af9a9cdceb0e'] = 'اختر الإشغال' ],
    ["room_type_list_96cf4454dc3ef5d9fdb449d7abd5fa8f'] = 'Add Room'", "room_type_list_96cf4454dc3ef5d9fdb449d7abd5fa8f'] = 'إضافة غرفة' ],
    ["room_type_list_9b8fc0e9b16f8e2cb772f9831ea846cb'] = 'rooms left'", "room_type_list_9b8fc0e9b16f8e2cb772f9831ea846cb'] = 'غرف متبقية' ],
    ["room_type_list_b869993b9e9305a5028b33ee8b221dd4'] = 'View More'", "room_type_list_b869993b9e9305a5028b33ee8b221dd4'] = 'عرض المزيد' ],
    ["room_type_list_cd3a74d0bf26efbb0f247cbb44c98ba4'] = 'All Children'", "room_type_list_cd3a74d0bf26efbb0f247cbb44c98ba4'] = 'جميع الأطفال' ],
    ["room_type_list_e2c3fe80068ddc3c888b732be82b11dd'] = 'Click to add more rooms.'", "room_type_list_e2c3fe80068ddc3c888b732be82b11dd'] = 'انقر لإضافة غرف إضافية.' ],
    ["room_type_list_efc0cedad738398f004a3970b4f47468'] = 'No room available for this hotel!'", "room_type_list_efc0cedad738398f004a3970b4f47468'] = 'لا توجد غرف متاحة لهذا الفندق!' ],
    ["room_type_list_301daa1cc881bbe0d0dbbf4dbe444e90'] = 'Under 1'", "room_type_list_301daa1cc881bbe0d0dbbf4dbe444e90'] = 'أقل من 1' ],

    // category
    ["category_d3da97e2d9aee5c8fbe03156ad051c99'] = 'More'", "category_d3da97e2d9aee5c8fbe03156ad051c99'] = 'المزيد'"],

    // search
    ["search_a4bb6bf91165c149d73930f43ad4ef69'] = 'Please enter a search keyword'", "search_a4bb6bf91165c149d73930f43ad4ef69'] = 'يرجى إدخال كلمة بحث'"],
    ["search_b2c56c8b57680e576c61c1b5df0d0c2d'] = 'No results were found for your search'", "search_b2c56c8b57680e576c61c1b5df0d0c2d'] = 'لم يتم العثور على نتائج لبحثك'"],

    // product finder/pagination
    ["pagination_10ac3d04253ef7e1ddc73e6091c0cd55'] = 'Next'", "pagination_10ac3d04253ef7e1ddc73e6091c0cd55'] = 'التالي'"],
    ["pagination_dd1f775e443ff3b9a89270713580a51b'] = 'Previous'", "pagination_dd1f775e443ff3b9a89270713580a51b'] = 'السابق'"],
    ["pagination_eb92025cb8c66f1850c13a9b602a1856'] = 'Show all'", "pagination_eb92025cb8c66f1850c13a9b602a1856'] = 'عرض الكل'"],

    // nbr-product-page
    ["nbr-product-page_498f79c4c5bbde77f1bceb6c86fd0f6d'] = 'Show'", "nbr-product-page_498f79c4c5bbde77f1bceb6c86fd0f6d'] = 'عرض'"],
    ["nbr-product-page_4f5d5f295ddc8fd8673e74dd5fbe114a'] = 'per page'", "nbr-product-page_4f5d5f295ddc8fd8673e74dd5fbe114a'] = 'لكل صفحة'"],
];

$count = 0;
foreach ($replacements as $pair) {
    $old = $pair[0];
    $new = $pair[1];
    // Add the $_LANG prefix
    $old_full = '$_LANG[\'' . $old;
    $new_full = '$_LANG[\'' . $new;
    if (strpos($content, $old_full) !== false) {
        $content = str_replace($old_full, $new_full, $content);
        $count++;
    }
}

file_put_contents($file, $content);
echo "Fixed $count translations in $file\n";
