<?php
/* Smarty version 3.1.32, created on 2018-10-28 22:10:21
  from 'D:\server\OSPanel\domains\presta\admin993rzsfnh\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd617ad397ea7_65354905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87d7ca969f0f5c18ff82a96207b9dee4def7c897' => 
    array (
      0 => 'D:\\server\\OSPanel\\domains\\presta\\admin993rzsfnh\\themes\\default\\template\\content.tpl',
      1 => 1537967717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd617ad397ea7_65354905 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
