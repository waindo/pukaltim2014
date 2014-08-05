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
$web->getIdentitas();
$web->displayMainMenu($web->getMainMenu());
$web->displaySubMenu($web->getSubMenu());
$web->displayBukutamu($web->getBukutamu());
$web->displayJaringanIrigasi($web->getjarIrigasi());
$web->displayBendungan($web->getBendungan());
$web->displayAirBaku($web->getAirBaku());
$web->displayRawaPantai($web->getRawaPantai());
$web->displaySpb($web->getSpb());
$web->displayBendali($web->getBendali());
$web->displayPolder($web->getPolder());
$web->getTemplate();
$web->tpl->setTemplateDir('templates/'.$template);
if ($_GET[id] == 1){
$judul = "Data Jaringan Irigasi";
$web->tpl->assign('judul',$judul);
$web->tpl->display('data-irigasi.tpl');  
}
elseif ($_GET[id] == 2){
$judul = "Data Bendung";
$web->tpl->assign('judul',$judul);
$web->tpl->display('data-bendung.tpl');  
}
elseif ($_GET[id] == 3){
$judul = "Data Bendungan";
$web->tpl->assign('judul',$judul);
$web->tpl->display('data-bendungan.tpl');  
}
elseif ($_GET[id] == 4){
$judul = "Data Air Baku Bendungan";
$web->tpl->assign('judul',$judul);
$web->tpl->display('data-airbaku-bendungan.tpl');  
}
elseif ($_GET[id] == 5){
$judul = "Data Air Baku Sumur Dalam";
$web->tpl->assign('judul',$judul);
$web->tpl->display('data-sumurdalam.tpl');  
}
elseif ($_GET[id] == 6){
$judul = "Data Air Baku Embung";
$web->tpl->assign('judul',$judul);
$web->tpl->display('data-embung.tpl');  
}
elseif ($_GET[id] == 7){
$judul = "Data Air Baku Bendung";
$web->tpl->assign('judul',$judul);
$web->tpl->display('data-airbaku-bendung.tpl');  
}
elseif ($_GET[id] == 8){
$judul = "Data Jaringan Tata Air Rawa";
$web->tpl->assign('judul',$judul);
$web->tpl->display('data-rawa.tpl');  
}
elseif ($_GET[id] == 9){
$judul = "Data Pengaman Pantai";
$web->tpl->assign('judul',$judul);
$web->tpl->display('data-pantai.tpl');  
}
elseif ($_GET[id] == 10){
$judul = "Data Sistem Pengendali Banjir";
$web->tpl->assign('judul',$judul);
$web->tpl->display('data-spb.tpl');  
}
elseif ($_GET[id] == 11){
$judul = "Data Bendali";
$web->tpl->assign('judul',$judul);
$web->tpl->display('data-bendali.tpl');  
}
elseif ($_GET[id] == 12){
$judul = "Data Polder";
$web->tpl->assign('judul',$judul);
$web->tpl->display('data-polder.tpl');  
}
?>