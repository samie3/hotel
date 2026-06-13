<?php
class Context extends ContextCore
{
    public static function getContext()
    {
        $context = parent::getContext();
        
        // Set locale based on current language
        if (isset($context->language) && $context->language) {
            $langCode = $context->language->language_code;
            $iso = $context->language->iso_code;
            
            // Map ISO codes to locale
            $localeMap = [
                "ar" => "ar_AE",
                "en" => "en_US",
            ];
            
            $locale = isset($localeMap[$iso]) ? $localeMap[$iso] : $localeMap["en"];
            $fullLocale = $locale . ".UTF-8";
            $fullLocaleLower = $locale . ".utf8";
            
            setlocale(LC_TIME, $fullLocale, $fullLocaleLower);
        }
        
        return $context;
    }
}
