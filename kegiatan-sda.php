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

$thn = "$_GET[tahun]";
$keg = "$_GET[kegiatan]";

// buat web objek
$web = new Web;

$web->getIdentitas();
$web->displayMainMenu($web->getMainMenu());
$web->displaySubMenu($web->getSubMenu());
$web->displayBukutamu($web->getBukutamu());
$web->displayProgramTahun($web->getProgramTahun());
$web->displayKegiatanTahun($web->getKegiatanTahun());
$web->getTemplate();
$web->tpl->assign("thn",$thn);
$web->tpl->assign("keg",$keg);
$web->tpl->setTemplateDir('templates/'.$template);
$web->tpl->display('kegiatan.tpl');  

?>