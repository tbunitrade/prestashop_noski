<?php
/* Smarty version 3.1.32, created on 2018-10-28 22:55:35
  from '/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd62247bffc65_52959868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c429443552bc08e8bd3a0e9e98084f718941080' => 
    array (
      0 => '/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/themes/classic/templates/page.tpl',
      1 => 1540759358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd62247bffc65_52959868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18117803805bd62247be6d29_39595091', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_2314532055bd62247bea8d5_44416719 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_17277096635bd62247be86c6_51032639 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2314532055bd62247bea8d5_44416719', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_20782437025bd62247bf4828_49656611 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_2286363885bd62247bf69a6_84540509 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_21146721415bd62247bf2a15_21757359 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20782437025bd62247bf4828_49656611', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2286363885bd62247bf69a6_84540509', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_8436093525bd62247bfbb96_63213226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_13643058845bd62247bfa1b4_99223550 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8436093525bd62247bfbb96_63213226', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_18117803805bd62247be6d29_39595091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18117803805bd62247be6d29_39595091',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_17277096635bd62247be86c6_51032639',
  ),
  'page_title' => 
  array (
    0 => 'Block_2314532055bd62247bea8d5_44416719',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_21146721415bd62247bf2a15_21757359',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20782437025bd62247bf4828_49656611',
  ),
  'page_content' => 
  array (
    0 => 'Block_2286363885bd62247bf69a6_84540509',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_13643058845bd62247bfa1b4_99223550',
  ),
  'page_footer' => 
  array (
    0 => 'Block_8436093525bd62247bfbb96_63213226',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17277096635bd62247be86c6_51032639', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21146721415bd62247bf2a15_21757359', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13643058845bd62247bfa1b4_99223550', 'page_footer_container', $this->tplIndex);
?>


  </section>



<?php
}
}
/* {/block 'content'} */
}
