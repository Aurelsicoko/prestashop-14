<?php /* Smarty version Smarty-3.1.19, created on 2015-04-09 11:13:41
         compiled from "/Sites/cave/prestashop/admin460bzoa3u/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:954501680552642c5751b97-85054631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '187b66a8d09a7922420285d2c20d050547db0079' => 
    array (
      0 => '/Sites/cave/prestashop/admin460bzoa3u/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1425636560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '954501680552642c5751b97-85054631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552642c576d180_65339243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552642c576d180_65339243')) {function content_552642c576d180_65339243($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
