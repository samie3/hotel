{* Render the admin header *}
<!DOCTYPE html>
<html lang="{$iso}" class="no-js">
<head>
    {if isset($display_header) && $display_header}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="icon" href="{$img_dir}favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{$img_dir}app_icon.png" />
        <meta name="robots" content="nofollow, noindex" />
        <title>{if $meta_title != ''}{$meta_title} &bull; {/if}{$shop_name}</title>
        {if !isset($display_header_javascript) || $display_header_javascript}
        <script type="text/javascript">
            var help_class_name = '{$controller_name|@addcslashes:'\''}';
            var iso_user = '{$iso_user|@addcslashes:'\''}';
            var full_language_code = '{$full_language_code|@addcslashes:'\''}';
            var country_iso_code = '{$country_iso_code|@addcslashes:'\''}';
            var _PS_VERSION_ = '{$smarty.const._PS_VERSION_|@addcslashes:'\''}';
            var roundMode = {$round_mode|intval};
            {if isset($shop_context)}
                {if $shop_context == Shop::CONTEXT_ALL}
                    var youEditFieldFor = '{l s='This field will be modified for all your shops.' js=1}';
                {elseif $shop_context == Shop::CONTEXT_GROUP}
                    var youEditFieldFor = '{l s='This field will be modified for this shop group:' js=1} <b>{$shop_name|@addcslashes:'\''}</b>';
                {else}
                    var youEditFieldFor = '{l s='This field will be modified for this shop:' js=1} <b>{$shop_name|@addcslashes:'\''}</b>';
                {/if}
            {else}
                var youEditFieldFor = '';
            {/if}
            var autorefresh_notifications = '{$autorefresh_notifications|@addcslashes:'\''}';
            var new_msg = '{l s='A new message was posted on your shop.' js=1}';
            var see_msg = '{l s='Read this message' js=1}';
            var token = '{$token|addslashes}';
            var token_admin_orders = '{getAdminToken tab='AdminOrders'}';
            var token_admin_customers = '{getAdminToken tab='AdminCustomers'}';
            var token_admin_customer_threads = '{getAdminToken tab='AdminCustomerThreads'}';
            var currentIndex = '{$currentIndex|@addcslashes:'\''}';
            var employee_token = '{getAdminToken tab='AdminEmployees'}';
            var choose_language_translate = '{l s='Choose language' js=1}';
            var default_language = '{$default_language|intval}';
            var admin_modules_link = '{$link->getAdminLink("AdminModules")|addslashes}';
            var tab_modules_list = '{if isset($tab_modules_list) && $tab_modules_list}{$tab_modules_list|addslashes}{/if}';
            var update_success_msg = '{l s='Update successful' js=1}';
            var errorLogin = '{l s=.The system was unable to log in to Addons. Please check your credentials and your Internet connection.' js=1}';
            var search_product_msg = '{l s='Search for a product' js=1}';
        </script>
        {/if}
        {if isset($css_files)}
        {foreach from=$css_files key=css_uri item=media}
            {if $css_uri == 'lteIE9'}
                <!--[if lte IE 9]>
                {foreach from=$css_files[$css_uri] key=css_uriie9 item=mediaie9}
                    <link rel="stylesheet" href="{$css_uriie9|escape:'html':'UTF-8'}" type="text/css" media="{$mediaie9|escape:'html':'UTF-8'}" />
                {/foreach}
                <![endif]-->
            {elseif $css_uri == 'ie9'}
                <!--[if IE 9]>
                {foreach from=$css_files[$css_uri] key=css_uriie9 item=mediaie9}
                    <link rel="stylesheet" href="{$css_uriie9|escape:'html':'UTF-8'}" type="text/css" media="{$mediaie9|escape:'html':'UTF-8'}" />
                {/foreach}
                <![endif]-->
            {elseif $css_uri == 'os'}
                {foreach from=$css_files[$css_uri] key=css_urios item=mediaos}
                    <link rel="stylesheet" href="{$css_urios|escape:'html':'UTF-8'}" type="text/css" media="{$mediaos|escape:'html':'UTF-8'}" />
                {/foreach}
            {else}
                {foreach from=$css_files[$css_uri] key=css_uri item=media}
                    <link rel="stylesheet" href="{$css_uri|escape:'html':'UTF-8'}" type="text/css" media="{$media|escape:'html':'UTF-8'}" />
                {/foreach}
            {/if}
        {/foreach}
        {/if}
        {if isset($js_files)}
        {foreach from=$js_files key=js_uri item=media}
            {if $js_uri == 'lteIE9'}
                <!--[if lte IE 9]>
                {foreach from=$js_files[$js_uri] key=js_uriie9 item=mediaie9}
                    <script type="text/javascript" src="{$js_uriie9|escape:'html':'UTF-8'}"></script>
                {/foreach}
                <![endif]-->
            {elseif $js_uri == 'ie9'}
                <!--[if IE 9]>
                {foreach from=$js_files[$js_uri] key=js_uriie9 item=mediaie9}
                    <script type="text/javascript" src="{$js_uriie9|escape:'html':'UTF-8'}"></script>
                {/foreach}
                <![endif]-->
            {elseif $js_uri == 'os'}
                {foreach from=$js_files[$js_uri] key=js_urios item=mediaos}
                    <script type="text/javascript" src="{$js_urios|escape:'html':'UTF-8'}"></script>
                {/foreach}
            {else}
                {foreach from=$js_files[$js_uri] key=js_uri item=media}
                    <script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
                {/foreach}
            {/if}
        {/foreach}
        {/if}
        {if isset($display_header) && $display_header}
            {$displayHeader}
        {/if}
    {/if}
    <link rel="stylesheet" href="themes/default/css/yajesapps_override.css" type="text/css" />
</head>
<body class="ps_back-office{if $employee->bo_menu} page-sidebar{if $collapse_menu} page-sidebar-closed{/if}{else} page-topbar{/if} {$smarty.get.controller|escape|strtolower}">
{* begin  HEADER *}
<header id="header" class="bootstrap">
    <nav id="header_infos" role="navigation">
        <div class="navbar-header">
            <button id="header_nav_toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-primary">
                <i class="icon-reorder"></i>
            </button>
            <a id="header_shopversion" href="{$default_tab_link|escape:'html':'UTF-8'}">
                <span id="shop_version">{$shop_name|escape:'html':'UTF-8'}</span>
            </a>
            {* Shop *}
            {if isset($is_multishop) && $is_multishop && $shop_list && (isset($multishop_context) && $multishop_context & Shop::CONTEXT_GROUP || $multishop_context & Shop::CONTEXT_SHOP)}
                <ul id="header_shop">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-building"></i>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            {$shop_list nofilter}
                        </ul>
                    </li>
                </ul>
            {else}
                <a id="header_shopname" href="{$default_tab_link|escape:'html':'UTF-8'}">{$shop_name}</a>
            {/if}
            {if isset($maintenance_mode) && $maintenance_mode == true}
                <li>
                    <a href="{$link->getAdminLink('AdminShopGroupShop')|escape:'html':'UTF-8'}&amp;maintenance" title="{l s='Maintenance mode' js=1}">
                        {l s='Maintenance mode'}
                        <span class="label-important">{l s='ON'}</span>
                    </a>
                </li>
            {/if}
            <li id="employee_infos" class="dropdown">
                <a href="{$link->getAdminLink('AdminEmployees')|escape:'html':'UTF-8'}&amp;id_employee={$employee->id|intval}&amp;updateemployee" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="string-long">{$employee->firstname}&nbsp;{$employee->lastname}</span>
                    <span class="string-short">{l s='Me'}</span>
                    <i class="caret"></i>
                </a>
                <ul id="employee_links" class="dropdown-menu">
                    <li><a href="{$link->getAdminLink('AdminEmployees')|escape:'html':'UTF-8'}&amp;id_employee={$employee->id|intval}&amp;updateemployee"><i class="icon-wrench"></i> {l s='My preferences'}</a></li>
                    {if $host_mode}
                        <li><a href="https://www.prestashop.com/cloud/" class="_blank"><i class="icon-wrench"></i> {l s='My Lavipark Hotel account'}</a></li>
                    {/if}
                    <li><a id="header_logout" href="{$login_link|escape:'html':'UTF-8'}&amp;logout"><i class="icon-signout"></i> {l s='Sign out'}</a></li>
                </ul>
            </li>
            {if isset($languages) && $languages|@count > 1}
            <li id="language_infos" class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    {if $iso_user == "ar"}
                        Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©
                    {else}
                        English
                    {/if}
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu language">
                {foreach from=$languages item=lang}
                    <li>
                        <a href="{$currentIndex|escape:'html':'UTF-8'}&amp;id_lang={$lang.id_lang|intval}&amp;token={$token|escape:'html':'UTF-8'}">
                            {$lang.name|escape:"html":"UTF-8"}
                        </a>
                    </li>
                    {/foreach}
                </ul>
            </li>
{/if}
            
        </ul>
        {if isset($displayBackOfficeTop)}{$displayBackOfficeTop}{/if}
    </nav>
{* end header_infos*}
</header>
{* end HEADER *}
<div id="main">
    {include file='nav.tpl'}
    <div id="content" class="{if !$bootstrap}nobootstrap{else}bootstrap{/if}">
        {if isset($page_header_toolbar)}{$page_header_toolbar}{/if}
        {if isset($modal_module_list)}{$modal_module_list}{/if}
        {if isset($content)}-
            <div class="{if $country_total_shipping > 0 || $nbTotalPackages > 0}alert alert-info{else}alert alert-success{/if}">
                {if $country_total_shipping > 0}<p>{l s='You have %s left to benefit from free shipping' sprintf=$country_total_shipping}</p>{/if}
                {if $nbTotalPackages > 0}<p>{l s='You have %s package(s) in your cart' sprintf=$nbTotalPackages}</p>{/if}
            </div>
        {/if}
        {if $content}</div>{/if}
    </div>
</div>
{* end MAIN *}
{include file='footer.tpl'}
</body>
</html>
