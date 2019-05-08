<?php
/* Smarty version 3.1.33, created on 2019-05-08 16:04:00
  from 'C:\wamp64\www\FuelStore\fuel\app\views\user\details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd3363063a311_64421510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da186132bf5acb9950183a6b37fb0fa9bfd8767f' => 
    array (
      0 => 'C:\\wamp64\\www\\FuelStore\\fuel\\app\\views\\user\\details.tpl',
      1 => 1557345836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd3363063a311_64421510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14538195875cd33630622da8_69855122', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_14538195875cd33630622da8_69855122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14538195875cd33630622da8_69855122',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <h2>Order Details</h2>
  
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
<?php
}
}
/* {/block "content"} */
}
