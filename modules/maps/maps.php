<?php
if (!defined('_PS_VERSION_'))
  exit;
 
class Maps extends Module {

  public function __construct()
  {
    $this->name = 'maps';
    $this->tab = 'others';
    $this->version = '1.0.0';
    $this->author = 'Aurélien Georget';
    $this->need_instance = 1;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_); 
    $this->bootstrap = true;
 
    parent::__construct();
 
    $this->displayName = $this->l('Google Maps');
    $this->description = $this->l('Manage Google Maps.');
 
    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
 
    if (!Configuration::get('MAPS'))      
      $this->warning = $this->l('No name provided');
  }

  public function install()
  {
    if (Shop::isFeatureActive())
      Shop::setContext(Shop::CONTEXT_ALL);
   
    if (!parent::install() ||
      !$this->registerHook('leftColumn') ||
      !$this->registerHook('header') ||
      (!Configuration::updateValue('MAPS', 'loaded') &&
      !Configuration::updateValue('TEST', 'loaded'))
    )
      return false;
   
    return true;
  }

  public function uninstall()
  {
    if (!parent::uninstall() ||
      (!Configuration::deleteByName('MAPS') &&
      !Configuration::deleteByName('TEST'))
    )
      return false;
   
    return true;
  }

  public function getContent()
  {
      $output = null;
   
      if (Tools::isSubmit('submit'.$this->name))
      {
          $my_module_name = strval(Tools::getValue('MAPS'));
          $test = strval(Tools::getValue('TEST'));
          if (!$my_module_name
            || empty($my_module_name)
            || !Validate::isGenericName($my_module_name))
              $output .= $this->displayError($this->l('Invalid Configuration value'));
          else
          {
              Configuration::updateValue('MAPS', $my_module_name);
              Configuration::updateValue('TEST', $test);
              $output .= $this->displayConfirmation($this->l('Settings updated'));
          }
      }
      return $output.$this->displayForm();
  }

  public function displayForm()
  {
      // Get default language
      $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
       
      // Init Fields form array
      $fields_form[0]['form'] = array(
          'legend' => array(
              'title' => $this->l('Settings'),
          ),
          'input' => array(
              array(
                  'type' => 'text',
                  'label' => $this->l('Enter your address'),
                  'name' => 'MAPS',
                  'size' => 20,
                  'required' => true
              ),
              array(
                  'type' => 'text',
                  'label' => $this->l('Test'),
                  'name' => 'TEST',
                  'size' => 20,
                  'required' => true
              )
          ),
          'submit' => array(
              'title' => $this->l('Save'),
              'class' => 'button'
          )
      );
       
      $helper = new HelperForm();
       
      // Module, token and currentIndex
      $helper->module = $this;
      $helper->name_controller = $this->name;
      $helper->token = Tools::getAdminTokenLite('AdminModules');
      $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
       
      // Language
      $helper->default_form_language = $default_lang;
      $helper->allow_employee_form_lang = $default_lang;
       
      // Title and toolbar
      $helper->title = $this->displayName;
      $helper->show_toolbar = true;        // false -> remove toolbar
      $helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
      $helper->submit_action = 'submit'.$this->name;
      $helper->toolbar_btn = array(
          'save' =>
          array(
              'desc' => $this->l('Save'),
              'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
              '&token='.Tools::getAdminTokenLite('AdminModules'),
          ),
          'back' => array(
              'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
              'desc' => $this->l('Back to list')
          )
      );
       
      // Load current value
      $helper->fields_value['MAPS'] = Configuration::get('MAPS');
      $helper->fields_value['TEST'] = Configuration::get('TEST');
       
      return $helper->generateForm($fields_form);
  }

  //methode appelée si le module est greffé à la colonne de gauche
  public function hookDisplayLeftColumn($params)
  {
    //on envoie des variables à smarty
    $this->context->smarty->assign(array(
      'my_config' => Configuration::get('MAPS'),
      'test' => Configuration::get('TEST'),
      'my_link' => $this->context->link->getModuleLink('maps', 'display')
    )); 
    
    //on appel le template correspondant
    return $this->display(__FILE__, 'maps.tpl');
  }
  
  //ici, on veut le meme comportement dans la colonne de droite
  public function hookDisplayRightColumn($params)
  {
    return $this->hookDisplayLeftColumn($params);
  }
  
  //Dans le header, on injecte les css, les js, etc.
  public function hookDisplayHeader()
  {
    $this->context->controller->addCSS($this->_path.'css/maps.css', 'all');
  }

}

?>