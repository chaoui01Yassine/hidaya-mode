<?php
/* Smarty version 3.1.33, created on 2020-02-11 13:30:17
  from '/home/hidayamoyo/www/modules/mollie/views/templates/admin/_configure/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e429e590d66e1_82829819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ce6c663d2faceeebdf28df12cc731b48c7a8cbc' => 
    array (
      0 => '/home/hidayamoyo/www/modules/mollie/views/templates/admin/_configure/helpers/form/form.tpl',
      1 => 1578170787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e429e590d66e1_82829819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20224741015e429e58f250c9_87558030', "input");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_20224741015e429e58f250c9_87558030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_20224741015e429e58f250c9_87558030',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] === 'mollie-br') {?>
    <br>
  <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] === 'mollie-warning') {?>
    <?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','<')) {?>
      <div class="warn"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['message'],'htmlall','UTF-8' ));?>
</div>
    <?php } else { ?>
      <div class="alert alert-warning"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['message'],'htmlall','UTF-8' ));?>
</div>
    <?php }?>
  <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] === 'mollie-methods') {?>
    <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_container"></div>
    <input type="hidden" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
">
    <?php echo '<script'; ?>
 type="text/javascript">
      (function () {
        window.MollieModule = window.MollieModule || {};
        window.MollieModule.urls = window.MollieModule.urls || {};
        window.MollieModule.urls.publicPath = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publicPath']->value,'javascript','UTF-8' ));?>
';
        window.MollieModule.debug = <?php if (Configuration::get(Mollie::MOLLIE_DISPLAY_ERRORS)) {?>true<?php } else { ?>false<?php }?>;
      }());
      (function initMollieMethodsConfig() {
        if (typeof window.MollieModule === 'undefined'
          || typeof window.MollieModule.app === 'undefined'
          || typeof window.MollieModule.app.default === 'undefined'
          || typeof window.MollieModule.app.default.methodConfig === 'undefined'
        ) {
          return setTimeout(initMollieMethodsConfig, 100);
        }
        window.MollieModule.app.default.methodConfig().then(function (fn) {
          fn.default(
            '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'javascript','UTF-8' ));?>
',
            {
              legacy: <?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','<')) {?>true<?php } else { ?>false<?php }?>,
              ajaxEndpoint: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules',true),'javascript','UTF-8' ));?>
&configure=mollie&ajax=1&action=MollieMethodConfig',
              moduleDir: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'javascript','UTF-8' ));?>
'
            },
            {
              yes: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
              no: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
              notAvailable: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not available','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
              thisPaymentMethodIsNotAvailableOnPaymentsApi: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This payment method is not available on the Payments API. Switch to the Orders API below in order to activate this method.','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
              unableToLoadMethods: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unable to load payment methods','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
              retry: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Retry','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
              error: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
'
            }
          );
        });
      }());
    <?php echo '</script'; ?>
>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['webpack_urls']->value, 'webpack_url');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['webpack_url']->value) {
?>
      <?php echo '<script'; ?>
 type="text/javascript" src=<?php echo $_smarty_tpl->tpl_vars['webpack_url']->value;?>
><?php echo '</script'; ?>
>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] === 'mollie-h1') {?>
    <br>
    <h1><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['title'],'html','UTF-8' ));?>
</h1>
  <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] === 'mollie-h2') {?>
    <br>
    <h2><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['title'],'html','UTF-8' ));?>
</h2>
  <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] === 'mollie-h3') {?>
    <br>
    <h3><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['title'],'html','UTF-8' ));?>
</h3>
  <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'mollie-carriers') {?>
    <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_container"></div>
    <?php echo '<script'; ?>
 type="text/javascript">
      (function () {
        window.MollieModule = window.MollieModule || {};
        window.MollieModule.urls = window.MollieModule.urls || {};
        window.MollieModule.urls.publicPath = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publicPath']->value,'javascript','UTF-8' ));?>
';
        window.MollieModule.debug = <?php if (Configuration::get(Mollie::MOLLIE_DISPLAY_ERRORS)) {?>true<?php } else { ?>false<?php }?>;
      }());
      (function () {
        function initMollieCarriers() {
          var source = document.getElementById('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['depends'],'javascript','UTF-8' ));?>
');
          if (source == null) {
            return setTimeout(initMollieCarriers, 100);
          }

          function initMollieCarrierConfig() {
            if (typeof window.MollieModule === 'undefined'
              || typeof window.MollieModule.app === 'undefined'
              || typeof window.MollieModule.app.default === 'undefined'
              || typeof window.MollieModule.app.default.carrierConfig === 'undefined'
            ) {
              return setTimeout(initMollieCarrierConfig, 100);
            }

            window.MollieModule.app.default.carrierConfig().then(function (fn) {
              fn.default(
                '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'javascript','UTF-8' ));?>
',
                {
                  legacy: <?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','<')) {?>true<?php } else { ?>false<?php }?>,
                  ajaxEndpoint: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules',true),'javascript','UTF-8' ));?>
&configure=mollie&ajax=1&action=MollieCarrierConfig'
                },
                {
                  name: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  urlSource: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'URL Source','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  carrierUrl: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier URL','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  customUrl: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom URL','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  module: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  doNotAutoShip: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not automatically ship','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  noTrackingInformation: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No tracking information','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  hereYouCanConfigureCarriers: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here you can configure what information about the shipment is sent to Mollie','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  youCanUseTheFollowingVariables: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can use the following variables for the Carrier URLs','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  shippingNumber: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping number','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  invoiceCountryCode: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Billing country code','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  invoicePostcode: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Billing postcode','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  deliveryCountryCode: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping country code','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  deliveryPostcode: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping postcode','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  languageCode: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'2-letter language code','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  unableToLoadCarriers: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unable to load carrier list','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  retry: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Retry','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
',
                  error: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error','mod'=>'mollie','js'=>1),$_smarty_tpl ) );?>
'
                }
              );
            });
          }

          function checkInput (e) {
            var container = document.getElementById('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'javascript','UTF-8' ));?>
_container');
            if (e && e.target && e.target.value && e.target.value === '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['depends_value'],'javascript','UTF-8' ));?>
') {
              var input = document.getElementById('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'javascript','UTF-8' ));?>
');
              if (input == null) {
                var newInput = document.createElement('DIV');
                newInput.id = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'javascript','UTF-8' ));?>
';
                container.closest('.form-group').style.display = 'block';
                container.appendChild(newInput);
                initMollieCarrierConfig();
              }
            } else {
              if (window.MollieModule && typeof window.MollieModule.unmountComponentAtNode === 'function') {
                window.MollieModule.unmountComponentAtNode(container);
                window.MollieModule.debug = <?php if (Configuration::get(Mollie::MOLLIE_DISPLAY_ERRORS)) {?>true<?php } else { ?>false<?php }?>;
              }
              <?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','<')) {?>
              container.closest('.form-group').style.display = 'none';
              <?php } else { ?>
              container.closest('.form-group').style.display = 'none';
              <?php }?>
            }
          }

          source.addEventListener('change', checkInput);
          checkInput({
            target: {
              value: document.getElementById('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['depends'],'javascript','UTF-8' ));?>
').value
            }
          });
        }

        initMollieCarriers();
      }());
    <?php echo '</script'; ?>
>
  <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'mollie-carrier-switch') {?>
    <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_info" style="display: none" class="<?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','<')) {?>info<?php } else { ?>alert alert-info<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This option is not required for the currently selected API','mod'=>'mollie'),$_smarty_tpl ) );?>
</div>
    <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_container">
      <?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','<')) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
          <input
            type="radio"
            name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
"
            id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id'],'htmlall','UTF-8' ));?>
"
            value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],'htmlall','UTF-8' ));?>
"
            <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?>checked="checked"<?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled']) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?>disabled="disabled"<?php }?>
          >
          <label class="t" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id'],'htmlall','UTF-8' ));?>
">
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['is_bool']) && $_smarty_tpl->tpl_vars['input']->value['is_bool'] == true) {?>
              <?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?>
                <img
                  src="../img/admin/enabled.gif"
                  alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'htmlall','UTF-8' ));?>
"
                  title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'htmlall','UTF-8' ));?>
"
                />
              <?php } else { ?>
                <img
                  src="../img/admin/disabled.gif"
                  alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'htmlall','UTF-8' ));?>
"
                  title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'htmlall','UTF-8' ));?>
"
                />
              <?php }?>
            <?php } else { ?>
              <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'htmlall','UTF-8' ));?>

            <?php }?>
          </label>
          <?php if (isset($_smarty_tpl->tpl_vars['input']->value['br']) && $_smarty_tpl->tpl_vars['input']->value['br']) {?><br /><?php }?>
          <?php if (isset($_smarty_tpl->tpl_vars['value']->value['p']) && $_smarty_tpl->tpl_vars['value']->value['p']) {?><p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['p'],'htmlall','UTF-8' ));?>
</p><?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php } else { ?>
        <span class="switch prestashop-switch fixed-width-lg">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <input
              type="radio"
              name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?>
              id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_on"<?php } else { ?>id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_off"<?php }?>
              value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],'htmlall','UTF-8' ));?>
"
              <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?>checked="checked"<?php }?>
              <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled']) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?>disabled="disabled"<?php }?>
            />
          <label <?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_on"<?php } else { ?> for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'mollie'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'mollie'),$_smarty_tpl ) );
}?></label>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <a class="slide-button btn"></a>
        </span>
      <?php }?>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
      (function () {
        function initMollieCarriersAuto() {
          var source = document.getElementById('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['depends'],'javascript','UTF-8' ));?>
');
          if (source == null) {
            return setTimeout(initMollieCarriersAuto, 100);
          }

          function checkInput (e) {
            var container = document.getElementById('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'javascript','UTF-8' ));?>
_container');
            if (e && e.target && e.target.value && e.target.value === '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['depends_value'],'javascript','UTF-8' ));?>
') {
              container.closest('.form-group').style.display = 'block';

            } else {
              container.closest('.form-group').style.display = 'none';
            }
          }

          source.addEventListener('change', checkInput);
          checkInput({
            target: {
              value: document.getElementById('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['depends'],'javascript','UTF-8' ));?>
').value
            }
          });
        }

        initMollieCarriersAuto();
      }());
    <?php echo '</script'; ?>
>
  <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'switch' && version_compare(@constant('_PS_VERSION_'),'1.6.0.0','<')) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
      <input
        type="radio"
        name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
"
        id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id'],'htmlall','UTF-8' ));?>
"
        value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],'htmlall','UTF-8' ));?>
"
        <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?>checked="checked"<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled']) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?>disabled="disabled"<?php }?>
      >
      <label class="t" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id'],'htmlall','UTF-8' ));?>
">
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['is_bool']) && $_smarty_tpl->tpl_vars['input']->value['is_bool'] == true) {?>
          <?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?>
            <img
              src="../img/admin/enabled.gif"
              alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'htmlall','UTF-8' ));?>
"
              title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'htmlall','UTF-8' ));?>
" />
          <?php } else { ?>
            <img
              src="../img/admin/disabled.gif"
              alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'htmlall','UTF-8' ));?>
"
              title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'htmlall','UTF-8' ));?>
"
            />
          <?php }?>
        <?php } else { ?>
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'htmlall','UTF-8' ));?>

        <?php }?>
      </label>
      <?php if (isset($_smarty_tpl->tpl_vars['input']->value['br']) && $_smarty_tpl->tpl_vars['input']->value['br']) {?><br /><?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['value']->value['p']) && $_smarty_tpl->tpl_vars['value']->value['p']) {?><p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['p'],'htmlall','UTF-8' ));?>
</p><?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] === 'checkbox') {?>
    <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_info" style="display: none" class="<?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','<')) {?>info<?php } else { ?>alert alert-info<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This option is not required for the currently selected API','mod'=>'mollie'),$_smarty_tpl ) );?>
</div>
    <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_container">
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
      (function () {
        function initMollieCheckboxAuto() {
          var source = document.getElementById('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['depends'],'javascript','UTF-8' ));?>
');
          if (source == null) {
            return setTimeout(initMollieCheckboxAuto, 100);
          }

          function checkInput (e) {
            var container = document.getElementById('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'javascript','UTF-8' ));?>
_container');
            if (e && e.target && e.target.value && e.target.value === '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['depends_value'],'javascript','UTF-8' ));?>
') {
              container.closest('.form-group').style.display = 'block';
            } else {
              container.closest('.form-group').style.display = 'none';
            }
          }

          source.addEventListener('change', checkInput);
          checkInput({
            target: {
              value: document.getElementById('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['depends'],'javascript','UTF-8' ));?>
').value
            }
          });
        }

        initMollieCheckboxAuto();
      }());
    <?php echo '</script'; ?>
>
  <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] === 'mollie-description') {?>
    <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_info" style="display: none" class="<?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','<')) {?>info<?php } else { ?>alert alert-info<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This option is not required for the currently selected API','mod'=>'mollie'),$_smarty_tpl ) );?>
</div>
    <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_container">
      <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['input']) ? $_smarty_tpl->tpl_vars['input']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['type'] = 'text';
$_smarty_tpl->_assignInScope('input', $_tmp_array);?>
      <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
      (function () {
        function initMollieDescriptionAuto() {
          var source = document.getElementById('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['depends'],'javascript','UTF-8' ));?>
');
          if (source == null) {
            return setTimeout(function () {
              initMollieDescriptionAuto.apply(null, arguments);
            }, 100);
          }

          function checkInput (e) {
            var container = document.getElementById('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'javascript','UTF-8' ));?>
_container');
            if (e && e.target && e.target.value && e.target.value === '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['depends_value'],'javascript','UTF-8' ));?>
') {
              container.closest('.form-group').style.display = 'block';
              $(container.closest('.form-group')).prev('.form-group').css( "display", "block" );
            } else {
              container.closest('.form-group').style.display = 'none';
              $(container.closest('.form-group')).prev('.form-group').css( "display", "none" );
            }
          }

          source.addEventListener('change', checkInput);
          checkInput({
            target: {
              value: document.getElementById('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['depends'],'javascript','UTF-8' ));?>
').value
            }
          });
        }

        initMollieDescriptionAuto();
      }());
    <?php echo '</script'; ?>
>
  <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] === 'mollie-switch') {?>
    <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_info" style="display: none" class="<?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','<')) {?>info<?php } else { ?>alert alert-info<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This option is not required for the currently selected API','mod'=>'mollie'),$_smarty_tpl ) );?>
</div>
    <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_container">
      <?php if (version_compare(@constant('_PS_VERSION_'),'1.6.0.0','<')) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
          <input
                  type="radio"
                  name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
"
                  id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id'],'htmlall','UTF-8' ));?>
"
                  value=<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],'htmlall','UTF-8' ));
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?> "1" <?php } else { ?> "0" <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?>checked="checked"<?php }?>
                  <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled']) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?>disabled="disabled"<?php }?>
          >
          <label class="t" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id'],'htmlall','UTF-8' ));?>
">
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['is_bool']) && $_smarty_tpl->tpl_vars['input']->value['is_bool'] == true) {?>
              <?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?>
                <img
                        src="../img/admin/enabled.gif"
                        alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'htmlall','UTF-8' ));?>
"
                        title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'htmlall','UTF-8' ));?>
"
                />
              <?php } else { ?>
                <img
                        src="../img/admin/disabled.gif"
                        alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'htmlall','UTF-8' ));?>
"
                        title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'htmlall','UTF-8' ));?>
"
                />
              <?php }?>
            <?php } else { ?>
              <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['label'],'htmlall','UTF-8' ));?>

            <?php }?>
          </label>
          <?php if (isset($_smarty_tpl->tpl_vars['input']->value['br']) && $_smarty_tpl->tpl_vars['input']->value['br']) {?><br /><?php }?>
          <?php if (isset($_smarty_tpl->tpl_vars['value']->value['p']) && $_smarty_tpl->tpl_vars['value']->value['p']) {?><p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['p'],'htmlall','UTF-8' ));?>
</p><?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php } else { ?>
        <span class="switch prestashop-switch fixed-width-lg">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <input
                    type="radio"
                    name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?>
              id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_on"<?php } else { ?>id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_off"<?php }?>
              value=<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],'htmlall','UTF-8' ));
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 1) {?> "1" <?php } else { ?> "0" <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?>checked="checked"<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled']) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?>disabled="disabled"<?php }?>
            />
          <label <?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_on"<?php } else { ?> for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' ));?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'mollie'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'mollie'),$_smarty_tpl ) );
}?></label>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <a class="slide-button btn"></a>
        </span>
      <?php }?>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
      (function () {
        function initMollieAccount() {
          var source = $('input[name="MOLLIE_ACCOUNT_SWITCH"]');

          function checkInput(e) {
            if ($('input[name="MOLLIE_ACCOUNT_SWITCH"]:checked').val() == '0') {
              e.closest('.form-group').next('.form-group').hide();
              e.closest('.form-group').find('.help-block').show();
            } else {
              e.closest('.form-group').next('.form-group').show();
              e.closest('.form-group').find('.help-block').hide();
            }
          }
          setTimeout(function () {
            checkInput(source);
          }, 100);

          $(source).on('change', function () {
            checkInput(source);
          });
        }

        initMollieAccount();
      }());
    <?php echo '</script'; ?>
>

  <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block "input"} */
}
