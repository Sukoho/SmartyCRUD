<?php
/* Smarty version 3.1.39, created on 2021-05-21 15:12:14
  from 'C:\laragon\www\SmartyCRUD\template\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a7cdceb0f481_53490229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6f9abcf505ea3c824bb6cc073df4d76552dfc69' => 
    array (
      0 => 'C:\\laragon\\www\\SmartyCRUD\\template\\connexion.tpl',
      1 => 1621601950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a7cdceb0f481_53490229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84860153560a7cdceb0d752_68988519', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../template/home.tpl");
}
/* {block 'error'} */
class Block_1923864360a7cdceb0e2d4_41274105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'error'} */
/* {block 'body'} */
class Block_84860153560a7cdceb0d752_68988519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_84860153560a7cdceb0d752_68988519',
  ),
  'error' => 
  array (
    0 => 'Block_1923864360a7cdceb0e2d4_41274105',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1923864360a7cdceb0e2d4_41274105', 'error', $this->tplIndex);
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
}
