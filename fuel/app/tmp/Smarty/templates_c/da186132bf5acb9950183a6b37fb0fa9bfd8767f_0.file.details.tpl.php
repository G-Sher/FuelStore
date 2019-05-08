<?php
/* Smarty version 3.1.33, created on 2019-05-08 14:08:12
  from 'C:\wamp64\www\FuelStore\fuel\app\views\user\details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd31b0c6e5019_67984495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da186132bf5acb9950183a6b37fb0fa9bfd8767f' => 
    array (
      0 => 'C:\\wamp64\\www\\FuelStore\\fuel\\app\\views\\user\\details.tpl',
      1 => 1557338889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd31b0c6e5019_67984495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17671926185cd31b0c6c4f74_12634803', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_17671926185cd31b0c6c4f74_12634803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17671926185cd31b0c6c4f74_12634803',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <h2>My Cart</h2>
  
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selections']->value, 'selection');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['selection']->value) {
?>
      <tr>
        <td>
          <?php echo $_smarty_tpl->tpl_vars['selection']->value->product->name;?>

        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['selection']->value->product->id;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['selection']->value->product->category->name;?>
</td>
        <td>$<?php echo number_format($_smarty_tpl->tpl_vars['selection']->value->purchase_price,2);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['selection']->value->quantity;?>
</td>
      </tr>    
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <tr>
    </tr>
  </table> 

  <?php if ($_smarty_tpl->tpl_vars['session']->value->get('login') && $_smarty_tpl->tpl_vars['session']->value->get('cart')) {?>
    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>'/user/makeOrder','method'=>"GET")));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/user/makeOrder','method'=>"GET")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
      <button type='submit'>Make an Order from Cart</button>
    <?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/user/makeOrder','method'=>"GET")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
  <?php }?>

<?php
}
}
/* {/block "content"} */
}
