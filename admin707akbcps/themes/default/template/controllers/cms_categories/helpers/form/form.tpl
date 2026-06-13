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

{extends file="helpers/form/form.tpl"}
{block name="input"}
	{if $input.name == "link_rewrite"}
		<script type="text/javascript">
		{if isset($PS_ALLOW_ACCENTED_CHARS_URL) && $PS_ALLOW_ACCENTED_CHARS_URL}
			var PS_ALLOW_ACCENTED_CHARS_URL = 1;
		{else}
			var PS_ALLOW_ACCENTED_CHARS_URL = 0;
		{/if}
		</script>
		{$smarty.block.parent}
	{else}
		{$smarty.block.parent}
	{/if}
{/block}
{block name="input"}
	{if $input.type == 'select_category'}
		<div class="col-lg-9">
			<div class="row">
				<select name="id_parent">
					{$input.options.html}
				</select>
			</div>
		</div>
	{else}
		{$smarty.block.parent}
	{/if}
{/block}

