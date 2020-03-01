<?php
/* Smarty version 3.1.33, created on 2020-02-11 20:01:23
  from '/home/hidayamoyo/www/themes/TheStyle/templates/_partials/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e42fa0382a4b3_90824459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '821f38345fd09091a4efabf9489bafcd8d993421' => 
    array (
      0 => '/home/hidayamoyo/www/themes/TheStyle/templates/_partials/pagination.tpl',
      1 => 1580851266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e42fa0382a4b3_90824459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav class="pagination">
  <div class="col-md-4">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13547912215e42fa03814f15_04948462', 'pagination_summary');
?>

  </div>
  <div class="col-md-8">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11433503185e42fa038195e6_93105148', 'pagination_page_list');
?>

  </div>
</nav>
<?php }
/* {block 'pagination_summary'} */
class Block_13547912215e42fa03814f15_04948462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_summary' => 
  array (
    0 => 'Block_13547912215e42fa03814f15_04948462',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'pagination_summary'} */
/* {block 'pagination_page_list'} */
class Block_11433503185e42fa038195e6_93105148 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_11433503185e42fa038195e6_93105148',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<ul class="page-list clearfix text-xs-right">
		  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
			<li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current" <?php }?>>
			  <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>
				<span class="spacer">&hellip;</span>
			  <?php } else { ?>
				<a
				  rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>"
				  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
				  class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
				>
				  <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>
					<i class="fa fa-long-arrow-left"></i>
				  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>
					<i class="fa fa-long-arrow-right"></i>
				  <?php } else { ?>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

				  <?php }?>
				</a>
			  <?php }?>
			</li>
		  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php
}
}
/* {/block 'pagination_page_list'} */
}
