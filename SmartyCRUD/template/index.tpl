 {extends file="../template/home.tpl"}
 {block name="body"}
	<div id="grid-container">		
		<form class="form">
		<div id="titre"><h1>BIENVENUE</h1></div>
		<div><input type="button" value="Connexion" class="shadow-reverse pos" id="co" onclick="window.location.href='model/connexion.php'"></div>
		<div><input type="button" value="Inscription" class="shadow-reverse pos" id="ins" onclick="window.location.href='model/inscription.php'"></div>
		</form>
	</div>
{/block}