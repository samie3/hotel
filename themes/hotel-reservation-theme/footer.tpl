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
{if !isset($content_only) || !$content_only}
					</div><!-- #center_column -->
					{if isset($right_column_size) && !empty($right_column_size)}
						<div id="right_column" class="col-xs-12 col-sm-{$right_column_size|intval} column">{$HOOK_RIGHT_COLUMN}</div>
					{/if}
					</div><!-- .row -->
					{block name='displayColumnsBottom'}
						{hook h='displayColumnsBottom'}
					{/block}
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			{block name='displayFooter'}
				{if isset($HOOK_FOOTER)}
					{block name='displayFooterBefore'}
						{hook h='displayFooterBefore'}
					{/block}
					<!-- Footer -->
					<div class="footer-container">
						<footer id="footer"  class="container">
							<div class="row margin-btm-50">{$HOOK_FOOTER}</div>
						</footer>
						{block name='displayAfterDefautlFooterHook'}
							{hook h="displayAfterDefautlFooterHook"}
						{/block}
					</div><!-- #footer -->
				{/if}
			{/block}
		</div><!-- #page -->
{/if}
{block name='global'}
	{include file="$tpl_dir./global.tpl"}
{/block}
	<!-- LIVE_SINCE: 2026-06-13 18:56:49 UTC -->
</body>
</html>

<script type="text/javascript">
    pageLanguage: "auto",
    includedLanguages: "ar,en",
}
</script>
