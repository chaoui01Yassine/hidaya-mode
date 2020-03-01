<?php
/* Smarty version 3.1.33, created on 2020-02-20 19:48:42
  from '/home/hidayamoyo/www/themes/TheStyle/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4ed48a58ca19_02407440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f651c8fffaad35c4a7c0990e65376a65ba2f542b' => 
    array (
      0 => '/home/hidayamoyo/www/themes/TheStyle/templates/page.tpl',
      1 => 1582222444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4ed48a58ca19_02407440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5023831775e4ed48a5878a3_86399082', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_12646272865e4ed48a5885f6_59491382 extends Smarty_Internal_Block
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
class Block_16201823115e4ed48a587e62_72158415 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12646272865e4ed48a5885f6_59491382', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_10949104775e4ed48a58a495_68000793 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_3533605875e4ed48a58ac57_95144612 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18600883705e4ed48a589f06_00211831 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10949104775e4ed48a58a495_68000793', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3533605875e4ed48a58ac57_95144612', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_9376919825e4ed48a58bd33_80931355 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_13553117685e4ed48a58b7d9_35132646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9376919825e4ed48a58bd33_80931355', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_5023831775e4ed48a5878a3_86399082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5023831775e4ed48a5878a3_86399082',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_16201823115e4ed48a587e62_72158415',
  ),
  'page_title' => 
  array (
    0 => 'Block_12646272865e4ed48a5885f6_59491382',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_18600883705e4ed48a589f06_00211831',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10949104775e4ed48a58a495_68000793',
  ),
  'page_content' => 
  array (
    0 => 'Block_3533605875e4ed48a58ac57_95144612',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_13553117685e4ed48a58b7d9_35132646',
  ),
  'page_footer' => 
  array (
    0 => 'Block_9376919825e4ed48a58bd33_80931355',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16201823115e4ed48a587e62_72158415', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18600883705e4ed48a589f06_00211831', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13553117685e4ed48a58b7d9_35132646', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
