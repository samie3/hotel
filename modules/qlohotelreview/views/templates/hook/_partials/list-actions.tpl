{**
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License version 3.0
* that is bundled with this package in the file LICENSE.md
* It is also available through the world-wide-web at this URL:
* https://opensource.org/license/osl-3-0-php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to support@yajesapps.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade this module to a newer
* versions in the future. If you wish to customize this module for your needs
* please refer to https://store.webkul.com/customisation-guidelines for more information.
*
* @author Webkul IN
* @copyright Since 2010 Webkul
* @license https://opensource.org/license/osl-3-0-php Open Software License version 3.0
*}

<div class="review-list-actions">
    <div class="row">
        <div class="col-xs-12 text-right">
            <div class="">
                <div class="dropdown review-sort-by">
                    <label class="sort-by">{if $lang_iso == 'ar'}ترتيب حسب{else}{l s='SORT BY' mod='qlohotelreview'}{/if}</label>
                    <div class="review-sort-by-container">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-value="{QhrHotelReview::QHR_SORT_BY_TIME_NEW}">
                            <span>{if $lang_iso == 'ar'}الأحدث أولاً{else}{l s='Newest First' mod='qlohotelreview'}{/if}</span>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu text-left">
                            <li><a class="sort-by-option" data-id-hotel="{$id_hotel}" data-value="{QhrHotelReview::QHR_SORT_BY_RELEVANCE}" href="#">{if $lang_iso == 'ar'}الأكثر صلة{else}{l s='Most Relevant' mod='qlohotelreview'}{/if}</a></li>
                            <li><a class="sort-by-option" data-id-hotel="{$id_hotel}" data-value="{QhrHotelReview::QHR_SORT_BY_TIME_NEW}" href="#">{if $lang_iso == 'ar'}الأحدث أولاً{else}{l s='Newest First' mod='qlohotelreview'}{/if}</a></li>
                            <li><a class="sort-by-option" data-id-hotel="{$id_hotel}" data-value="{QhrHotelReview::QHR_SORT_BY_TIME_OLD}" href="#">{if $lang_iso == 'ar'}الأقدم أولاً{else}{l s='Oldest First' mod='qlohotelreview'}{/if}</a></li>
                            <li><a class="sort-by-option" data-id-hotel="{$id_hotel}" data-value="{QhrHotelReview::QHR_SORT_BY_RATING_HIGH}" href="#">{if $lang_iso == 'ar'}الإيجابي أولاً{else}{l s='Positive First' mod='qlohotelreview'}{/if}</a></li>
                            <li><a class="sort-by-option" data-id-hotel="{$id_hotel}" data-value="{QhrHotelReview::QHR_SORT_BY_RATING_LOW}" href="#">{if $lang_iso == 'ar'}السلبي أولاً{else}{l s='Negative First' mod='qlohotelreview'}{/if}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>