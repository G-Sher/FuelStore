<?php
/* Smarty version 3.1.33, created on 2019-05-09 01:16:43
  from 'C:\wamp64\www\FuelStore\fuel\app\views\links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd3b7bb9229b1_60878084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75794279f9ae3ef7e2af555555867785828081ca' => 
    array (
      0 => 'C:\\wamp64\\www\\FuelStore\\fuel\\app\\views\\links.tpl',
      1 => 1557379003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd3b7bb9229b1_60878084 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['session']->value->get('login') || !$_smarty_tpl->tpl_vars['session']->value->get('login')->is_admin) {?>
  <li class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>"/cart/",'text'=>"Cart"),$_smarty_tpl ) );?>
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['session']->value->get('login') && !$_smarty_tpl->tpl_vars['session']->value->get('login')->is_admin) {?>
  <li class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>'/user','text'=>'My Orders'),$_smarty_tpl ) );?>
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['session']->value->get('login') && $_smarty_tpl->tpl_vars['session']->value->get('login')->is_admin) {?>
  <li class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>'/admin','text'=>'All Orders'),$_smarty_tpl ) );?>
</li>
  <li class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>'/admin/addProduct','text'=>'Add Product'),$_smarty_tpl ) );?>
</li>
  <li class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>'/admin/addCategory','text'=>'Add Category'),$_smarty_tpl ) );?>
</li>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['session']->value->get('login')) {?>
  <li class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>'/authenticate/logout','text'=>'Logout'),$_smarty_tpl ) );?>
</li>
<?php } else { ?>
  <li class="nav-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0], array( array('href'=>'/authenticate/login','text'=>'Login'),$_smarty_tpl ) );?>
</li>
<?php }?>

<?php }
}
