<?php
/* Smarty version 3.1.39, created on 2021-05-19 07:04:22
  from 'C:\laragon\www\SmartyCRUD\template\validModif.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a4b8761d1746_07295707',
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
function content_60a4b8761d1746_07295707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109838957060a4b8761d0e62_42857112', 'valid');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../template/profil.tpl");
}
/* {block 'valid'} */
class Block_109838957060a4b8761d0e62_42857112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'valid' => 
  array (
    0 => 'Block_109838957060a4b8761d0e62_42857112',
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
