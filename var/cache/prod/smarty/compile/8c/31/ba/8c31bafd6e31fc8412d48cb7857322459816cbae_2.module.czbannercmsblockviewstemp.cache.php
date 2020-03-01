<?php
/* Smarty version 3.1.33, created on 2020-02-20 19:48:23
  from 'module:czbannercmsblockviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4ed477566139_29217807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c31bafd6e31fc8412d48cb7857322459816cbae' => 
    array (
      0 => 'module:czbannercmsblockviewstemp',
      1 => 1582223865,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4ed477566139_29217807 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2810709035e4ed477564bd1_82274150';
?>

<div id="czbannercmsblock" class="block czbanners"> 
	<div class="czbanner_container">
		<?php echo $_smarty_tpl->tpl_vars['czbannercmsblockinfos']->value['text'];?>

	</div> 
</div>
<?php }
}
