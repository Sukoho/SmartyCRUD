<?php
/* Smarty version 3.1.39, created on 2021-05-19 07:00:18
  from 'C:\laragon\www\SmartyCRUD\template\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a4b7823f5836_45593667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87634621becbeb34942136c4140c8b5cec21cacf' => 
    array (
      0 => 'C:\\laragon\\www\\SmartyCRUD\\template\\profil.tpl',
      1 => 1621260155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a4b7823f5836_45593667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115070983360a4b7823f04c2_84537941', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214550684660a4b7823f4c94_95330263', 'js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../template/home.tpl");
}
/* {block 'error'} */
class Block_173458739760a4b7823f3500_27353233 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'error'} */
/* {block 'valid'} */
class Block_38048096460a4b7823f3bd1_72554624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'valid'} */
/* {block 'body'} */
class Block_115070983360a4b7823f04c2_84537941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_115070983360a4b7823f04c2_84537941',
  ),
  'error' => 
  array (
    0 => 'Block_173458739760a4b7823f3500_27353233',
  ),
  'valid' => 
  array (
    0 => 'Block_38048096460a4b7823f3bd1_72554624',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="grid-container">	
		<form method="post" action="../controller/controller.php" name="modif" class="form">
			<div id="titre">
			<h1>BONJOUR <?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
</h1>
			</div>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173458739760a4b7823f3500_27353233', 'error', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38048096460a4b7823f3bd1_72554624', 'valid', $this->tplIndex);
?>

				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
				<p><label for="nom">Nom : </label><input type="text" name="nom" id="nom" value="<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
" class="shadow"></p>
				<p><label for="prenom">Prénom : </label>
				<input type="text" name="prenom" id="prenom" value="<?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
" class="shadow"></p>
				<p><label for="email">eMail : </label>
				<input type="email" name="email" id="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="shadow"></p>
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
<?php
}
}
/* {/block 'body'} */
/* {block 'js'} */
class Block_214550684660a4b7823f4c94_95330263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_214550684660a4b7823f4c94_95330263',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'js'} */
}
