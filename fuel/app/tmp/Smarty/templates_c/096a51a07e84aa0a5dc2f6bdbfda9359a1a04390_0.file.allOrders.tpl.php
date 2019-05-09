<?php
/* Smarty version 3.1.33, created on 2019-05-08 22:41:52
  from 'C:\wamp64\www\FuelStore\fuel\app\views\admin\allOrders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd39370a0dad4_48452871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '096a51a07e84aa0a5dc2f6bdbfda9359a1a04390' => 
    array (
      0 => 'C:\\wamp64\\www\\FuelStore\\fuel\\app\\views\\admin\\allOrders.tpl',
      1 => 1557369706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd39370a0dad4_48452871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2217140175cd393709f71d4_05948421', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8502196315cd393709f9633_40346647', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_2217140175cd393709f71d4_05948421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_2217140175cd393709f71d4_05948421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_8502196315cd393709f9633_40346647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8502196315cd393709f9633_40346647',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <h2>All Orders</h2>
  
  <table class='table table-borderless table-sm'>
    <tr>
      <th>Order ID</th>
      <th>User</th>
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
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>"admin/adminDetail/".((string)$_smarty_tpl->tpl_vars['order']->value->id),'text'=>((string)$_smarty_tpl->tpl_vars['order']->value->id)),$_smarty_tpl ) );?>

        </td>
        <td></td>
        <td><?php echo $_smarty_tpl->tpl_vars['order']->value->created_at;?>
</td>
      </tr>    
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table> 

	<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0], array( array('var'=>'confirm'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0], array( array('var'=>'confirm'),$_smarty_tpl ) );?>
</h3>
	<?php }
}
}
/* {/block "content"} */
}
