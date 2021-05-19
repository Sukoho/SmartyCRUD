<?php
/* Smarty version 3.1.39, created on 2021-05-19 06:50:16
  from 'C:\laragon\www\SmartyCRUD\template\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a4b528a4fec1_85645692',
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
function content_60a4b528a4fec1_85645692 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163902207060a4b528a4f231_15872106', 'body');
?>

</body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11401690960a4b528a4f982_48052154', 'js');
?>

</html><?php }
/* {block 'body'} */
class Block_163902207060a4b528a4f231_15872106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_163902207060a4b528a4f231_15872106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'js'} */
class Block_11401690960a4b528a4f982_48052154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_11401690960a4b528a4f982_48052154',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
}
