<?php
/* Smarty version 3.1.33, created on 2020-02-04 22:24:43
  from '/home/hidayamoyo/www/modules/mollie/views/templates/hook/ideal_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e39e11babfa07_93158584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '881e40d6accb5cedf044b6d2fbc99e2aa158bb2f' => 
    array (
      0 => '/home/hidayamoyo/www/modules/mollie/views/templates/hook/ideal_dropdown.tpl',
      1 => 1578170787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./qr_code.tpl' => 1,
  ),
),false)) {
function content_5e39e11babfa07_93158584 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dropdown" style="margin-bottom: 20px">
  <button
    class="btn btn-secondary dropdown-toggle"
    type="button"
    data-toggle="dropdown"
    aria-haspopup="true"
    aria-expanded="false"
    id="mollie-issuer-dropdown-button"
  >
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a bank','mod'=>'mollie'),$_smarty_tpl ) );?>

  </button>
  <div class="dropdown-menu">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['idealIssuers']->value, 'issuer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['issuer']->value) {
?>
      <a class="dropdown-item mollie-issuer-item" data-ideal-issuer="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issuer']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" style="cursor: pointer">
        <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issuer']->value['image']['size2x'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" style="height: 24px; width: auto;"> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issuer']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

      </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
  (function () {
    var hiddenInput;

    function initBanks() {
      if (document.querySelector('input[name="issuer"]') == null) {
        setTimeout(initBanks, 100);
        return;
      }

      hiddenInput = document.querySelector('input[name="issuer"]');
      [].slice.call(document.querySelectorAll('.mollie-issuer-item')).forEach(function (item) {
        item.addEventListener('click', function (event) {
          var elem = event.target;
          if (elem.nodeName === 'IMG') {
            elem = elem.parentNode;
          }
          hiddenInput.value = elem.getAttribute('data-ideal-issuer');
          var dropdownButton = document.getElementById('mollie-issuer-dropdown-button');
          if (dropdownButton) {
            dropdownButton.innerText = elem.innerText;
          }
        });
      });
    }

    initBanks();
  }());
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:./qr_code.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
