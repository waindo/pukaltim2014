<?php
error_reporting(0);
/**
 * Project: Website 
 * Author: Harry Suherman
 * File: index.php
 * Version: 0.1
 */

// definisi web direktori
define('WEB_DIR', '');
// definisi smarty direktori
define('SMARTY_DIR', 'libs/php/smarty/');
// include the setup script
include(WEB_DIR . 'libs/web_setup.php');
include(WEB_DIR . 'libs/session.php');

// buat web objek
$web = new Web;

if (empty($user) AND empty($pass)){
	header('location: login.php');
}
else{
$web->getIdentitas();
$web->displayMainMenu($web->getMainMenu());
$web->displaySubMenu($web->getSubMenu());
$web->displayBukutamu($web->getBukutamu());
$web->getDetailKegiatan();
$web->getTemplate();
$web->tpl->setTemplateDir('templates/'.$template);
$web->tpl->display('detail-kegiatan.tpl');  
}
?>