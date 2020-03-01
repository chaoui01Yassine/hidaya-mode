<?php
/* Smarty version 3.1.33, created on 2020-02-11 13:30:10
  from '/home/hidayamoyo/www/admin1019/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e429e52105175_48488163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78980ae467a40df3d7107932778ea6458520b3bb' => 
    array (
      0 => '/home/hidayamoyo/www/admin1019/themes/new-theme/template/content.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e429e52105175_48488163 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
