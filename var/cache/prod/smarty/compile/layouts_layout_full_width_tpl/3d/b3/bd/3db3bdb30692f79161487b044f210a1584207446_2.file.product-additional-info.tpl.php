<?php
/* Smarty version 3.1.33, created on 2020-02-24 10:22:39
  from '/home/hidayamoyo/www/themes/TheStyle/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e5395df03bec7_73965902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3db3bdb30692f79161487b044f210a1584207446' => 
    array (
      0 => '/home/hidayamoyo/www/themes/TheStyle/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1582222435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5395df03bec7_73965902 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
