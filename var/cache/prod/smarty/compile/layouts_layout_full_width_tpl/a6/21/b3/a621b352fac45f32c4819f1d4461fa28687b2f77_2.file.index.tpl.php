<?php
/* Smarty version 3.1.33, created on 2020-02-20 19:48:23
  from '/home/hidayamoyo/www/themes/TheStyle/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4ed47715b818_09609417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a621b352fac45f32c4819f1d4461fa28687b2f77' => 
    array (
      0 => '/home/hidayamoyo/www/themes/TheStyle/templates/index.tpl',
      1 => 1582222443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4ed47715b818_09609417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3575509985e4ed4771491d0_24302081', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_5489258605e4ed477149925_58076429 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_4361562145e4ed47715a132_46838388 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

		<?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_3479487645e4ed477159b83_75037183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4361562145e4ed47715a132_46838388', 'hook_home', $this->tplIndex);
?>

	<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_3575509985e4ed4771491d0_24302081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_3575509985e4ed4771491d0_24302081',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5489258605e4ed477149925_58076429',
  ),
  'page_content' => 
  array (
    0 => 'Block_3479487645e4ed477159b83_75037183',
  ),
  'hook_home' => 
  array (
    0 => 'Block_4361562145e4ed47715a132_46838388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="content" class="page-home">
	<div class="container"> 
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5489258605e4ed477149925_58076429', 'page_content_top', $this->tplIndex);
?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

	</div>
	
	<section class="cz-hometabcontent">
		<div class="container"> 
				<h2 class="h1 products-section-title text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Summer's Best",'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
				<div class="tabs">
					<ul id="home-page-tabs" class="nav nav-tabs clearfix">
						<li class="nav-item">
							<a data-toggle="tab" href="#featureProduct" class="nav-link active" data-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab" href="#newProduct" class="nav-link" data-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab" href="#bestseller" class="nav-link" data-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="featureProduct" class="cz_productinner tab-pane active">	
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCzFeature'),$_smarty_tpl ) );?>

						</div>
						<div id="newProduct" class="cz_productinner tab-pane">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCzNew'),$_smarty_tpl ) );?>

						</div>
						<div id="bestseller" class="cz_productinner tab-pane">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCzBestseller'),$_smarty_tpl ) );?>

						</div>
					</div>					
				</div>
			</div>
	</section>
	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3479487645e4ed477159b83_75037183', 'page_content', $this->tplIndex);
?>

	
</section>
<?php
}
}
/* {/block 'page_content_container'} */
}
