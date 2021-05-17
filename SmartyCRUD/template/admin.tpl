{extends file="../template/home.tpl"}
{block name=body}
<div id="grid-container">	
		<form method="post" action="../controller/controller.php" name="modif" class="form">
			<div id="titre">
			<h1>BONJOUR {$prenom} {$nom}</h1>
			</div>
			<p><label for="nom">Nom : </label>
					<input type="nom" name="nom" id="nom" value="{$nom}" class="shadow"></p>
					<p><label for="prenom">Prénom : </label>
					<input type="prenom" name="prenom" id="prenom" value="{$prenom}" class="shadow"></p>
					<p><label for="email">Mail : </label>
					<input type="email" name="email" id="email" value="{$email}" class="shadow"></p>
				<p><label for="pwd">Modifier le mot de passe : </label>
				<input type="password" id="pwd" name="pwd" class="shadow"></p>
				<p><label for="pwd2">Confirmation du mot de passe : </label>
				<input type="password" id="pwd2" name="pwd2" class="shadow"></p>
				<div id="cond" class="valid">
				<ul><li>au moins une majuscule</li>
				<li>au moins une minuscule</li>
				<li>au moins un chiffre</li>
				<li>au moins un caractère spécial</li>
				<li>au moins 6 caractères</li></ul></div>
			<div><input type="submit" value="Modifier" class="shadow-reverse pos"></div>
			<div><input type="button" value="Déconnexion" class="shadow-reverse pos red" onclick="window.location.href='../model/deco.php'"></div>
			<div><input type="button" value="Liste des personnes" class="shadow-reverse pos" onclick="window.location.href='liste.php'"></div>
			<div><input type="button" value="Menu" class="shadow-reverse pos" id="back" onclick="window.location.href='../index.php'"></div>
		</form>
</div>
{/block}

{block name=js}
<script>
    let pass = document.getElementById("pwd");  
    let pass2 = document.getElementById("pwd2");      
    // When the user clicks on the password field, show the message box
    pass.onfocus = function() {
      document.getElementById("cond").style.display = "block";
    }    
    // When the user clicks outside of the password field, hide the message box
    pass.onblur = function() {
      document.getElementById("cond").style.display = "none";
    }
    pass2.onfocus = function() {
      document.getElementById("cond").style.display = "block";
    }    
    // When the user clicks outside of the password field, hide the message box
    pass2.onblur = function() {
      document.getElementById("cond").style.display = "none";
    }
</script>
{/block}