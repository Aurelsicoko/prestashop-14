<?php /* Smarty version Smarty-3.1.19, created on 2015-04-15 16:56:56
         compiled from "/Sites/cave/prestashop/admin460bzoa3u/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109615167552e7c3855c622-26472466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '090c8a188993650a95b6d4fb16ee5de80a25c45e' => 
    array (
      0 => '/Sites/cave/prestashop/admin460bzoa3u/themes/default/template/content.tpl',
      1 => 1428580450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109615167552e7c3855c622-26472466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552e7c38570380_62996914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e7c38570380_62996914')) {function content_552e7c38570380_62996914($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
