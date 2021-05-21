<?php
/* Smarty version 3.1.39, created on 2021-05-21 12:30:30
  from 'C:\laragon\www\SmartyCRUD\template\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a7a7e6149833_44704088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f92e4b67ac661cbc20c95bff175a1e4e1ad64c2' => 
    array (
      0 => 'C:\\laragon\\www\\SmartyCRUD\\template\\home.tpl',
      1 => 1621152166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a7a7e6149833_44704088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
">
	<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112861671960a7a7e6148bd2_36095572', 'body');
?>

</body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136552334260a7a7e6149313_72062281', 'js');
?>

</html><?php }
/* {block 'body'} */
class Block_112861671960a7a7e6148bd2_36095572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_112861671960a7a7e6148bd2_36095572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'js'} */
class Block_136552334260a7a7e6149313_72062281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_136552334260a7a7e6149313_72062281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
}
