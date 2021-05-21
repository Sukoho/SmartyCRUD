<?php
/* Smarty version 3.1.39, created on 2021-05-21 12:41:42
  from 'C:\laragon\www\SmartyCRUD\template\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a7aa86e40697_82561586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44e3cc998a3d66ec7e9a3dcb25ab9ae4467cb14e' => 
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
function content_60a7aa86e40697_82561586 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124073753760a7aa86e3f896_99821996', 'body');
?>

</body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1363908660a7aa86e40005_85149228', 'js');
?>

</html><?php }
/* {block 'body'} */
class Block_124073753760a7aa86e3f896_99821996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_124073753760a7aa86e3f896_99821996',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'js'} */
class Block_1363908660a7aa86e40005_85149228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_1363908660a7aa86e40005_85149228',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
}
