<?php
/* Smarty version 3.1.33, created on 2020-02-20 19:48:23
  from '/home/hidayamoyo/www/themes/TheStyle/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4ed477192bc2_47828875',
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
function content_5e4ed477192bc2_47828875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20681097645e4ed477187416_50565651', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_15161136655e4ed477188149_36421719 extends Smarty_Internal_Block
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
class Block_11772751935e4ed4771879f7_92777388 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15161136655e4ed477188149_36421719', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_9218025845e4ed477190460_49236871 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_11210041655e4ed477190c49_01531881 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16554002255e4ed47718fe82_94117691 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9218025845e4ed477190460_49236871', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11210041655e4ed477190c49_01531881', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_12405326905e4ed477191d86_90731261 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7465027535e4ed477191800_91856229 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12405326905e4ed477191d86_90731261', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_20681097645e4ed477187416_50565651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20681097645e4ed477187416_50565651',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_11772751935e4ed4771879f7_92777388',
  ),
  'page_title' => 
  array (
    0 => 'Block_15161136655e4ed477188149_36421719',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16554002255e4ed47718fe82_94117691',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9218025845e4ed477190460_49236871',
  ),
  'page_content' => 
  array (
    0 => 'Block_11210041655e4ed477190c49_01531881',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7465027535e4ed477191800_91856229',
  ),
  'page_footer' => 
  array (
    0 => 'Block_12405326905e4ed477191d86_90731261',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11772751935e4ed4771879f7_92777388', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16554002255e4ed47718fe82_94117691', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7465027535e4ed477191800_91856229', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
