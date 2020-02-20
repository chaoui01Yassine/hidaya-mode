<?php
/* Smarty version 3.1.33, created on 2020-02-07 01:25:24
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3cae74b00583_82436150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '628089b29e2c5fb69de1c5694b088f988b830ba7' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1580851267,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3cae74b00583_82436150 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="contact-rich" class="contact-rich block">
	<h4 class="block_title hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
	<h4 class="block_title hidden-lg-up" data-target="#contact_rich_toggle" data-toggle="collapse">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		<span class="pull-xs-right">
		  <span class="navbar-toggler collapse-icons">
			<i class="fa-icon add"></i>
			<i class="fa-icon remove"></i>
		  </span>
		</span>
	</h4>
  <div id="contact_rich_toggle" class="block_content collapse">
	  <div class="">
		<div class="icon"><i class="fa fa-map-marker"></i></div>
		<div class="data"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
</div>
	  </div>
	  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
		<hr/>
		<div class="">
		  <div class="icon"><i class="fa fa-phone"></i></div>
		  <div class="data">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
<br/>
			<a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a>
		   </div>
		</div>
	  <?php }?>
	  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
		<hr/>
		<div class="">
		  <div class="icon"><i class="fa fa-fax"></i></div>
		  <div class="data">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
<br/>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['fax'], ENT_QUOTES, 'UTF-8');?>

		  </div>
		</div>
	  <?php }?>
	  <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
		<hr/>
		<div class="">
		  <div class="icon"><i class="fa fa-envelope-o"></i></div>
		  <div class="data email">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email us:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
<br/>
		   	<a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
		   </div>		   
		</div>
	  <?php }?>
	</div>
</div>
<?php }
}
