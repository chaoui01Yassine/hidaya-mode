<?php
/* Smarty version 3.1.33, created on 2020-02-11 13:07:15
  from '/home/hidayamoyo/www/themes/TheStyle/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4298f3df9702_48882483',
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
function content_5e4298f3df9702_48882483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5706675915e4298f3df06e0_38546526', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1237541185e4298f3df1477_18129183 extends Smarty_Internal_Block
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
class Block_20022421225e4298f3df0cf0_17450256 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1237541185e4298f3df1477_18129183', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_399261515e4298f3df7260_59511564 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_16862096725e4298f3df7a15_51833563 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19651046005e4298f3df6c21_57190123 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_399261515e4298f3df7260_59511564', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16862096725e4298f3df7a15_51833563', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_21423535505e4298f3df8a74_03716771 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4274289455e4298f3df8540_66730949 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21423535505e4298f3df8a74_03716771', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_5706675915e4298f3df06e0_38546526 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5706675915e4298f3df06e0_38546526',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_20022421225e4298f3df0cf0_17450256',
  ),
  'page_title' => 
  array (
    0 => 'Block_1237541185e4298f3df1477_18129183',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_19651046005e4298f3df6c21_57190123',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_399261515e4298f3df7260_59511564',
  ),
  'page_content' => 
  array (
    0 => 'Block_16862096725e4298f3df7a15_51833563',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4274289455e4298f3df8540_66730949',
  ),
  'page_footer' => 
  array (
    0 => 'Block_21423535505e4298f3df8a74_03716771',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20022421225e4298f3df0cf0_17450256', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19651046005e4298f3df6c21_57190123', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4274289455e4298f3df8540_66730949', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
