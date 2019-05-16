<?php
/* Smarty version 3.1.33, created on 2019-05-10 20:01:58
  from 'C:\wamp64\www\FuelStore\fuel\app\views\admin\addProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd610f600c485_06740004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '889910a2c1a84d32d03462824c0013cc0bdf065c' => 
    array (
      0 => 'C:\\wamp64\\www\\FuelStore\\fuel\\app\\views\\admin\\addProduct.tpl',
      1 => 1557532915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd610f600c485_06740004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13804116135cd610f5f25264_58514581', "localstyle");
?>

 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18481367305cd610f5f28c39_66727199', "content");
?>

 
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_13804116135cd610f5f25264_58514581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_13804116135cd610f5f25264_58514581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type="text/css">
    td:first-child, th:first-child {
      white-space: nowrap;
      width: 10px;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_18481367305cd610f5f28c39_66727199 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18481367305cd610f5f28c39_66727199',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\FuelStore\\fuel\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

    <h2>Add Product</h2>
 
    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>'/add/addBookReentrant/')));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/add/addBookReentrant/')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <table class="table table-sm table-borderless">
			<tr>
				<td>Name: </td>
				<td>
					<input class="form-control" type="text" name="name" 
						value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? '' : $tmp);?>
"  />
					<span class="error"><?php echo $_smarty_tpl->tpl_vars['validator']->value->error_message('name');?>
</span>
				</td>
			</tr>

			<tr>
				<td>Category: </td>
				
					<td>
						
						<select class="form-control" name="category">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
							<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['category']->value)===null||$tmp==='' ? '' : $tmp);
$_prefixVariable1 = ob_get_clean();
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['category']->value,'selected'=>$_prefixVariable1),$_smarty_tpl);?>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
						
					</td>	
				
			</tr>

			<tr>
				<td>Price : </td>
				<td>
					<input class="form-control" type="text" name="price" 
						value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['price']->value)===null||$tmp==='' ? '' : $tmp);?>
"  />
					<span class="error"><?php echo $_smarty_tpl->tpl_vars['validator']->value->error_message('price');?>
</span>
				</td>
			</tr>

			<tr>
				<td>Description: </td>
				<td>
					<textarea class="form-control" type="text" name="description" value= "<?php echo (($tmp = @$_smarty_tpl->tpl_vars['description']->value)===null||$tmp==='' ? '' : $tmp);?>
" required>
					</textarea>
				</td>
			</tr>

            <tr>
				<td>Photo: </td>
				<td>
					<select class="form-control" name="photo_file">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photo_files']->value, 'photo_file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo_file']->value) {
?>
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['photo_file']->value,'selected'=>$_smarty_tpl->tpl_vars['photo_file']->value),$_smarty_tpl);?>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</td>
			</tr>

			<tr>
				<td></td>
				<td>
					<button type="submit" name="doit">Add</button>
					<button type="submit" name="cancel">Cancel</button>
				</td>
			</tr>

		</table>
 	<?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/add/addBookReentrant/')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 
	<h4 class="message"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</h4>
	
	<?php
}
}
/* {/block "content"} */
}
