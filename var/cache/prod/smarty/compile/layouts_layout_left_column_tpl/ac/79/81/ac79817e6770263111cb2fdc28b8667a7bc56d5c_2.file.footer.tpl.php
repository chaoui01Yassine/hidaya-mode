<?php
/* Smarty version 3.1.33, created on 2020-02-20 19:48:34
  from '/home/hidayamoyo/www/themes/TheStyle/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4ed4829710b5_53324911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac79817e6770263111cb2fdc28b8667a7bc56d5c' => 
    array (
      0 => '/home/hidayamoyo/www/themes/TheStyle/templates/_partials/footer.tpl',
      1 => 1582222444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4ed4829710b5_53324911 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="footer-before">
	<div class="container">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12417853205e4ed482968ae5_87940903', 'hook_footer_before');
?>

	</div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row footer">
      	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20914945015e4ed48296a748_84576190', 'hook_footer');
?>

    </div>      
    </div>
  </div>
</div>

<div class="footer-after">
  <div class="container">
	<div class="copyright">
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3590874685e4ed48296bfc1_65774054', 'copyright_link');
?>

	</div>
	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16862538545e4ed48296fce4_88969943', 'hook_footer_after');
?>

  </div>
</div>

<a class="top_button" href="#" style="">&nbsp;</a>
<?php }
/* {block 'hook_footer_before'} */
class Block_12417853205e4ed482968ae5_87940903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_12417853205e4ed482968ae5_87940903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_20914945015e4ed48296a748_84576190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_20914945015e4ed48296a748_84576190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'hook_footer'} */
/* {block 'copyright_link'} */
class Block_3590874685e4ed48296bfc1_65774054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_3590874685e4ed48296bfc1_65774054',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <a class="_blank" href="http://www.prestashop.com" target="_blank">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		  </a>
	  <?php
}
}
/* {/block 'copyright_link'} */
/* {block 'hook_footer_after'} */
class Block_16862538545e4ed48296fce4_88969943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_16862538545e4ed48296fce4_88969943',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_after'} */
}
