<?php
/* Smarty version 3.1.39, created on 2021-05-21 12:42:58
  from 'C:\laragon\www\SmartyCRUD\template\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a7aad25ae166_08005503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd787fc7eda48e390fe16e7cb7d6709170da22fa2' => 
    array (
      0 => 'C:\\laragon\\www\\SmartyCRUD\\template\\admin.tpl',
      1 => 1621407738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a7aad25ae166_08005503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163760326760a7aad25a9d26_23760285', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195659515660a7aad25ad8e6_10318785', 'js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../template/home.tpl");
}
/* {block 'body'} */
class Block_163760326760a7aad25a9d26_23760285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_163760326760a7aad25a9d26_23760285',
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
			<p><label for="nom">Nom : </label>
					<input type="nom" name="nom" id="nom" value="<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
" class="shadow"></p>
					<p><label for="prenom">Prénom : </label>
					<input type="prenom" name="prenom" id="prenom" value="<?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
" class="shadow"></p>
					<p><label for="email">Mail : </label>
					<input type="email" name="email" id="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="shadow"></p>
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
<?php
}
}
/* {/block 'body'} */
/* {block 'js'} */
class Block_195659515660a7aad25ad8e6_10318785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_195659515660a7aad25ad8e6_10318785',
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
