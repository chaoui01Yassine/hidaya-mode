<?php
/* Smarty version 3.1.33, created on 2020-02-04 22:21:39
  from 'module:czbestsellersviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e39e063108399_45127817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd89581172ac1f63f4cd92d7aaff3d39d43927f12' => 
    array (
      0 => 'module:czbestsellersviewstemplat',
      1 => 1580851266,
      2 => 'module',
    ),
    '35a56ba75fb36e5d28c663fb1ae61be649bda06b' => 
    array (
      0 => '/home/hidayamoyo/www/themes/TheStyle/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1580851266,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5e39e063108399_45127817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<section class="bestseller-products">
	<h2 class="h1 products-section-title text-uppercase">
		Meilleures ventes
	</h2>
	<div class="products">	
		 <!-- Define Number of product for SLIDER -->
					<ul id="bestseller-grid" class="bestseller_grid product_list grid row gridcount">
				
					<li class="product_item col-xs-12 col-sm-6 col-md-4 col-lg-3">
				
<div class="product-miniature js-product-miniature" data-id-product="31" data-id-product-attribute="84" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    
      <a href="https://hidaya-mode.com/index.php?id_product=31&amp;id_product_attribute=84&amp;rewrite=robe-a-carreau&amp;controller=product#/30-taille-38" class="thumbnail product-thumbnail">
        <img
          src = "https://hidaya-mode.com/img/p/3/9/39-home_default.jpg"
            alt = "ROBE NOIR"
          data-full-size-image-url = "https://hidaya-mode.com/img/p/3/9/39-large_default.jpg"
        >
		
      </a>
    
	
	<a href="#" class="quick-view" data-link-action="quickview">
		<i class="material-icons search">&#xE417;</i> Aperçu rapide
	</a>
		
	
	  <ul class="product-flags">
			  </ul>
	
	
 </div>

    <div class="product-description">
      
			
		 
	  
	  
        <span class="h3 product-title" itemprop="name"><a href="https://hidaya-mode.com/index.php?id_product=31&amp;id_product_attribute=84&amp;rewrite=robe-a-carreau&amp;controller=product#/30-taille-38">ROBE NOIR</a></span>
      

      
                  <div class="product-price-and-shipping">
            
            

            <span itemprop="price" class="price">35,00 €</span>

            

            
          </div>
              
	  
		 
							<div class="product-actions">
					  <form action="https://hidaya-mode.com/index.php?controller=cart" method="post" class="add-to-cart-or-refresh">
						<input type="hidden" name="token" value="b1b4b7acae9994b33e69f9e077ad84cc">
						<input type="hidden" name="id_product" value="31" class="product_page_product_id">
						<input type="hidden" name="id_customization" value="0" class="product_customization_id">
						<button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
							Ajouter au panier
						</button>
					</form>
				</div>
					 
		
		 
		<div class="highlighted-informations no-variants hidden-sm-down">
	
		  
					  
		</div>
	</div>
</div>
			</li>
				</ul>
		
				
				<div class="view_more">
			<a class="all-product-link" href="https://hidaya-mode.com/index.php?controller=best-sales">
				Tous les best-sellers
			</a>
		</div>
			</div>
</section>
<?php }
}
