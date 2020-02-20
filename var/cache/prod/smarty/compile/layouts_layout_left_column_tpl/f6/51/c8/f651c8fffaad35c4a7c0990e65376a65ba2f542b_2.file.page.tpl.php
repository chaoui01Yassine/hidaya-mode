<?php
/* Smarty version 3.1.33, created on 2020-02-04 23:04:00
  from '/home/hidayamoyo/www/themes/TheStyle/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e39ea50e55688_74840450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f651c8fffaad35c4a7c0990e65376a65ba2f542b' => 
    array (
      0 => '/home/hidayamoyo/www/themes/TheStyle/templates/page.tpl',
      1 => 1580851266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e39ea50e55688_74840450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7705634905e39ea50e4f471_46372085', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_10087887855e39ea50e502f4_54165808 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_17459252595e39ea50e4fa54_99614210 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10087887855e39ea50e502f4_54165808', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_7200537095e39ea50e52f05_26959064 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_19311972695e39ea50e53707_67423317 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7202768305e39ea50e52937_61623249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7200537095e39ea50e52f05_26959064', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19311972695e39ea50e53707_67423317', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_14011098495e39ea50e54886_62215924 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_20006805645e39ea50e54301_61051468 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14011098495e39ea50e54886_62215924', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_7705634905e39ea50e4f471_46372085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7705634905e39ea50e4f471_46372085',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_17459252595e39ea50e4fa54_99614210',
  ),
  'page_title' => 
  array (
    0 => 'Block_10087887855e39ea50e502f4_54165808',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_7202768305e39ea50e52937_61623249',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7200537095e39ea50e52f05_26959064',
  ),
  'page_content' => 
  array (
    0 => 'Block_19311972695e39ea50e53707_67423317',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_20006805645e39ea50e54301_61051468',
  ),
  'page_footer' => 
  array (
    0 => 'Block_14011098495e39ea50e54886_62215924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17459252595e39ea50e4fa54_99614210', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7202768305e39ea50e52937_61623249', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20006805645e39ea50e54301_61051468', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
