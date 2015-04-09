<?php

class FrontController extends FrontControllerCore
{
	public function initFooter()
	{
		parent::initFooter();
		$this->context->smarty->assign(array(
			'HOOK_FOOTER_LANGUE' => Hook::exec('displayFooterLangue')
		));
	}
}
