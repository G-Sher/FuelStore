<?php
/* Smarty version 3.1.33, created on 2019-05-08 13:01:40
  from 'C:\wamp64\www\FuelStore\fuel\app\views\user\myOrders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd30b74607cb4_77424039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7bf647a0ce330d01c0b39860081c5b165bff853' => 
    array (
      0 => 'C:\\wamp64\\www\\FuelStore\\fuel\\app\\views\\user\\myOrders.tpl',
      1 => 1557334898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd30b74607cb4_77424039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8938240245cd30b745f68b4_32618341', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1481608685cd30b745f8ad9_57929081', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_8938240245cd30b745f68b4_32618341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_8938240245cd30b745f68b4_32618341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_1481608685cd30b745f8ad9_57929081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1481608685cd30b745f8ad9_57929081',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <h2>My Orders</h2>
  
  <table class='table table-borderless table-sm'>
    <tr>
      <th>Order ID</th>
      <th>Date/Time
      </th>
    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
      <tr>
        <td>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>"user/orderDetail/".((string)$_smarty_tpl->tpl_vars['order']->value->id),'text'=>((string)$_smarty_tpl->tpl_vars['order']->value->id)),$_smarty_tpl ) );?>

        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['order']->value->created_at;?>
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
