<?php
/* Smarty version 3.1.33, created on 2020-02-22 22:51:16
  from '/home/hidayamoyo/www/themes/TheStyle/templates/catalog/_partials/product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e51a2546d4191_79146481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4806c86790135105905534fdcf5101424512231b' => 
    array (
      0 => '/home/hidayamoyo/www/themes/TheStyle/templates/catalog/_partials/product-cover-thumbnails.tpl',
      1 => 1582222435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e51a2546d4191_79146481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="images-container">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1324270205e51a2546b9f03_44965167', 'product_cover');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18182593615e51a2546bceb0_57767560', 'product_images');
?>

</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );
}
/* {block 'product_cover'} */
class Block_1324270205e51a2546b9f03_44965167 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_1324270205e51a2546b9f03_44965167',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-cover">
      <a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
'>
	  <img class="js-qv-product-cover" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;" itemprop="image">
      </a>
	  <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
        <i class="fa fa-arrows-alt zoom-in"></i>
      </div>
    </div>
  <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_18182593615e51a2546bceb0_57767560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_18182593615e51a2546bceb0_57767560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_assignInScope('sliderFor', 5);?> <!-- Define Number of product for SLIDER -->
	<?php $_smarty_tpl->_assignInScope('thumbCount', count($_smarty_tpl->tpl_vars['product']->value['images']));?>
	
	<div class="js-qv-mask mask <?php if ($_smarty_tpl->tpl_vars['thumbCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>additional_slider<?php } else { ?>additional_grid<?php }?>">		
		<?php if ($_smarty_tpl->tpl_vars['thumbCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<ul class="cz-carousel product_list additional-carousel">
		<?php } else { ?>
			<ul class="product_list grid row gridcount">
		<?php }?>
	
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
         <li class="thumb-container <?php if ($_smarty_tpl->tpl_vars['thumbCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-6 col-md-4 col-lg-3<?php }?>">
            <img
              class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
              data-image-medium-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
              title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
              width="95"
              itemprop="image"
            >
          </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
	  
	  <?php if ($_smarty_tpl->tpl_vars['thumbCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
		<div class="customNavigation">
			<a class="btn prev additional_prev">&nbsp;</a>
			<a class="btn next additional_next">&nbsp;</a>
		</div>
	  <?php }?>
	  
    </div>
  <?php
}
}
/* {/block 'product_images'} */
}
