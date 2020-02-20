<?php
/* Smarty version 3.1.33, created on 2020-02-04 22:21:38
  from 'module:czinstagramblockviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e39e0628f96a8_57150593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cef5126b3861cd971d9dfeedae392555d83f9d22' => 
    array (
      0 => 'module:czinstagramblockviewstemp',
      1 => 1580851266,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e39e0628f96a8_57150593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11451200455e39e0628e95b0_17105023';
if ($_smarty_tpl->tpl_vars['imagesIns']->value['data'] && count($_smarty_tpl->tpl_vars['imagesIns']->value['data']) > 0) {?>
<div id="czinstagramblock" class="cz_instagramblock clearfix">
	
		<h3 class="instagram-heading products-section-title">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instagram','mod'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		</h3>
		
		<div class="instagramblock">
			<?php $_smarty_tpl->_assignInScope('sliderFor', 6);?> <!-- Define Number of product for SLIDER -->
			<?php $_smarty_tpl->_assignInScope('instagram_picscount', count($_smarty_tpl->tpl_vars['imagesIns']->value['data']));?>
			
			<?php if ($_smarty_tpl->tpl_vars['instagram_picscount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
	
				<ul id="instagram-carousel" class="cz-carousel instagram_list">
			<?php } else { ?>
				<ul id="instagram-grid" class="instagram grid row gridcount">
			<?php }?>
		
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagesIns']->value['data'], 'imagesIn', false, NULL, 'imagesIn', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagesIn']->value) {
?>	
				<li class="<?php if ($_smarty_tpl->tpl_vars['instagram_picscount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>instagram_item col-xs-6 col-sm-4 col-lg-3 col-xl-2<?php }?>">
					<a target="_blank" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imagesIn']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
						<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imagesIn']->value['images']['standard_resolution']['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"  style="float:left;" />
					</a> 
					<div class="insta_caption">
							<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['imagesIn']->value['caption']['text'],50,'...' )), ENT_QUOTES, 'UTF-8');?>

						
					</div>
				</li>		
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>	
			
			 
			<?php if ($_smarty_tpl->tpl_vars['instagram_picscount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
				<div class="customNavigation">
					<a class="btn prev instagram_prev">&nbsp;</a>
					<a class="btn next instagram_next">&nbsp;</a>
				</div>
			<?php }?>	
			 
		</div>		
</div>
<?php }
}
}
