<?php
/* Smarty version 3.1.32, created on 2018-09-01 19:27:44
  from 'D:\server\OSPanel\domains\presta\admin993rzsfnh\themes\default\template\controllers\customers\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8abe00e8e5d6_30877873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b8e930e3e5814fff95c2c88e97dae4efcbef3b3' => 
    array (
      0 => 'D:\\server\\OSPanel\\domains\\presta\\admin993rzsfnh\\themes\\default\\template\\controllers\\customers\\helpers\\list\\list_header.tpl',
      1 => 1535281630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8abe00e8e5d6_30877873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_279595b8abe00e566c1_07136503', 'override_header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_293485b8abe00e62370_26870630', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_279595b8abe00e566c1_07136503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_279595b8abe00e566c1_07136503',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$('#customer', window.parent.document).val('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['new_customer']->value->email,'html','UTF-8' ));?>
');
		parent.setupCustomer(<?php echo intval($_smarty_tpl->tpl_vars['new_customer']->value->id);?>
);
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
/* {block 'leadin'} */
class Block_293485b8abe00e62370_26870630 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_293485b8abe00e62370_26870630',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (isset($_smarty_tpl->tpl_vars['delete_customer']->value) && $_smarty_tpl->tpl_vars['delete_customer']->value) {?>
		<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['REQUEST_URI']->value,'html','UTF-8' ));?>
" method="post">
			<div class="alert alert-warning">
				<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How do you want to delete the selected customers?','d'=>'Admin.Orderscustomers.Notification'),$_smarty_tpl ) );?>
</h4>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are two ways of deleting a customer. Please choose your preferred method.','d'=>'Admin.Orderscustomers.Notification'),$_smarty_tpl ) );?>
</p>
				<br>
				<ul class="listForm list-unstyled">
					<li>
						<label for="deleteMode_real" class="control-label">
							<input type="radio" name="deleteMode" value="real" id="deleteMode_real" />
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I want my customers to be able to register again with the same email address. All data will be removed from the database.','d'=>'Admin.Orderscustomers.Notification'),$_smarty_tpl ) );?>

						</label>
					</li>
					<li>
						<label for="deleteMode_deleted" class="control-label">
							<input type="radio" name="deleteMode" value="deleted" id="deleteMode_deleted" />
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I do not want my customer(s) to register again with the same email address. All selected customer(s) will be removed from this list but their corresponding data will be kept in the database.','d'=>'Admin.Orderscustomers.Notification'),$_smarty_tpl ) );?>

						</label>
					</li>
				</ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['POST']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
					<?php if (is_array($_smarty_tpl->tpl_vars['value']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
							<input type="hidden" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value,'html','UTF-8' ));?>
" />
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
						<input type="hidden" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'html','UTF-8' ));?>
" />
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<input type="submit" class="btn btn-default" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
" />
			</div>
		</form>
		<?php echo '<script'; ?>
>
			$(document).ready(function() {
				$('table[name=\'list_table\']').hide();
			});
		<?php echo '</script'; ?>
>
	<?php }
}
}
/* {/block 'leadin'} */
}
