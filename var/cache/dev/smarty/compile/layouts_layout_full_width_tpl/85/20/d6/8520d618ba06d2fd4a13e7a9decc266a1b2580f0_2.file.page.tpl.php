<?php
/* Smarty version 3.1.32, created on 2018-09-02 12:56:25
  from 'D:\server\OSPanel\domains\presta\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8bb3c9da5047_53958713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8520d618ba06d2fd4a13e7a9decc266a1b2580f0' => 
    array (
      0 => 'D:\\server\\OSPanel\\domains\\presta\\themes\\classic\\templates\\page.tpl',
      1 => 1535646069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8bb3c9da5047_53958713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212465b8bb3c9d8d968_84572875', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_278205b8bb3c9d91e76_89790554 extends Smarty_Internal_Block
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
class Block_272315b8bb3c9d90073_44054779 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_278205b8bb3c9d91e76_89790554', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_84585b8bb3c9d9add4_37097085 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_198355b8bb3c9d9ccc7_39577758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_239255b8bb3c9d990a6_89897413 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84585b8bb3c9d9add4_37097085', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198355b8bb3c9d9ccc7_39577758', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_235375b8bb3c9da1272_37224325 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_101365b8bb3c9d9fd38_62822681 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_235375b8bb3c9da1272_37224325', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_212465b8bb3c9d8d968_84572875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_212465b8bb3c9d8d968_84572875',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_272315b8bb3c9d90073_44054779',
  ),
  'page_title' => 
  array (
    0 => 'Block_278205b8bb3c9d91e76_89790554',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_239255b8bb3c9d990a6_89897413',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_84585b8bb3c9d9add4_37097085',
  ),
  'page_content' => 
  array (
    0 => 'Block_198355b8bb3c9d9ccc7_39577758',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_101365b8bb3c9d9fd38_62822681',
  ),
  'page_footer' => 
  array (
    0 => 'Block_235375b8bb3c9da1272_37224325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_272315b8bb3c9d90073_44054779', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_239255b8bb3c9d990a6_89897413', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101365b8bb3c9d9fd38_62822681', 'page_footer_container', $this->tplIndex);
?>


  </section>



<?php
}
}
/* {/block 'content'} */
}
