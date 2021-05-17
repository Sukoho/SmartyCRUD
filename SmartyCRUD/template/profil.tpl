{extends file="../template/home.tpl"}
{block name=body}
<div id="grid-container">	
		<form method="post" action="../controller/controller.php" name="modif" class="form">
			<div id="titre">
			<h1>BONJOUR {$prenom} {$nom}</h1>
			</div>
			{block name=error}{/block}{block name=valid}{/block}
				<input type="hidden" name="id" value="{$id}">
				<p><label for="nom">Nom : </label><input type="text" name="nom" id="nom" value="{$nom}" class="shadow"></p>
				<p><label for="prenom">Prénom : </label>
				<input type="text" name="prenom" id="prenom" value="{$prenom}" class="shadow"></p>
				<p><label for="email">eMail : </label>
				<input type="email" name="email" id="email" placeholder="{$email}" class="shadow"></p>
				<p><label for="pwd">Modifier le mot de passe : </label>
				<input type="password" id="pwd" name="pwd" class="shadow"></p>
				<p><label for="pwd2">Confirmation du mot de passe : </label>
				<input type="password" id="pwd2" name="pwd2" class="shadow"></p>
				<div id="cond"><ul class="cond-error"><li>au moins une majuscule</li>
				<li>au moins une minuscule</li>
				<li>au moins un chiffre</li>
				<li>au moins un caractère spécial</li>
				<li>au moins 8 caractères</li></ul></div>			
			<div><input type="submit" name="modifier" value="Modifier" class="shadow-reverse pos"></div>
			<div><input type="button" value="Menu" class="shadow-reverse pos" id="back" onclick="window.location.href='../index.php'"></div>
			<div><input type="button" value="Déconnexion" class="shadow-reverse pos red" onclick="window.location.href='../model/deco.php'"></div>
			<div><input type="button" value="Supprimer le compte" class="shadow-reverse pos red" id="del"></div>
			
			<div id="delPopup" class="popup">
				<div class="popup-content">
					<p>Etes-vous sûr de vouloir supprimer votre compte ?</p>
					<div class="flex-container">
						<div><input type="button" value="Oui" class="shadow-reverse red btn-popup-content" onclick="window.location.href='../model/supprimer.php'"></div>
						<div><input type="button" value="Non" class="shadow-reverse btn-popup-content" id="non" >></div>
					</div>	
				</div>
			</div>
			
		</form>
</div>
{/block}

{block name=js}
<script>
    let pass = document.getElementById("pwd");  
    let pass2 = document.getElementById("pwd2");
    let nonbtn = document.getElementById("non");
    // Get the modal
	let popup = document.getElementById("delPopup");
	// Get the button that opens the modal
	let btn = document.getElementById("del");

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	document.getElementById("delPopup").style.display = "block";
	}
	nonbtn.onclick = function() {
	document.getElementById("delPopup").style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == document.getElementById("delPopup")) {
		document.getElementById("del").style.display = "none";
		}
	}

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