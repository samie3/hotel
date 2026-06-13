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

{if $status == 'ok'}
        <p class="alert alert-success">{l s='Your' mod='cheque'} {if $cart_room_bookings|count > 1}{l s='bookings have' mod='cheque'}{else}{l s='booking has' mod='cheque'}{/if} {l s='been created successfully!' mod='cheque'}</p><br /><br />
		<div class="box">
			<p>{l s='Please note that full payment will be collected at the hotel upon check-in.' mod='cheque'}</p>
			<p>- {l s='Payment amount:' mod='cheque'} <span class="price"><strong>{$total_to_pay}</strong></span></p>
			{if !isset($reference) && isset($id_order) && $id_order}
				<p>- {l s='Your order number is:' mod='cheque'} <strong>#{$id_order}</strong></p>
			{else}
				<p>- {l s='Your order reference is:' mod='cheque'} <strong>{$reference}</strong></p>
			{/if}
			<p>{l s='An email confirmation has been sent to you.' mod='cheque'}</p>
			<p><strong>{l s='Thank you for booking with Lavipark Hotel!' mod='cheque'}</strong></p>
		</div>
		<br />
{else}
	<p class="alert alert-warning">
		{l s='We noticed a problem with your order. If you think this is an error, feel free to contact our' mod='cheque'}
		<a href="{$link->getPageLink('contact', true)|escape:'html':'UTF-8'}">{l s='customer service department.' mod='cheque'}</a>.
	</p>
{/if}
