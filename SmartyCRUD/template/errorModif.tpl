{extends file="../template/profil.tpl"}
{block name=error}
			{foreach $error as $item}
				<div class="cond-error">- {$item}<br></div>
			{/foreach}
{/block}