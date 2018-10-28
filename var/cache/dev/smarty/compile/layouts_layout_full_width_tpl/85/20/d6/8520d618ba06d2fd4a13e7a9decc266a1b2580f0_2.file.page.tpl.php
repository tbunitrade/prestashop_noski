<?php
/* Smarty version 3.1.32, created on 2018-10-28 22:21:35
  from 'D:\server\OSPanel\domains\presta\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd61a4f4e5c49_84918050',
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
function content_5bd61a4f4e5c49_84918050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134415bd61a4f387160_09986792', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_146955bd61a4f3c5cf0_05836444 extends Smarty_Internal_Block
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
class Block_228225bd61a4f3a1262_67983016 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146955bd61a4f3c5cf0_05836444', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_60775bd61a4f42daf1_60744248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_250105bd61a4f452f57_88401650 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7885bd61a4f4152a9_43942919 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60775bd61a4f42daf1_60744248', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_250105bd61a4f452f57_88401650', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_154885bd61a4f4a4699_80143879 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_12835bd61a4f48bb70_87158687 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154885bd61a4f4a4699_80143879', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_134415bd61a4f387160_09986792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_134415bd61a4f387160_09986792',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_228225bd61a4f3a1262_67983016',
  ),
  'page_title' => 
  array (
    0 => 'Block_146955bd61a4f3c5cf0_05836444',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_7885bd61a4f4152a9_43942919',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_60775bd61a4f42daf1_60744248',
  ),
  'page_content' => 
  array (
    0 => 'Block_250105bd61a4f452f57_88401650',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_12835bd61a4f48bb70_87158687',
  ),
  'page_footer' => 
  array (
    0 => 'Block_154885bd61a4f4a4699_80143879',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_228225bd61a4f3a1262_67983016', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7885bd61a4f4152a9_43942919', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12835bd61a4f48bb70_87158687', 'page_footer_container', $this->tplIndex);
?>


  </section>



<?php
}
}
/* {/block 'content'} */
}
