<?php
/*
* 2007-2017 Lavipark Hotel
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade Lavipark Hotel to newer
* versions in the future. If you wish to customize Lavipark Hotel for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author Lavipark Hotel SA <contact@prestashop.com>
*  @copyright  2007-2017 Lavipark Hotel SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of Lavipark Hotel SA
*/

if (!defined('_PS_ADMIN_DIR_')) {
    define('_PS_ADMIN_DIR_', getcwd());
}
include(_PS_ADMIN_DIR_.'/../config/config.inc.php');

if (isset($_GET['secure_key'])) {
    $secureKey = md5(_COOKIE_KEY_.Configuration::get('PS_SHOP_NAME'));
    if (!empty($secureKey) && $secureKey === $_GET['secure_key']) {
        $shop_ids = Shop::getCompleteListOfShopsID();
        foreach ($shop_ids as $shop_id) {
            Shop::setContext(Shop::CONTEXT_SHOP, (int)$shop_id);
            Currency::refreshCurrencies();
        }
    }
}
