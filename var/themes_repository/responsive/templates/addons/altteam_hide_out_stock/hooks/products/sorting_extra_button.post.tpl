{if !$no_sorting}
    {if !$config.tweaks.disable_dhtml || $force_ajax}
        {assign var="ajax_class" value="cm-ajax"}
    {/if}
    {if $search.hide_out_stock == 'Y'}
        {assign var="hide_out_stock" value=true}
    {/if}    
    {assign var="curl" value=$config.current_url|fn_query_remove:"page"}
	<div class="ty-sort-dropdown">
		<a id="sw_hide_out_stock" class="ty-sort-dropdown__wrapper cm-combination">{if $hide_out_stock}{__("altteam_hide_out_stock.hide_out_stock")}{else}{__("altteam_hide_out_stock.show_out_stock")}{/if}<i class="ty-sort-dropdown__icon ty-icon-down-micro"></i></a>
		<ul id="hide_out_stock" class="ty-sort-dropdown__content cm-popup-box hidden">
		{if !$hide_out_stock}
			<li class="ty-sort-dropdown__content-item">
				<a class="{$ajax_class} ty-sort-dropdown__content-item-a" data-ca-target-id="{$pagination_id}" href="{"`$curl`&hide_out_stock=Y"|fn_url}" rel="nofollow">{__("altteam_hide_out_stock.hide_out_stock")}</a>
			</li>
			{else}
			<li class="ty-sort-dropdown__content-item">
				<a class="{$ajax_class} ty-sort-dropdown__content-item-a" data-ca-target-id="{$pagination_id}" href="{"`$curl`&hide_out_stock=N"|fn_url}" rel="nofollow">{__("altteam_hide_out_stock.show_out_stock")}</a>
			</li>
		{/if}
		</ul>
	</div>
{/if}
