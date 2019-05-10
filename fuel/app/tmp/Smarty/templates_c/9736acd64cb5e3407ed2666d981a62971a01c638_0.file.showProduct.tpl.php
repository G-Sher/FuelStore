<?php
/* Smarty version 3.1.33, created on 2019-05-09 22:57:06
  from 'C:\wamp64\www\FuelStore\fuel\app\views\admin\showProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd4e88203a6e0_88148976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9736acd64cb5e3407ed2666d981a62971a01c638' => 
    array (
      0 => 'C:\\wamp64\\www\\FuelStore\\fuel\\app\\views\\admin\\showProduct.tpl',
      1 => 1557455974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd4e88203a6e0_88148976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6649907135cd4e88201dc41_56317288', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4529713465cd4e882020e23_43105205', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5436330195cd4e8820379b5_25033647', "localscript");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_6649907135cd4e88201dc41_56317288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_6649907135cd4e88201dc41_56317288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type="text/css">
    table.info td:first-child, table.info th:first-child {
      white-space: nowrap;
      width: 10px;
    }
    table.info th, table.info td {
      line-height: 10px;
    }
    input {
      width: 5em;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_4529713465cd4e882020e23_43105205 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4529713465cd4e882020e23_43105205',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2>Show Product</h2>

  <table class='info table table-sm table-borderless'>
    <tr>
      <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</th>
    </tr>
    <tr>
      <td>product id:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
</td>
    </tr>
    <tr>
      <td>price:</td>
      <td>$<?php echo number_format($_smarty_tpl->tpl_vars['product']->value->price,2);?>
</td>
    </tr>
    <tr>
      <td>category:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['product']->value->category->name;?>
</td>
    </tr>
  </table>
  <table class='table-sm'>
    <tr>
      <td>  
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['asset_img'][0], array( array('refs'=>$_smarty_tpl->tpl_vars['image_src']->value,'attrs'=>array('class'=>'img-fluid')),$_smarty_tpl ) );?>

      </td>
      <td>
		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>"cart/index",'method'=>"get")));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>"cart/index",'method'=>"get")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<button type="submit" name='modify'>Modify Product</button>
		<?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>"cart/index",'method'=>"get")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
      </td>
    </tr>
  </table>
  <p>
    <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
  
  </p>
<?php
}
}
/* {/block "content"} */
/* {block "localscript"} */
class Block_5436330195cd4e8820379b5_25033647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localscript' => 
  array (
    0 => 'Block_5436330195cd4e8820379b5_25033647',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
  type="text/javascript">
    $("button[name='cancel']").click(function () {
      $("input[name='quantity']").prop('disabled', true);
    });
    $("button[name='remove']").click(function () {
      $("input[name='quantity']").prop('disabled', true);
    });
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "localscript"} */
}
