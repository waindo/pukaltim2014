<?php
error_reporting(0);
// definisi web direktori
define('WEB_DIR', '');
// definisi smarty direktori
define('SMARTY_DIR', 'libs/php/smarty/');
// include the setup script
include(WEB_DIR . 'libs/web_setup.php');
include(WEB_DIR . 'libs/session.php');
// buat web objek
$web = new Web;
$web->getIdentitas();
$web->displayMainMenu($web->getMainMenu());
$web->displaySubMenu($web->getSubMenu());
$web->displayBeritaLainnya($web->getBeritaLainnya());
$web->getDetailBerita();
$web->displayBukutamu($web->getBukutamu());
$web->getTemplate();
$web->tpl->setTemplateDir('templates/'.$template);
$web->tpl->display('detailberita.tpl');  
?>