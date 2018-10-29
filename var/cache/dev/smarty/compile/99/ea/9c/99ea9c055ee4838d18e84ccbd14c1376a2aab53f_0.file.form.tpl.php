<?php
/* Smarty version 3.1.32, created on 2018-10-29 08:58:15
  from '/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/modules/ps_mainmenu/views/templates/admin/_configure/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd6af87025cb2_11808623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99ea9c055ee4838d18e84ccbd14c1376a2aab53f' => 
    array (
      0 => '/var/www/xn7sbbighlkm9ahj2air/prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh/modules/ps_mainmenu/views/templates/admin/_configure/helpers/form/form.tpl',
      1 => 1540759357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd6af87025cb2_11808623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1717352695bd6af870034d2_81339977', "script");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18482969725bd6af87011c06_41504011', "input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "script"} */
class Block_1717352695bd6af870034d2_81339977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1717352695bd6af870034d2_81339977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

$(document).ready(function(){
$('#menuOrderUp').click(function(e){
	e.preventDefault();
    move(true);
});
$('#menuOrderDown').click(function(e){
    e.preventDefault();
    move();
});
$("#items").closest('form').on('submit', function(e) {
	$("#items option").prop('selected', true);
});
$("#addItem").click(add);
$("#availableItems").dblclick(add);
$("#removeItem").click(remove);
$("#items").dblclick(remove);
function add()
{
	$("#availableItems option:selected").each(function(i){
		var val = $(this).val();
		var text = $(this).text();
		text = text.replace(/(^\s*)|(\s*$)/gi,"");
		if (val == "PRODUCT")
		{
			val = prompt('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Indicate the ID number for the product",'d'=>'Modules.Mainmenu.Admin','js'=>1),$_smarty_tpl ) );?>
');
			if (val == null || val == "" || isNaN(val))
				return;
			text = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Product ID #",'d'=>'Modules.Mainmenu.Admin','js'=>1),$_smarty_tpl ) );?>
'+val;
			val = "PRD"+val;
		}
		$("#items").append('<option value="'+val+'" selected="selected">'+text+'</option>');
	});
	serialize();
	return false;
}
function remove()
{
	$("#items option:selected").each(function(i){
		$(this).remove();
	});
	serialize();
	return false;
}
function serialize()
{
	var options = "";
	$("#items option").each(function(i){
		options += $(this).val()+",";
	});
	$("#itemsInput").val(options.substr(0, options.length - 1));
}
function move(up)
{
        var tomove = $('#items option:selected');
        if (tomove.length >1)
        {
                alert('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Please select just one item",'d'=>'Modules.Mainmenu.Admin'),$_smarty_tpl ) );?>
');
                return false;
        }
        if (up)
                tomove.prev().insertAfter(tomove);
        else
                tomove.next().insertBefore(tomove);
        serialize();
        return false;
}
});
<?php
}
}
/* {/block "script"} */
/* {block "input"} */
class Block_18482969725bd6af87011c06_41504011 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_18482969725bd6af87011c06_41504011',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'link_choice') {?>
	    <div class="row">
	    	<div class="col-lg-1">
	    		<h4 style="margin-top:5px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change position','d'=>'Modules.Mainmenu.Admin'),$_smarty_tpl ) );?>
</h4>
                <a href="#" id="menuOrderUp" class="btn btn-default" style="font-size:20px;display:block;"><i class="icon-chevron-up"></i></a><br/>
                <a href="#" id="menuOrderDown" class="btn btn-default" style="font-size:20px;display:block;"><i class="icon-chevron-down"></i></a><br/>
	    	</div>
	    	<div class="col-lg-4">
	    		<h4 style="margin-top:5px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected items','d'=>'Modules.Mainmenu.Admin'),$_smarty_tpl ) );?>
</h4>
	    		<?php echo $_smarty_tpl->tpl_vars['selected_links']->value;?>

	    	</div>
	    	<div class="col-lg-4">
	    		<h4 style="margin-top:5px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available items','d'=>'Modules.Mainmenu.Admin'),$_smarty_tpl ) );?>
</h4>
	    		<?php echo $_smarty_tpl->tpl_vars['choices']->value;?>

	    	</div>

	    </div>
	    <br/>
	    <div class="row">
	    	<div class="col-lg-1"></div>
	    	<div class="col-lg-4"><a href="#" id="removeItem" class="btn btn-default"><i class="icon-arrow-right"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Modules.Mainmenu.Admin'),$_smarty_tpl ) );?>
</a></div>
		<div class="col-lg-4"><a href="#" id="addItem" class="btn btn-default"><i class="icon-arrow-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</a></div>
	    </div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input"} */
}
