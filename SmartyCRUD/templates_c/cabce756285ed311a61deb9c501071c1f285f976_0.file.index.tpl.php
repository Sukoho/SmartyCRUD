<?php
/* Smarty version 3.1.39, created on 2021-05-19 08:13:13
  from 'C:\laragon\www\SmartyCRUD\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a4c8995b5820_26627030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cabce756285ed311a61deb9c501071c1f285f976' => 
    array (
      0 => 'C:\\laragon\\www\\SmartyCRUD\\template\\index.tpl',
      1 => 1621244566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a4c8995b5820_26627030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189334991860a4c8995b3cb6_46638515', "body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25683863760a4c8995b4f04_71095316', "titre");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../template/home.tpl");
}
/* {block "body"} */
class Block_189334991860a4c8995b3cb6_46638515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_189334991860a4c8995b3cb6_46638515',
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
/* {block "titre"} */
class Block_25683863760a4c8995b4f04_71095316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_25683863760a4c8995b4f04_71095316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
$titre<?php
}
}
/* {/block "titre"} */
}
