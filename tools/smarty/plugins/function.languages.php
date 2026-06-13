<?php
function smarty_function_languages($params, $template)
{
    $context = Context::getContext();
    $languages = Language::getLanguages();
    if (count($languages) <= 1) {
        return '';
    }
    $current_index = Dispatcher::getInstance()->createUrl(
        Dispatcher::getInstance()->getController(),
        (int)$context->language->id
    );
    $token = Tools::getValue('token');
    $default_language = (int)Configuration::get('PS_LANG_DEFAULT');
    $current_name = '';
    foreach ($languages as $lang) {
        if ($lang['id_lang'] == $default_language) {
            $current_name = $lang['name'];
        }
    }
    $id = isset($params['id']) ? $params['id'] : 'language_infos';
    $html = '<li id="'.$id.'" class="dropdown">';
    $html .= '<a href="#" class="dropdown-toggle" data-toggle="dropdown">';
    $html .= $current_name ? Tools::safeOutput($current_name) : Tools::safeOutput($languages[0]['name']);
    $html .= ' <i class="caret"></i></a>';
    $html .= '<ul class="dropdown-menu language">';
    foreach ($languages as $lang) {
        $link = $context->link->getAdminLink(Dispatcher::getInstance()->getController());
        $link .= '&id_lang='.(int)$lang['id_lang'].'&token='.urlencode($token);
        $html .= '<li><a href="'.Tools::safeOutput($link).'">';
        $html .= Tools::safeOutput($lang['name']);
        $html .= '</a></li>';
    }
    $html .= '</ul></li>';
    return $html;
}
