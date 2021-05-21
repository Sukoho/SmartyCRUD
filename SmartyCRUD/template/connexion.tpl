{extends file="../template/home.tpl"}
{block name=body}
	<div id="grid-container">		
		<form method="post" action="../controller/controller.php" class="form">
			<div id="titre">
			<h1>Connexion</h1>
			</div>
			{block name=error}{/block}
			<input type="email" name="email" id="email" placeholder="eMail" class="shadow"></p>			
			<input type="password" name="pwd" id="pwd" placeholder="Mot de passe" class="shadow"></p>
			<div><input type="submit" name="connexion" value="Connexion" class="shadow-reverse red pos"></div>
			<div><input type="reset" class="shadow-reverse pos"></div>
			<div><input type="button" value="retour" class="shadow-reverse pos" id="back" onclick="window.location.href='../index.php'"></div>
		</form>
	</div>
{/block}