<?php

/*
 * Project: Website
 * Author: Harry Suherman 
 * File: web_setup.php
 * Version: 0.1
 */

require(WEB_DIR . 'libs/web.lib.php');
require(SMARTY_DIR . 'Smarty.class.php');

// smarty configuration
class Web_Smarty extends Smarty {
    function __construct() {
      parent::__construct();
      $this->setCompileDir(WEB_DIR . 'templates_c');
      $this->setConfigDir(WEB_DIR . 'configure');
      $this->setCacheDir(WEB_DIR . 'cache');
    }
}
      
?>