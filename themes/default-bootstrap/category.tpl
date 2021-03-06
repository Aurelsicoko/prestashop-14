{*
* 2007-2015 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{include file="$tpl_dir./errors.tpl"}
{if isset($category)}
	{if $category->id AND $category->active}
        {if ($category->link_rewrite)!='vins-blancs' && ($category->link_rewrite)!='white-wines'}
        	{if $lang_iso =='fr'}
	            <a class="category-page-link left" href="{$link->getCategoryLink(12, 'vins-blancs')|escape:'html':'UTF-8'}">Vins blancs</a>
			{else}
	            <a class="category-page-link left" href="{$link->getCategoryLink(12, 'white-wines')|escape:'html':'UTF-8'}">White wines</a>
	        {/if}
        {/if}
        {if ($category->link_rewrite)!='vins-rouges' && ($category->link_rewrite)!='red-wines'}
            {if $lang_iso == 'fr'}
	            <a class="category-page-link right" href="{$link->getCategoryLink(13, 'vins-rouges')|escape:'html':'UTF-8'}">Vins rouges</a>
			{else}
	            <a class="category-page-link right" href="{$link->getCategoryLink(13, 'red-wines')|escape:'html':'UTF-8'}">Red wines</a>
	        {/if}
        {/if}
        {if (($category->link_rewrite)!='vins-roses' && ($category->link_rewrite)=='vins-blancs') || (($category->link_rewrite)!='rose-wines' && ($category->link_rewrite)=='white-wines')}
            {if $lang_iso =='fr'}
	            <a class="category-page-link left" href="{$link->getCategoryLink(14, 'vins-roses')|escape:'html':'UTF-8'}">Vins rosés</a>
			{else}
	            <a class="category-page-link left" href="{$link->getCategoryLink(14, 'rose-wines')|escape:'html':'UTF-8'}">Rosé wines</a>
	        {/if}
        {/if}
        {if (($category->link_rewrite)!='vins-roses' && ($category->link_rewrite)=='vins-rouges') || (($category->link_rewrite)!='rose-wines' && ($category->link_rewrite)=='red-wines')}
        	{if $lang_iso =='fr'}
	            <a class="category-page-link right" href="{$link->getCategoryLink(14, 'vins-roses')|escape:'html':'UTF-8'}">Vins rosés</a>
			{else}
	            <a class="category-page-link right" href="{$link->getCategoryLink(14, 'rose-wines')|escape:'html':'UTF-8'}">Rosé wines</a>
	        {/if}
        {/if}

		{if isset($subcategories)}
        {if (isset($display_subcategories) && $display_subcategories eq 1) || !isset($display_subcategories) }
		<!-- Subcategories -->
		<div id="subcategories">
			<p class="subcategory-heading">{l s='Subcategories'}</p>
			<ul class="clearfix">
			{foreach from=$subcategories item=subcategory}
				<li>
                	<div class="subcategory-image">
						<a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'html':'UTF-8'}" title="{$subcategory.name|escape:'html':'UTF-8'}" class="img">
						{if $subcategory.id_image}
							<img class="replace-2x" src="{$link->getCatImageLink($subcategory.link_rewrite, $subcategory.id_image, 'medium_default')|escape:'html':'UTF-8'}" alt="" width="{$mediumSize.width}" height="{$mediumSize.height}" />
						{else}
							<img class="replace-2x" src="{$img_cat_dir}{$lang_iso}-default-medium_default.jpg" alt="" width="{$mediumSize.width}" height="{$mediumSize.height}" />
						{/if}
					</a>
                   	</div>
					<h5><a class="subcategory-name" href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'html':'UTF-8'}">{$subcategory.name|truncate:25:'...'|escape:'html':'UTF-8'}</a></h5>
					{if $subcategory.description}
						<div class="cat_desc">{$subcategory.description}</div>
					{/if}
				</li>
			{/foreach}
			</ul>
		</div>
        {/if}
		{/if}
		{if $products}
			{include file="./product-list.tpl" products=$products}
		{/if}
	{elseif $category->id}
		<p class="alert alert-warning">{l s='This category is currently unavailable.'}</p>
	{/if}
{/if}
