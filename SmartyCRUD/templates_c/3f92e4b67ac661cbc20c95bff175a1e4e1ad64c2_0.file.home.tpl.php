<?php
/* Smarty version 3.1.39, created on 2021-05-19 08:13:13
  from 'C:\laragon\www\SmartyCRUD\template\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a4c899690f57_62038257',
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
function content_60a4c899690f57_62038257 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186373763460a4c8996902c9_40540073', 'body');
?>

</body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173527080260a4c899690a12_66555668', 'js');
?>

</html><?php }
/* {block 'body'} */
class Block_186373763460a4c8996902c9_40540073 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_186373763460a4c8996902c9_40540073',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'js'} */
class Block_173527080260a4c899690a12_66555668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_173527080260a4c899690a12_66555668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
}
