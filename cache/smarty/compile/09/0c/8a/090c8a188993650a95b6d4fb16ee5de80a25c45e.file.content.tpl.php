<?php /* Smarty version Smarty-3.1.19, created on 2015-04-14 10:15:34
         compiled from "/Sites/cave/prestashop/admin460bzoa3u/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1541484775552ccca63211e7-10679238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1541484775552ccca63211e7-10679238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552ccca6336532_44606557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552ccca6336532_44606557')) {function content_552ccca6336532_44606557($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
