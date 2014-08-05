<?php /* Smarty version Smarty-3.1.15, created on 2013-11-27 18:37:23
         compiled from "templates\krs\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51055291ab65ce7ac1-75298303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df530dba6fa49f15c795050822cebfd5d61bf81b' => 
    array (
      0 => 'templates\\krs\\header.tpl',
      1 => 1385513325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51055291ab65ce7ac1-75298303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5291ab65d4d896_86883507',
  'variables' => 
  array (
    'identitas_nama_website' => 0,
    'style' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5291ab65d4d896_86883507')) {function content_5291ab65d4d896_86883507($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title><?php echo $_smarty_tpl->tpl_vars['identitas_nama_website']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/layout.css" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/redmond/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/jquery.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/jquery-ui-1.10.2.custom.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/jquery-slidedeck.pack.lite.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded'
    });
});
// Kalender
$(function(){
$( "#datepicker" ).datepicker({
			inline: true
	});
});
</script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/jquery.prettyPhoto.js"></script>

</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.php"><?php echo $_smarty_tpl->tpl_vars['identitas_nama_website']->value;?>
</a></h1>
      <p><?php echo $_smarty_tpl->tpl_vars['identitas_nama_website']->value;?>
</p>
    </div>
    
  </div>
</div>
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Profil</a>
      <ul>
      	<li><a href="page-1-sejarah.html">Sejarah</a></li>
        <li><a href="page-2-struktur-organisasi.html">Struktur Organisasi</a></li>
        <li><a href="page-3-kepengurusan-krus.html">Kepengurusan</a></li>
        <li><a href="page-4-program-kerja.html">Program Kerja</a></li>
        <li><a href="page-5-visi-dan-misi.html">Visi & Misi</a></li>
      </ul>
      </li>
      <li><a href="page-20-fasilitas.html">Fasilitas</a></li>
      <li><a href="album-foto.html">Galeri Foto</a></li>
      <li><a href="#">Koleksi</a>
      <ul>
      	<li><a href="album-1-koleksi-flora.html">Koleksi Flora</a></li>
        <li><a href="album-2-koleksi-fauna.html">Koleksi Fauna</a></li>
        <li><a href="album-3-musim-kayu.html">Musim Kayu</a></li>
      </ul>
      </li>
      <li><a href="#">Pelayanan</a>
      <ul>
      	<li><a href="page-6-akomodasi.html">Akomodasi</a></li>
        <li><a href="page-7-biaya.html">Biaya</a></li>
        <li><a href="page-8-ruangan-pertemuan.html">Ruangan Pertemuan</a></li>
        <li><a href="page-9-panggung-terbuka.html">Panggung Terbuka</a></li>
        <li><a href="page-10-toko-sovenir.html">Toko Sovenir</a></li>
      </ul>
      </li>
      <li><a href="#">Kegiatan</a>
      <ul>
      	<li><a href="page-14-penelitian.html">Penelitian</a></li>
        <li><a href="page-15-konservasi.html">Konservasi</a></li>
        <li><a href="page-16-pendidikan.html">Pendidikan</a></li>
        <li><a href="page-17-konsultasi.html">Konsultasi</a></li>
        <li><a href="page-18-peneliti-kami.html">Peneliti Kami</a></li>
        <li><a href="page-19-panggung-hiburan.html">Panggung Hiburan</a></li>
      </ul>
      </li>
      <li><a href="bukutamu.html">Buku Tamu</a></li>
      <li><a href="#">Link</a>
      <ul>
      	<li><a href="http://unmul.ac.id" target="_blank">Universitas Mulawarman</a></li>
        <li><a href="http://fahutan.unmul.ac.id">Fakultas Kehutanan</a></li>
        <li><a href="http://bogorbotanicgardens.org" target="_blank">Kebun Raya Bogor</a></li>
        <li><a href="http://plantamor.com" target="_blank">Plantamor</a></li>
      </ul>
      </li>
      <li><a href="kontak-kami.html">Kontak Kami</a></li>
      </ul>
    </ul>
    <div  class="clear"></div>
  </div>
</div><?php }} ?>
