{**
* Language Toggle - AR / EN button switch
*}
{block name='block_languages'}
    {if count($languages) > 1}
        <div id="languages-block-top" class="languages-block-wrap nav-main-item-right hidden-xs pull-right">
            <div class="lang-toggle-container">
                {foreach from=$languages key=k item=language name=langLoop}
                    {assign var=indice_lang value=$language.id_lang}
                    {if isset($lang_rewrite_urls.$indice_lang)}
                        {assign var=lang_url value=$lang_rewrite_urls.$indice_lang}
                    {else}
                        {assign var=lang_url value=$link->getLanguageLink($language.id_lang)}
                    {/if}
                    {if $language.iso_code == 'ar'}
                        <a href="{$lang_url|escape:'html':'UTF-8'}" class="lang-btn {if $language.iso_code == $lang_iso}lang-btn-active{else}lang-btn-inactive{/if}" title="العربية">
                            AR
                        </a>
                    {elseif $language.iso_code == 'en'}
                        <a href="{$lang_url|escape:'html':'UTF-8'}" class="lang-btn {if $language.iso_code == $lang_iso}lang-btn-active{else}lang-btn-inactive{/if}" title="English">
                            EN
                        </a>
                    {/if}
                    {if not $smarty.foreach.langLoop.last}
                        <span class="lang-toggle-divider">|</span>
                    {/if}
                {/foreach}
            </div>
        </div>
    {/if}
{/block}
