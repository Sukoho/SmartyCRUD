<?php
/* Smarty version 3.1.39, created on 2021-05-21 13:52:58
  from 'C:\laragon\www\SmartyCRUD\template\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a7bb3adbdd04_72138617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d991d0e81f569ca968dcbbae865b2ae365c58e' => 
    array (
      0 => 'C:\\laragon\\www\\SmartyCRUD\\template\\inscription.tpl',
      1 => 1621601949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a7bb3adbdd04_72138617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147227644060a7bb3adbae23_79033377', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23072420760a7bb3adbd1a2_67429019', 'js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../template/home.tpl");
}
/* {block 'error'} */
class Block_152219889360a7bb3adbbca6_94228680 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'error'} */
/* {block 'body'} */
class Block_147227644060a7bb3adbae23_79033377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_147227644060a7bb3adbae23_79033377',
  ),
  'error' => 
  array (
    0 => 'Block_152219889360a7bb3adbbca6_94228680',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="grid-container">		
		<form method="post" action="../controller/controller.php" class="form">
			<div id="titre">
			<h1>Inscription</h1>
			</div>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152219889360a7bb3adbbca6_94228680', 'error', $this->tplIndex);
?>

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
<?php
}
}
/* {/block 'body'} */
/* {block 'js'} */
class Block_23072420760a7bb3adbd1a2_67429019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_23072420760a7bb3adbd1a2_67429019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'js'} */
}
