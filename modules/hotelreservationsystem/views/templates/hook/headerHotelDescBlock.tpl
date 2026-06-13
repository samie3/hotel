{*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License version 3.0
*}
<section id="hotelHeaderBlock">
	<div class="header-bg-image" >
		<div class="header-desc-wrapper">
			<div class="header-desc-primary">
				<div class="container">
					<div class="row">
						<div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
							<p class="header-desc-welcome">{if isset($lang_iso) && $lang_iso == "ar"}مرحبا بكم في{else}Welcome To{/if}</p>
							<hr class="heasder-desc-hr-first"/>
							<div class="header-desc-inner-wrapper">
								{block name="header_hotel_chain_name"}
									<h1 class="header-hotel-name">{$WK_HTL_CHAIN_NAME|escape:"htmlall":"UTF-8"}</h1>
								{/block}
								<hr class="heasder-desc-hr-second"/>
								<div class="header-desc-quote-wrapper">
									<p class="header-desc-quote">{$WK_HTL_TAG_LINE|escape:"htmlall":"UTF-8"}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
