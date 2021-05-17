{extends file="../template/home.tpl"}
{block name=body}
<div id="grid-container">	
		<form method="post" action="../controller/controller.php" name="modif" class="form">
			<div id="titre">
			<h1>LISTE DES PERSONNES INSCRITES</h1>
			</div>
			{foreach $liste as $personne}
			<div class="listeCenter">
				{foreach $personne as $detail}
					{$detail}<br>					
				{/foreach}
			</div>
			<hr class="hr">
			{/foreach}
				
			<div><input type="button" name="profil" value="Profil" class="shadow-reverse pos" onclick="window.location.href='profil.php'"></div>
			<div><input type="button" value="Déconnexion" class="shadow-reverse pos red" onclick="window.location.href='../model/deco.php'"></div>
			<div><input type="button" value="Menu" class="shadow-reverse pos" id="back" onclick="window.location.href='../index.php'"></div>
			}
		</form>
</div>
{/block}