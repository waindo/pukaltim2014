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

$web->displayArsipBerita($web->getArsipBerita());
// Buat Link 
$limit = 20;
$sql = $web->pdo->query("SELECT * FROM berita WHERE judul LIKE '%$_GET[cari]%'");
$jmldata = $sql->rowCount();
$jumlah_halaman = ceil($jmldata / $limit);
for($i = 1; $i <= $jumlah_halaman; $i++){
	
	if($i == $next) {
		$url = "yes";
	} 
	else{
		$url = "no";
	}
	$num[] = array(	'i' => $i,
					'url' => $url);
	$web->tpl->assign('num',$num);				
}
$web->getIdentitas();
$web->displayMainMenu($web->getMainMenu());
$web->displaySubMenu($web->getSubMenu());
$web->displayCariBerita($web->getCariBerita());
$web->displayBukutamu($web->getBukutamu());
$web->getTemplate();
$web->tpl->setTemplateDir('templates/'.$template);
$web->tpl->display('searching.tpl');  

?>