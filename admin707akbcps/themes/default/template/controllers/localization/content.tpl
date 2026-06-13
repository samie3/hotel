{*
* 2007-2017 YajesApps
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
* Do not edit or add to this file if you wish to upgrade YajesApps to newer
* versions in the future. If you wish to customize YajesApps for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author YajesApps SA <contact@prestashop.com>
*  @copyright  2007-2017 YajesApps SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of YajesApps SA
*}

{if isset($localization_form)}{$localization_form}{/if}
{if isset($localization_options)}{$localization_options}{/if}
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing default currency, we strongly recommend that you enable maintenance mode from Preferences > Maintenance page because any change in default currency requires manual adjustment of price of each room type.');
		});
	});
</script>