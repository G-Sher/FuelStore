<?php
/* Smarty version 3.1.33, created on 2019-05-10 23:08:36
  from 'C:\wamp64\www\FuelStore\fuel\app\views\home\createAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd63cb49cbc01_65991894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '763092366d49f4d3fe7fdf876686e0b4722efd22' => 
    array (
      0 => 'C:\\wamp64\\www\\FuelStore\\fuel\\app\\views\\home\\createAccount.tpl',
      1 => 1557544114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd63cb49cbc01_65991894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2750863565cd63cb49b7f15_98015430', "localstyle");
?>

 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5337896975cd63cb49ba738_09809093', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_2750863565cd63cb49b7f15_98015430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_2750863565cd63cb49b7f15_98015430',
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
class Block_5337896975cd63cb49ba738_09809093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5337896975cd63cb49ba738_09809093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Add Product</h2>
 
    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>'/home/accountCreate/')));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/home/accountCreate/')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <table class="table table-sm table-borderless">
			<tr>
				<td>Username: </td>
				<td>
					<input class="form-control" type="text" name="name" 
						value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? '' : $tmp);?>
"  />
				</td>
			</tr>

			

			<tr>
				<td>Email: </td>
				<td>
					<input class="form-control" type="text" name="price" 
						value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['price']->value)===null||$tmp==='' ? '' : $tmp);?>
"  />
				</td>
			</tr>

			<tr>
				<td>Password: </td>
				<td>
					<input class="form-control" type="text" name="description" value= "<?php echo (($tmp = @$_smarty_tpl->tpl_vars['description']->value)===null||$tmp==='' ? '' : $tmp);?>
" required>
					</input>
				</td>
			</tr>
			<tr>
				<td>Confirm Password: </td>
				<td>
					<input class="form-control" type="text" name="confirm" 
						value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? '' : $tmp);?>
"  />
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
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/home/accountCreate/')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	
<?php
}
}
/* {/block "content"} */
}
