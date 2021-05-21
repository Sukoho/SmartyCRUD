<?php
/* Smarty version 3.1.39, created on 2021-05-21 12:41:42
  from 'C:\laragon\www\SmartyCRUD\template\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a7aa86dcc0c1_70155739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6f9abcf505ea3c824bb6cc073df4d76552dfc69' => 
    array (
      0 => 'C:\\laragon\\www\\SmartyCRUD\\template\\connexion.tpl',
      1 => 1621245071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a7aa86dcc0c1_70155739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59829080060a7aa86dca224_38897552', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88273151660a7aa86dcba77_04607264', 'titre');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../template/home.tpl");
}
/* {block 'error'} */
class Block_134092795460a7aa86dcab51_53346444 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'error'} */
/* {block 'body'} */
class Block_59829080060a7aa86dca224_38897552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_59829080060a7aa86dca224_38897552',
  ),
  'error' => 
  array (
    0 => 'Block_134092795460a7aa86dcab51_53346444',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="grid-container">		
		<form method="post" action="../controller/controller.php" class="form">
			<div id="titre">
			<h1>Connexion</h1>
			</div>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134092795460a7aa86dcab51_53346444', 'error', $this->tplIndex);
?>

			<input type="email" name="email" id="email" placeholder="eMail" class="shadow"></p>			
			<input type="password" name="pwd" id="pwd" placeholder="Mot de passe" class="shadow"></p>
			<div><input type="submit" name="connexion" value="Connexion" class="shadow-reverse red pos"></div>
			<div><input type="reset" class="shadow-reverse pos"></div>
			<div><input type="button" value="retour" class="shadow-reverse pos" id="back" onclick="window.location.href='../index.php'"></div>
		</form>
	</div>
<?php
}
}
/* {/block 'body'} */
/* {block 'titre'} */
class Block_88273151660a7aa86dcba77_04607264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_88273151660a7aa86dcba77_04607264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
$titre<?php
}
}
/* {/block 'titre'} */
}
