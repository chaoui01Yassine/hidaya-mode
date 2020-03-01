<?php
/* Smarty version 3.1.33, created on 2020-02-20 19:48:23
  from '/home/hidayamoyo/www/modules/cz_imagehover/views/templates/hook/cz_imagehover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4ed4779ff581_34865425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83b67699518b552357610d968786c0b8397115e4' => 
    array (
      0 => '/home/hidayamoyo/www/modules/cz_imagehover/views/templates/hook/cz_imagehover.tpl',
      1 => 1582223874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4ed4779ff581_34865425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9178292225e4ed4779fd8b3_72693347';
?>

<?php if ($_smarty_tpl->tpl_vars['home_image']->value != '') {?>
	<img class="fliper_image img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['home_image']->value, ENT_QUOTES, 'UTF-8');?>
" data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['large_image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="" />
<?php }
}
}
