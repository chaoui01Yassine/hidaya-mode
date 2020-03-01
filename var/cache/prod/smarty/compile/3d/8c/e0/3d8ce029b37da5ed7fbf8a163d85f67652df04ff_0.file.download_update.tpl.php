<?php
/* Smarty version 3.1.33, created on 2020-02-11 13:30:16
  from '/home/hidayamoyo/www/modules/mollie/views/templates/admin/download_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e429e587c2ef2_95121488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d8ce029b37da5ed7fbf8a163d85f67652df04ff' => 
    array (
      0 => '/home/hidayamoyo/www/modules/mollie/views/templates/admin/download_update.tpl',
      1 => 1578170786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e429e587c2ef2_95121488 (Smarty_Internal_Template $_smarty_tpl) {
?><button id="mollie-update" type="button" class="btn btn-primary pull-right"><i class="icon icon-cloud-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update this module','mod'=>'mollie'),$_smarty_tpl ) );?>
</button>
<?php echo '<script'; ?>
 type="text/javascript">
  (function () {
    window.MollieModule = window.MollieModule || {};
    window.MollieModule.urls = window.MollieModule.urls || {};
    window.MollieModule.urls.publicPath = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publicPath']->value,'javascript','UTF-8' ));?>
';
    window.MollieModule.debug = <?php if (Configuration::get(Mollie::MOLLIE_DISPLAY_ERRORS)) {?>true<?php } else { ?>false<?php }?>;
  }());
  (function initMollieUpdater() {
    if (typeof window.MollieModule === 'undefined'
      || typeof window.MollieModule.app === 'undefined'
      || typeof window.MollieModule.app.default === 'undefined'
      || typeof window.MollieModule.app.default.updater === 'undefined'
    ) {
      setTimeout(initMollieUpdater, 100);
    }

    window.MollieModule.app.default.updater().then(function (fn) {
      fn.default(
        document.getElementById('mollie-update'),
        {
          endpoint: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules',true),'javascript','UTF-8' ));?>
&configure=mollie&module_name=mollie&ajax=1',
        },
        {
          error: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
          unableToConnect: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unable to connect','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
          unableToUnzip: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unable to unzip new module','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
          updated: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The module has been updated!','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
        }
      );
    });
  }());
<?php echo '</script'; ?>
>
<?php }
}
