<?php
/* Smarty version 3.1.39, created on 2021-05-17 14:04:05
  from 'C:\laragon\www\SmartyCRUD\template\validModif.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a277d53540c6_40780852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd846ac9431400bb8507c808cf5932b7e10b2670d' => 
    array (
      0 => 'C:\\laragon\\www\\SmartyCRUD\\template\\validModif.tpl',
      1 => 1621260221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a277d53540c6_40780852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31997453560a277d53538d7_10898632', 'valid');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../template/profil.tpl");
}
/* {block 'valid'} */
class Block_31997453560a277d53538d7_10898632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'valid' => 
  array (
    0 => 'Block_31997453560a277d53538d7_10898632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="cond-error">Votre compte a bien été modifié !</div>
<?php
}
}
/* {/block 'valid'} */
}
