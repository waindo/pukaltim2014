<?php
error_reporting(0);
/**
 * Project: Website 
 * Author: Angger Wahyudianto
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

include(WEB_DIR . 'libs/session.php');

// Tampilkan MOdul
$web->getIdentitas();
$web->displayMainMenu($web->getMainMenu());
$web->displaySubMenu($web->getSubMenu());
$web->displaySlider($web->getSlider());
$web->displayDataBerita($web->getEntriBeritaTerkini()); 
$web->displayDataArtikel($web->getEntriArtikelTerkini()); 
$web->displayDataAgenda($web->getEntriAgenda());
$web->displayKategoriFoto($web->getKategoriFoto());
$web->displayBukutamu($web->getBukutamu());
$web->getTemplate();
$web->tpl->setTemplateDir('templates/'.$template);
$web->tpl->display("index.tpl");  

?>