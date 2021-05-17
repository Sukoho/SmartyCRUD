<?php
/* Smarty version 3.1.39, created on 2021-05-17 13:07:04
  from 'C:\laragon\www\SmartyCRUD\template\liste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a26a781a1c86_24594621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef8e9108711a1d2706a386b19e68414368a04616' => 
    array (
      0 => 'C:\\laragon\\www\\SmartyCRUD\\template\\liste.tpl',
      1 => 1621253908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a26a781a1c86_24594621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106384540660a26a78199213_39907567', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../template/home.tpl");
}
/* {block 'body'} */
class Block_106384540660a26a78199213_39907567 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_106384540660a26a78199213_39907567',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="grid-container">	
		<form method="post" action="../controller/controller.php" name="modif" class="form">
			<div id="titre">
			<h1>LISTE DES PERSONNES INSCRITES</h1>
			</div>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste']->value, 'personne');
$_smarty_tpl->tpl_vars['personne']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['personne']->value) {
$_smarty_tpl->tpl_vars['personne']->do_else = false;
?>
			<div class="listeCenter">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personne']->value, 'detail');
$_smarty_tpl->tpl_vars['detail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['detail']->value) {
$_smarty_tpl->tpl_vars['detail']->do_else = false;
?>
					<?php echo $_smarty_tpl->tpl_vars['detail']->value;?>
<br>					
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<hr class="hr">
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				
			<div><input type="button" name="profil" value="Profil" class="shadow-reverse pos" onclick="window.location.href='profil.php'"></div>
			<div><input type="button" value="Déconnexion" class="shadow-reverse pos red" onclick="window.location.href='../model/deco.php'"></div>
			<div><input type="button" value="Menu" class="shadow-reverse pos" id="back" onclick="window.location.href='../index.php'"></div>
			}
		</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
