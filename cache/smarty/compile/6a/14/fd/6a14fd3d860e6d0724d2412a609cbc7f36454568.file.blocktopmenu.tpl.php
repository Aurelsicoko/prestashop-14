<?php /* Smarty version Smarty-3.1.19, created on 2015-04-09 23:22:47
         compiled from "/Sites/cave/prestashop/themes/default-bootstrap/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12405206585526eda798cce2-63365457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '12405206585526eda798cce2-63365457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5526eda7d8b366_00301632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526eda7d8b366_00301632')) {function content_5526eda7d8b366_00301632($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
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
