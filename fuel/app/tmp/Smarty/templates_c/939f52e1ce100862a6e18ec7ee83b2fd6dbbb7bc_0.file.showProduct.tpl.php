<?php
/* Smarty version 3.1.33, created on 2019-05-07 21:18:31
  from 'C:\wamp64\www\FuelStore\fuel\app\views\home\showProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd22e678083c0_17178250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '939f52e1ce100862a6e18ec7ee83b2fd6dbbb7bc' => 
    array (
      0 => 'C:\\wamp64\\www\\FuelStore\\fuel\\app\\views\\home\\showProduct.tpl',
      1 => 1557278309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd22e678083c0_17178250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15487520205cd22e677eb7e8_57868908', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2377438525cd22e677ee779_03403124', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17429070925cd22e678065f8_99570016', "localscript");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_15487520205cd22e677eb7e8_57868908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_15487520205cd22e677eb7e8_57868908',
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
class Block_2377438525cd22e677ee779_03403124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2377438525cd22e677ee779_03403124',
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
          <b>Quantity:</b>
          <input name="quantity" type="number" min="1"  value= "<?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>
" required />
          <p></p>
          <button type="submit" name='set'>Set Quantity</button>
          <button type="submit" name='cancel'>Cancel</button>
          <button type="submit" name='remove'>Remove From Cart</button>
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
class Block_17429070925cd22e678065f8_99570016 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localscript' => 
  array (
    0 => 'Block_17429070925cd22e678065f8_99570016',
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
