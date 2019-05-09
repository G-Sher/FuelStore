<?php
/* Smarty version 3.1.33, created on 2019-05-09 01:18:25
  from 'C:\wamp64\www\FuelStore\fuel\app\views\admin\addProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd3b82154ffe2_42035495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '889910a2c1a84d32d03462824c0013cc0bdf065c' => 
    array (
      0 => 'C:\\wamp64\\www\\FuelStore\\fuel\\app\\views\\admin\\addProduct.tpl',
      1 => 1557375562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd3b82154ffe2_42035495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8869936975cd3b8214d3bf4_27926374', "localstyle");
?>

 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2199860515cd3b8214d6a05_54206717', "content");
?>

 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1140635575cd3b82154e652_16117238', "localscript");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_8869936975cd3b8214d3bf4_27926374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_8869936975cd3b8214d3bf4_27926374',
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
class Block_2199860515cd3b8214d6a05_54206717 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2199860515cd3b8214d6a05_54206717',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\FuelStore\\fuel\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

    <h2>Add Product</h2>
 
    <form action="addProductReentrant.php" method="post">
        <table class="table table-sm table-borderless">
			<tr>
				<td>Name: </td>
				<td>
					<input class="form-control" type="text" name="name" 
						value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
				</td>
			</tr>

			<tr>
				<td>Category: </td>
				<td>
					<select class="form-control" name="category">
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['category']->value,'selected'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl);?>

					</select>
				</td>
			</tr>

			<tr>
				<td>Price ($): </td>
				<td>
					<input class="form-control" type="text" name="price" 
						type="text" required
						 /> 
				</td>
			</tr>

			<tr>
				<td>Description: </td>
				<td>
					<textarea class="form-control" type="text" name="description" required>
					</textarea>
				</td>
			</tr>

            <tr>
				<td>Photo: </td>
				<td>
					<select class="form-control" name="photo_files">
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['photo_files']->value,'selected'=>$_smarty_tpl->tpl_vars['photo_files']->value),$_smarty_tpl);?>

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
 	</form>
 
	<h4 class="message"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</h4>
<?php
}
}
/* {/block "content"} */
/* {block "localscript"} */
class Block_1140635575cd3b82154e652_16117238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localscript' => 
  array (
    0 => 'Block_1140635575cd3b82154e652_16117238',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
    $("button[name='cancel']").click(function(){
      $("input[name='quantity']").prop('disabled',true);
    });
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "localscript"} */
}
