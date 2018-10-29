<?php
/* Smarty version 3.1.32, created on 2018-10-28 22:55:36
  from '/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/themes/classic/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd62248b5f717_69891190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d5ac5aa53f847d93b01f0f6c8c582abb4723898' => 
    array (
      0 => '/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/themes/classic/templates/errors/not-found.tpl',
      1 => 1540759358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd62248b5f717_69891190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10572586905bd62248b510e5_24795446', 'page_content');
?>

</section>
<?php }
/* {block 'search'} */
class Block_3720464125bd62248b57bf8_60429380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_14578165165bd62248b5c4f7_45273025 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_10572586905bd62248b510e5_24795446 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_10572586905bd62248b510e5_24795446',
  ),
  'search' => 
  array (
    0 => 'Block_3720464125bd62248b57bf8_60429380',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_14578165165bd62248b5c4f7_45273025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3720464125bd62248b57bf8_60429380', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14578165165bd62248b5c4f7_45273025', 'hook_not_found', $this->tplIndex);
?>


  <?php
}
}
/* {/block 'page_content'} */
}
