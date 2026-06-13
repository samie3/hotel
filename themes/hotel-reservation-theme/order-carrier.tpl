{*
* Lavipark Hotel
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author Lavipark Hotel
*  @copyright  Lavipark Hotel
*  @license  All rights reserved
*  Lavipark Hotel
*}

<div class="box" id="tc_cont">
    <p class="checkbox">
        <input type="checkbox" name="cgv" id="cgv" value="1" checked="checked" />
        <label for="cgv" id="tc_txt">{l s='I agree to the terms of service and will adhere to them unconditionally.'}</label>
        <a id="tc_link" href="{$link_conditions|escape:'html':'UTF-8'}" class="iframe" rel="nofollow" >{l s='(Read the Terms of Service)'}</a>
    </p>
</div>