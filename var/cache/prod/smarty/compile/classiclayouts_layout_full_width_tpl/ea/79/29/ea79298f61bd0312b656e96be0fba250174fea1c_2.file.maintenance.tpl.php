<?php
/* Smarty version 4.3.4, created on 2025-09-20 15:17:46
  from 'C:\xampp\htdocs\asyourself\themes\classic\templates\errors\maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68ceb78a1c3d15_74257059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea79298f61bd0312b656e96be0fba250174fea1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\asyourself\\themes\\classic\\templates\\errors\\maintenance.tpl',
      1 => 1738226100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ceb78a1c3d15_74257059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146203413568ceb78a0dc3e9_20970561', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-error.tpl');
}
/* {block 'page_header_logo'} */
class Block_201464134168ceb78a0dd0b6_88082511 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="logo"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo" loading="lazy"></div>
        <?php
}
}
/* {/block 'page_header_logo'} */
/* {block 'hook_maintenance'} */
class Block_141321246268ceb78a1b9628_00122541 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

        <?php
}
}
/* {/block 'hook_maintenance'} */
/* {block 'page_title'} */
class Block_87989535468ceb78a1ba5e3_33875706 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'ll be back soon.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_104895695068ceb78a1ba257_76408890 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87989535468ceb78a1ba5e3_33875706', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_181056621268ceb78a0dccf3_64019630 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201464134168ceb78a0dd0b6_88082511', 'page_header_logo', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141321246268ceb78a1b9628_00122541', 'hook_maintenance', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104895695068ceb78a1ba257_76408890', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_38336626168ceb78a1c27b4_09121477 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['maintenance_text']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_171113932868ceb78a1c23e8_14314182 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content page-maintenance">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38336626168ceb78a1c27b4_09121477', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_89867745968ceb78a1c3423_93157887 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_146203413568ceb78a0dc3e9_20970561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_146203413568ceb78a0dc3e9_20970561',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_181056621268ceb78a0dccf3_64019630',
  ),
  'page_header_logo' => 
  array (
    0 => 'Block_201464134168ceb78a0dd0b6_88082511',
  ),
  'hook_maintenance' => 
  array (
    0 => 'Block_141321246268ceb78a1b9628_00122541',
  ),
  'page_header' => 
  array (
    0 => 'Block_104895695068ceb78a1ba257_76408890',
  ),
  'page_title' => 
  array (
    0 => 'Block_87989535468ceb78a1ba5e3_33875706',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_171113932868ceb78a1c23e8_14314182',
  ),
  'page_content' => 
  array (
    0 => 'Block_38336626168ceb78a1c27b4_09121477',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_89867745968ceb78a1c3423_93157887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181056621268ceb78a0dccf3_64019630', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171113932868ceb78a1c23e8_14314182', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89867745968ceb78a1c3423_93157887', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
