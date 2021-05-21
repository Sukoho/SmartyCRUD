 {extends file="../template/home.tpl"}
{block name=body}
	<div id="grid-container">		
		<form method="post" action="../controller/controller.php" class="form">
			<div id="titre">
			<h1>Inscription</h1>
			</div>
			{block name=error}{/block}
			<div><input type="text" name="nom" id="nom" placeholder="Nom" class="shadow"></div>
			<div><input type="text" name="prenom" id="prenom" placeholder="Prénom" class="shadow"></div>
			<div><input type="email" name="email" id="email" placeholder="eMail" class="shadow"></div>
			<div><input type="password" name="pwd" id="pwd" placeholder="Mot de passe" class="shadow"></div>
			<div><input type="password" name="pwd2" id="pwd2" placeholder="Confirmation du mot de passe" class="shadow"></div>
			<div id="cond"><ul class="cond-error"><li>au moins une majuscule</li>
			<li>au moins une minuscule</li>
			<li>au moins un chiffre</li>
			<li>au moins un caractère spécial</li>
			<li>au moins 8 caractères</li></ul></div>
			<div><input type="submit" name="inscription" value="Inscription" class="shadow-reverse red pos"></div>		
			<div><input type="reset" value="Effacer" class="shadow-reverse pos"></div>
			<div><input type="button" value="retour" class="shadow-reverse pos" id="back" onclick="window.location.href='../index.php'"></div>
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