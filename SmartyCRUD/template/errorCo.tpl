{extends file="../template/connexion.tpl"}
{block name=error}
			{foreach $error as $item}
				<div class="cond-error">- {$item}<br></div>
			{/foreach}
{/block}