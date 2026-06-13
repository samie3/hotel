<?php
require_once dirname(__FILE__) . '/../config/config.inc.php';
require_once dirname(__FILE__) . '/init.php';

$idLang = (int) Tools::getValue('id_lang');
$redirect = Tools::getValue('redirect', 'index.php?controller=AdminDashboard');

if ($idLang) {
    $employee = Context::getContext()->employee;
    if (Validate::isLoadedObject($employee)) {
        $employee->id_lang = $idLang;
        $employee->save();
    }
}

Tools::redirectAdmin($redirect);
