<?php /* Smarty version Smarty-3.1.19, created on 2015-04-15 17:09:22
         compiled from "/Sites/cave/prestashop/themes/default-bootstrap/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:366622854552e7f22ef0d03-28921765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93522711877cc6cb0024b56c57ddd9cecaa615c8' => 
    array (
      0 => '/Sites/cave/prestashop/themes/default-bootstrap/footer.tpl',
      1 => 1428939286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '366622854552e7f22ef0d03-28921765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'HOOK_FOOTER_LANGUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552e7f22f31ad4_66859497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552e7f22f31ad4_66859497')) {function content_552e7f22f31ad4_66859497($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
				<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container">
						<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER_LANGUE']->value;?>

						<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

					</footer>
				</div><!-- #footer -->
			<?php }?>
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>
