<?php
/* Smarty version 3.1.39, created on 2021-05-17 13:33:20
  from 'C:\laragon\www\SmartyCRUD\template\errorModif.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a270a01c9931_93088431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b9582b8d42bf0e90d42ebc2a2fa048f41a5cf13' => 
    array (
      0 => 'C:\\laragon\\www\\SmartyCRUD\\template\\errorModif.tpl',
      1 => 1621244934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a270a01c9931_93088431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87402589160a270a01c22f3_83279049', 'error');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../template/profil.tpl");
}
/* {block 'error'} */
class Block_87402589160a270a01c22f3_83279049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'error' => 
  array (
    0 => 'Block_87402589160a270a01c22f3_83279049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<div class="cond-error">- <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br></div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'error'} */
}
