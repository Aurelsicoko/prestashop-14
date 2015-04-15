<?php /* Smarty version Smarty-3.1.19, created on 2015-04-14 17:50:51
         compiled from "/Sites/cave/prestashop/themes/default-bootstrap/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1624627050552d375b2a7cb1-25631632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a31e55464de55e1d050196ab1fe340f2bd120c97' => 
    array (
      0 => '/Sites/cave/prestashop/themes/default-bootstrap/category.tpl',
      1 => 1429025831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1624627050552d375b2a7cb1-25631632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'link' => 0,
    'subcategories' => 0,
    'display_subcategories' => 0,
    'subcategory' => 0,
    'mediumSize' => 0,
    'img_cat_dir' => 0,
    'lang_iso' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552d375b3b8f17_42611980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552d375b3b8f17_42611980')) {function content_552d375b3b8f17_42611980($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['category']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['category']->value->id&&$_smarty_tpl->tpl_vars['category']->value->active) {?>

        <?php if (($_smarty_tpl->tpl_vars['category']->value->link_rewrite)!='vins-blancs') {?>
            <a class="category-page-link left" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink(12,'vins-blancs'), ENT_QUOTES, 'UTF-8', true);?>
">Vins blancs</a>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['category']->value->link_rewrite)!='vins-rouges') {?>
            <a class="category-page-link right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink(13,'vins-rouges'), ENT_QUOTES, 'UTF-8', true);?>
">Vins rouges</a>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['category']->value->link_rewrite)!='vins-roses'&&($_smarty_tpl->tpl_vars['category']->value->link_rewrite)=='vins-blancs') {?>
            <a class="category-page-link left" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink(14,'vins-roses'), ENT_QUOTES, 'UTF-8', true);?>
">Vins rosés</a>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['category']->value->link_rewrite)!='vins-roses'&&($_smarty_tpl->tpl_vars['category']->value->link_rewrite)=='vins-rouges') {?>
            <a class="category-page-link right" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink(14,'vins-roses'), ENT_QUOTES, 'UTF-8', true);?>
">Vins rosés</a>
        <?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['display_subcategories']->value)&&$_smarty_tpl->tpl_vars['display_subcategories']->value==1)||!isset($_smarty_tpl->tpl_vars['display_subcategories']->value)) {?>
		<!-- Subcategories -->
		<div id="subcategories">
			<p class="subcategory-heading"><?php echo smartyTranslate(array('s'=>'Subcategories'),$_smarty_tpl);?>
</p>
			<ul class="clearfix">
			<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
				<li>
                	<div class="subcategory-image">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="img">
						<?php if ($_smarty_tpl->tpl_vars['subcategory']->value['id_image']) {?>
							<img class="replace-2x" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['subcategory']->value['id_image'],'medium_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" />
						<?php } else { ?>
							<img class="replace-2x" src="<?php echo $_smarty_tpl->tpl_vars['img_cat_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-medium_default.jpg" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" />
						<?php }?>
					</a>
                   	</div>
					<h5><a class="subcategory-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['subcategory']->value['name'],25,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
					<?php if ($_smarty_tpl->tpl_vars['subcategory']->value['description']) {?>
						<div class="cat_desc"><?php echo $_smarty_tpl->tpl_vars['subcategory']->value['description'];?>
</div>
					<?php }?>
				</li>
			<?php } ?>
			</ul>
		</div>
        <?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
			<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->id) {?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'This category is currently unavailable.'),$_smarty_tpl);?>
</p>
	<?php }?>
<?php }?>
<?php }} ?>
