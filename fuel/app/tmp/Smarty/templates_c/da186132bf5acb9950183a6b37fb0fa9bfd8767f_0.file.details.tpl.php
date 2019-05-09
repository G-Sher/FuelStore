<?php
/* Smarty version 3.1.33, created on 2019-05-09 00:12:41
  from 'C:\wamp64\www\FuelStore\fuel\app\views\user\details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd3a8b95d3045_36503018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da186132bf5acb9950183a6b37fb0fa9bfd8767f' => 
    array (
      0 => 'C:\\wamp64\\www\\FuelStore\\fuel\\app\\views\\user\\details.tpl',
      1 => 1557375157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd3a8b95d3045_36503018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5663503555cd3a8b959f269_00634219', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_5663503555cd3a8b959f269_00634219 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5663503555cd3a8b959f269_00634219',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<h2>Order #<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</h2>
	
	<?php if ($_smarty_tpl->tpl_vars['session']->value->get('login') && $_smarty_tpl->tpl_vars['session']->value->get('login')->is_admin) {?>
	<p>User: <?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
</p>
	<p>Email: <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</p>
	<?php }?>
	
	<table class='table table-borderless table-sm'>
		<tr>
			<th>product name</th>
			<th>id</th>
			<th>category</th>
			<th>purchase price</th>
			<th>quantity</th>
			<th>subtotal</th>
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
		<tr>
			<td>
			<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

			</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</td>
			<td>$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['purchase_price'],2);?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</td>
			<td>$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['sub'],2);?>
</td>
		</tr>    
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		
		<tr>
			<th>Total: <b>$<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['total_price']->value);?>
</b></th>
		</tr>
	</table> 
		<?php if ($_smarty_tpl->tpl_vars['session']->value->get('login') && $_smarty_tpl->tpl_vars['session']->value->get('login')->is_admin) {?>
			<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>"admin/process/".((string)$_smarty_tpl->tpl_vars['order']->value->id),'method'=>"get")));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>"admin/process/".((string)$_smarty_tpl->tpl_vars['order']->value->id),'method'=>"get")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<button type="submit">Process</button>
				<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0], array( array('var'=>'set_confirm'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
					<button type='submit' name="cancel">Cancel</button>
					<input type='hidden' name='confirm'/>
					<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0], array( array('var'=>'message'),$_smarty_tpl ) );?>
</h3>
				<?php }?>
			<?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>"admin/process/".((string)$_smarty_tpl->tpl_vars['order']->value->id),'method'=>"get")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }
}
}
/* {/block "content"} */
}
