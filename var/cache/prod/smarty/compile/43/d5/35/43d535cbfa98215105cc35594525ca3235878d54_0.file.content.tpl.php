<?php
/* Smarty version 3.1.33, created on 2020-02-04 22:21:31
  from '/home/hidayamoyo/www/admin1019/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e39e05bd12231_16068341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43d535cbfa98215105cc35594525ca3235878d54' => 
    array (
      0 => '/home/hidayamoyo/www/admin1019/themes/default/template/content.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e39e05bd12231_16068341 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
