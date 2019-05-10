<?php
/* Smarty version 3.1.33, created on 2019-05-10 01:13:19
  from 'C:\wamp64\www\FuelStore\fuel\app\views\admin\addCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd5086f5612a4_82253450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8c36e5905022c89d50025c955f9d1f80c4aa2d5' => 
    array (
      0 => 'C:\\wamp64\\www\\FuelStore\\fuel\\app\\views\\admin\\addCategory.tpl',
      1 => 1557465197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd5086f5612a4_82253450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4885346655cd5086f54ddf8_44266643', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17118203205cd5086f550054_25235466', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_4885346655cd5086f54ddf8_44266643 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_4885346655cd5086f54ddf8_44266643',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_17118203205cd5086f550054_25235466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17118203205cd5086f550054_25235466',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Add Category</h2>

<p></p>

<h5>Current Categories:</h5>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'categories');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['categories']->value;?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>'/admin/addCatReenter/','method'=>"GET")));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/admin/addCatReenter/','method'=>"GET")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <label>New Category:</label>
    <input class="form-control" type="text" name="newCat" value='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? '' : $tmp);?>
'/>
    <button type= "submit" name="add">Add Category</button>
    <button type= "submit" name="cancel">Cancel</button>]
<?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/admin/addCatReenter/','method'=>"GET")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block "content"} */
}
