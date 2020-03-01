<?php
/* Smarty version 3.1.33, created on 2020-02-20 19:48:22
  from 'module:czbrandlogoviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4ed476b804d5_43249113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f625cfdc60e6febf7f1ff595b9d1bfb0812f670c' => 
    array (
      0 => 'module:czbrandlogoviewstemplates',
      1 => 1582223870,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4ed476b804d5_43249113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17290335525e4ed476b515f3_00428356';
?>


<section class="brands">
	<div class="container"> 
	<h2 class="h1 products-section-title text-uppercase">
		<?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top Brands','mod'=>'cz_brandlogo'),$_smarty_tpl ) );?>
"><?php }?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top Brands','mod'=>'cz_brandlogo'),$_smarty_tpl ) );?>

		<?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?></a><?php }?>
	</h2>
  
	<div class="products">
    	<?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
     
			<?php $_smarty_tpl->_assignInScope('sliderFor', 5);?> <!-- Define Number of product for SLIDER -->
			<?php $_smarty_tpl->_assignInScope('brandCount', count($_smarty_tpl->tpl_vars['brands']->value));?>
	
			<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['brandCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
				<div class="customNavigation">
					<a class="btn prev brand_prev">&nbsp;</a>
					<a class="btn next brand_next">&nbsp;</a>
				</div>
				
				<ul id="brand-carousel" class="cz-carousel product_list">
			<?php } else { ?>
				<ul id="brand-grid" class="brand_grid product_list grid row gridcount">
			<?php }?>
	 
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand', false, NULL, 'brand_list', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['brandCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-4 col-md-3<?php }?>">
					<div class="brand-image">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getManufacturerImageLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
					</a>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['brandname']->value) {?>
						<span class="h3 product-title" itemprop="name">
							<a class="product-name" itemprop="url"  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
						</span>
					<?php }?>
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	 		
			</ul>
		<?php } else { ?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No brand','mod'=>'cz_brandlogo'),$_smarty_tpl ) );?>
</p>
		<?php }?>
	</div>
	</div>
</section>
<?php }
}
