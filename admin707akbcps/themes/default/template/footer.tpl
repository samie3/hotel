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
* to contact@laviparkhotels.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade this software to newer
* versions in the future. If you wish to customize this software for your
* needs please refer to https://laviparkhotels.com for more information.
*
*  @author Lavipark Hotel
*  @copyright  Lavipark Hotel
*  @license  All rights reserved
*  Lavipark Hotel
*}
		</div>
	</div>

{if $display_footer}
<div id="footer" class="bootstrap hide">



	<div class="col-sm-3">
		{hook h="displayBackOfficeFooter"}
	</div>

	<div id="go-top" class="hide"><i class="icon-arrow-up"></i></div>
</div>
{/if}
{if isset($php_errors)}
	{include file="error.tpl"}
{/if}

{if isset($modals)}
<div class="bootstrap">
	{$modals}
</div>
{/if}

</body>
</html>
