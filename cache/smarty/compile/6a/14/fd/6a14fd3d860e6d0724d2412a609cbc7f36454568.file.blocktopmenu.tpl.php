<?php /* Smarty version Smarty-3.1.19, created on 2015-04-14 10:26:47
         compiled from "/Sites/cave/prestashop/themes/default-bootstrap/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1136701449552ccf47097682-65751514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a14fd3d860e6d0724d2412a609cbc7f36454568' => 
    array (
      0 => '/Sites/cave/prestashop/themes/default-bootstrap/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1428580452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1136701449552ccf47097682-65751514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552ccf472a0a61_53699110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552ccf472a0a61_53699110')) {function content_552ccf472a0a61_53699110($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix">
		<div class="cat-title"><?php echo smartyTranslate(array('s'=>"Categories",'mod'=>"blocktopmenu"),$_smarty_tpl);?>
</div>
		<ul class="sf-menu clearfix menu-content">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

		</ul>
	</div>
	<!--/ Menu -->
<?php }?><?php }} ?>
