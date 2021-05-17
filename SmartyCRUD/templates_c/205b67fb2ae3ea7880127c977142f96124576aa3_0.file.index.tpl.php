<?php
/* Smarty version 3.1.39, created on 2021-05-17 09:25:39
  from 'C:\laragon\www\SmartyCRUD\view\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a2369373ccd6_98799061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '205b67fb2ae3ea7880127c977142f96124576aa3' => 
    array (
      0 => 'C:\\laragon\\www\\SmartyCRUD\\view\\template\\index.tpl',
      1 => 1621243531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a2369373ccd6_98799061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136114248660a2369373bc62_58156034', "body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207825570260a2369373c761_28195919', "titre");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template/home.tpl");
}
/* {block "body"} */
class Block_136114248660a2369373bc62_58156034 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_136114248660a2369373bc62_58156034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="grid-container">		
		<form class="form">
		<div id="titre"><h1>BIENVENUE</h1></div>
		<div><input type="button" value="Connexion" class="shadow-reverse pos" id="co" onclick="window.location.href='model/connexion.php'"></div>
		<div><input type="button" value="Inscription" class="shadow-reverse pos" id="ins" onclick="window.location.href='view/template/inscription.php'"></div>
		</form>
	</div>
<?php
}
}
/* {/block "body"} */
/* {block "titre"} */
class Block_207825570260a2369373c761_28195919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_207825570260a2369373c761_28195919',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
$titre<?php
}
}
/* {/block "titre"} */
}
