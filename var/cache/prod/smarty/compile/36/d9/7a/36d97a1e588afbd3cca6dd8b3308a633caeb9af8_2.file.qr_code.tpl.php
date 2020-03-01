<?php
/* Smarty version 3.1.33, created on 2020-02-10 22:07:44
  from '/home/hidayamoyo/www/modules/mollie/views/templates/hook/qr_code.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e41c6205e1cb3_09349552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36d97a1e588afbd3cca6dd8b3308a633caeb9af8' => 
    array (
      0 => '/home/hidayamoyo/www/modules/mollie/views/templates/hook/qr_code.tpl',
      1 => 1578170787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e41c6205e1cb3_09349552 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get(Mollie::MOLLIE_QRENABLED) && Mollie::selectedApi() === Mollie::MOLLIE_PAYMENTS_API) {?>
  <div id="mollie-qr-code"></div>
  <?php echo '<script'; ?>
 type="text/javascript">
    (function () {
      window.MollieModule = window.MollieModule || { };
      window.MollieModule.urls = window.MollieModule.urls || { };
      window.MollieModule.urls.publicPath = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publicPath']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
      window.MollieModule.urls.qrCodeNew = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('mollie','qrcode',array('ajax'=>'1','action'=>'qrCodeNew','rand'=>time()),Tools::usingSecureMode()),'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
      window.MollieModule.urls.cartAmount = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('mollie','qrcode',array('ajax'=>'1','action'=>'cartAmount','rand'=>time()),Tools::usingSecureMode()),'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
      window.MollieModule.urls.qrCodeStatus = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('mollie','qrcode',array('ajax'=>'1','action'=>'qrCodeStatus','rand'=>time()),Tools::usingSecureMode()),'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
    }());
    (function initQrCode() {
      if (typeof window.MollieModule === 'undefined'
        || typeof window.MollieModule.app === 'undefined'
        || typeof window.MollieModule.app.default === 'undefined'
        || typeof window.MollieModule.app.default.qrCode === 'undefined'
      ) {
        return setTimeout(initQrCode, 100);
      }

      window.MollieModule.app.qrCode().then(function (fn) {
        fn.default(
          document.getElementById('mollie-qr-code'),
          '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or scan the iDEAL QR code','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
          false
        );
      });
    }());
  <?php echo '</script'; ?>
>
<?php }
}
}
