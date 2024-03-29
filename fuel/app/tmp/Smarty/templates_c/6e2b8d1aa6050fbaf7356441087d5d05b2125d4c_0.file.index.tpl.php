<?php
/* Smarty version 3.1.33, created on 2019-05-09 23:27:03
  from 'C:\wamp64\www\FuelStore\fuel\app\views\cart\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd4ef875266c2_72000617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e2b8d1aa6050fbaf7356441087d5d05b2125d4c' => 
    array (
      0 => 'C:\\wamp64\\www\\FuelStore\\fuel\\app\\views\\cart\\index.tpl',
      1 => 1557458820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd4ef875266c2_72000617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6435248825cd4ef874fb045_23619922', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_6435248825cd4ef874fb045_23619922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6435248825cd4ef874fb045_23619922',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <h2>My Cart</h2>
  
  <table class='table table-borderless table-sm'>
    <tr>
      <th>name</th>
      <th>id</th>
      <th>category</th>
      <th>price</th>
      <th>quantity</th>
      <th>subtotal</th>
    </tr>
<?php if ($_smarty_tpl->tpl_vars['cart_info']->value != 0) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_info']->value, 'data', false, 'product_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_id']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
      <tr>
        <td>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>"cart/show/".((string)$_smarty_tpl->tpl_vars['product_id']->value),'text'=>((string)$_smarty_tpl->tpl_vars['data']->value['name'])),$_smarty_tpl ) );?>

        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['category'];?>
</td>
        <td>$<?php echo number_format($_smarty_tpl->tpl_vars['data']->value['price'],2);?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value['quantity'];?>
</td>
        <td>$<?php echo number_format($_smarty_tpl->tpl_vars['data']->value['sub'],2);?>
</td>
      </tr>    
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
    <tr>
      <th>Total: <b>$<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['total_price']->value);?>
</b></th>
    </tr>
  </table> 

  <?php if ($_smarty_tpl->tpl_vars['session']->value->get('login') && $_smarty_tpl->tpl_vars['session']->value->get('cart')) {?>
    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>'/cart/makeOrder','method'=>"GET")));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/cart/makeOrder','method'=>"GET")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
      <button type='submit'>Make an Order from Cart</button>
    <?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'/cart/makeOrder','method'=>"GET")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
  <?php }?>

<?php
}
}
/* {/block "content"} */
}
