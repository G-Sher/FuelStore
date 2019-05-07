<?php
/* Smarty version 3.1.33, created on 2019-05-06 00:42:51
  from 'C:\wamp64\www\FuelStore\fuel\app\views\home\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ccfbb4b6f9088_45076416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92849640459b0e0b497ed99406d6fadf2fafb3c0' => 
    array (
      0 => 'C:\\wamp64\\www\\FuelStore\\fuel\\app\\views\\home\\index.tpl',
      1 => 1557117659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ccfbb4b6f9088_45076416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19633218795ccfbb4b6c9521_26248809', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7469640945ccfbb4b6cc475_58857734', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_19633218795ccfbb4b6c9521_26248809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_19633218795ccfbb4b6c9521_26248809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type="text/css">

  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_7469640945ccfbb4b6cc475_58857734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7469640945ccfbb4b6cc475_58857734',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\FuelStore\\fuel\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>


  <h2>Products</h2>
  
  <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('method'=>'GET','action'=>'home/showCategory')));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('method'=>'GET','action'=>'home/showCategory')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
  <button type="submit">Choose category:</button>
  <select name='category_id'>
    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['category_id']->value),$_smarty_tpl);?>

  </select>
  <?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('method'=>'GET','action'=>'home/showCategory')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
  <p></p>

  <table class="table table-hover table-sm">
    <tr>
      <th>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>"/home/setOrder/name",'text'=>"name"),$_smarty_tpl ) );?>

      </th>
      <th class="price">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>"/home/setOrder/price",'text'=>"price"),$_smarty_tpl ) );?>

      </th>
      <th>category</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
      <tr>
        <td>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>"/cart/show/".((string)$_smarty_tpl->tpl_vars['product']->value->id),'text'=>((string)$_smarty_tpl->tpl_vars['product']->value->name)),$_smarty_tpl ) );?>
            
        </td>
        <td class="price">$<?php echo number_format($_smarty_tpl->tpl_vars['product']->value->price,2);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->category->name;?>
</td>
      </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table>

<?php
}
}
/* {/block "content"} */
}
