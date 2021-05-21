<?php
/* Smarty version 3.1.39, created on 2021-05-21 12:58:03
  from 'C:\laragon\www\SmartyCRUD\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a7ae5b1d93b7_63722053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cabce756285ed311a61deb9c501071c1f285f976' => 
    array (
      0 => 'C:\\laragon\\www\\SmartyCRUD\\template\\index.tpl',
      1 => 1621601869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a7ae5b1d93b7_63722053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117159532660a7ae5b1d8b36_68305597', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../template/home.tpl");
}
/* {block "body"} */
class Block_117159532660a7ae5b1d8b36_68305597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_117159532660a7ae5b1d8b36_68305597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="grid-container">		
		<form class="form">
		<div id="titre"><h1>BIENVENUE</h1></div>
		<div><input type="button" value="Connexion" class="shadow-reverse pos" id="co" onclick="window.location.href='model/connexion.php'"></div>
		<div><input type="button" value="Inscription" class="shadow-reverse pos" id="ins" onclick="window.location.href='model/inscription.php'"></div>
		</form>
	</div>
<?php
}
}
/* {/block "body"} */
}
