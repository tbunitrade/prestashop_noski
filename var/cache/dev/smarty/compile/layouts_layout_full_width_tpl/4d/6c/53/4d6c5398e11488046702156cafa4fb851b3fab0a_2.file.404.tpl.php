<?php
/* Smarty version 3.1.32, created on 2018-10-28 22:55:36
  from '/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/themes/classic/templates/errors/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd62248a897c1_58331062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d6c5398e11488046702156cafa4fb851b3fab0a' => 
    array (
      0 => '/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/themes/classic/templates/errors/404.tpl',
      1 => 1540759358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5bd62248a897c1_58331062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15827220825bd62248a7b928_79584196', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16159540465bd62248a83776_18019816', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_15827220825bd62248a7b928_79584196 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_15827220825bd62248a7b928_79584196',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
class Block_16159540465bd62248a83776_18019816 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_16159540465bd62248a83776_18019816',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'page_content_container'} */
}
