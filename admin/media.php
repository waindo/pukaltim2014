<?php
session_start();
error_reporting(0);
include "timeout.php";

if($_SESSION[login]==1){
	if(!cek_login()){
		$_SESSION[login] = 0;
	}
}
if($_SESSION[login]==0){
  header('location:logout.php');
}
else{
if (empty($_SESSION['username']) AND empty($_SESSION['passuser']) AND $_SESSION['login']==0){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Halaman Administrator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
		  background:none;
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="../ckeditor/ckeditor.js"></script>
  </head>

  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="?module=home">Administrator</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
            Logged in as <a href="#" class="navbar-link"><?php echo $_SESSION['namalengkap']; ?></a>
            <a href="logout.php" title="Keluar"><i class="icon-off"></i> Logout</a>
            </p>
            <ul class="nav" >
              <li><a href="?module=home"><i class="icon-home"></i> Dashboard</a></li>
              <li><a href="../index.php" target="_new">Visit Web</a></li>
              <li class="dropdown">
              <a class="dropdown-toggle"
              data-toggle="dropdown"
              href="#">
              <i class="icon-wrench"></i>  Setting
              <b class="caret"></b>
              <ul class="dropdown-menu">
              <li><a href="?module=identitas"> Identitas</a></li>
              <li><a href="?module=user">User</a></li>
              </ul>
              </li>
              <li class="dropdown">
              <a class="dropdown-toggle"
              data-toggle="dropdown"
              href="#">
              <i class="icon-eye-open"></i>  Tampilan
              <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
             <li><a href="?module=templates">Tema</a></li>
             <li><a href="?module=logo">Logo</a></li>
             <li><a href="?module=background">Background</a></li>
             <li><a href="?module=menuutama">Menu</a></li>
             <li><a href="?module=link">Link</a></li>
             <li><a href="?module=widget">Widget</a></li>
             </ul>
              </li>
              <li><a href="?module=hubungi"><i class="icon-envelope"></i> 
              <?php
			  include_once"../config/koneksi.php";
              $sqlHitungPesan = mysql_query("SELECT * FROM hubungi WHERE dibaca='N'");
			  $jml = mysql_num_rows($sqlHitungPesan);
			  echo"<span class=\"label label-important\">$jml</span>";
			  ?>
              Pesan</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <div class="well sidebar-nav">
            <?php
			if ($_SESSION['leveluser']=='admin'){
			?>
            <ul class="nav nav-list">
              <li class="nav-header">Posting</li>
              <li><a href="?module=agenda"><i class="icon-calendar"></i> Agenda</a></li>
              <li><a href="?module=berita"><i class="icon-file"></i> Berita</a></li>
              <li><a href="?module=artikel"><i class="icon-file"></i> Artikel</a></li>
              <li><a href="?module=halamanstatis"><i class=" icon-align-left"></i> Halaman</a></li>
              <li><a href="?module=programsda"><i class=" icon-list"></i> Program SDA</a></li>
              <li><a href="?module=kegiatansda"><i class=" icon-list"></i> Kegiatan SDA</a></li>
              <li><a href="?module=datasda"><i class=" icon-list-alt"></i> Data SDA</a></li>
              <li><a href="?module=das"><i class=" icon-list-alt"></i> DAS</a></li>
              <li><a href="?module=hidrologi"><i class=" icon-list-alt"></i> Hidrologi</a></li>
              <li class="nav-header">Media</li>
              <li><a href="?module=galerifoto"><i class="icon-picture"></i> Galeri Foto</a></li>
              <li><a href="?module=download"><i class="icon-download"></i> Download</a></li>
              <li><a href="?module=slider"><i class="icon-play"></i> Slider</a></li>
              <li><a href="?module=banner"><i class="icon-bullhorn"></i> Banner</a></li>
              <li><a href="?module=bukutamu"><i class="icon-book"></i>BukuTamu</a></li>           
              
            </ul>
            <?php
			}
			else{
			?>
            <ul class="nav nav-list">
              <li class="nav-header">Posting</li>
              <li><a href="?module=agenda"><i class="icon-calendar"></i> Agenda</a></li>
              <li><a href="?module=berita"><i class="icon-file"></i> Berita</a></li>
              <li><a href="?module=tag"><i class="icon-tags"></i> Tag</a></li>
              <li><a href="?module=halamanstatis"><i class=" icon-align-left"></i> Halaman</a></li>
              <li class="nav-header">Media</li>
              <li><a href="?module=galerifoto"><i class="icon-picture"></i> Galeri Foto</a></li>
              <li><a href="?module=download"><i class="icon-download"></i> Download</a></li>
            </ul>
            <?php } ?>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span10">
          
          <div class="row-fluid">
          <?Php include"content.php";?>
          </div>
        </div>
      </div>
    </div>   

  </body>
</html>
<?php
}
}
?>

