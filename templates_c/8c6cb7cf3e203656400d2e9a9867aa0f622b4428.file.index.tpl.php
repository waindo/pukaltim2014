<?php /* Smarty version Smarty-3.1.15, created on 2014-07-18 03:26:47
         compiled from "templates\sda\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2715552963fea12d2b7-30724483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c6cb7cf3e203656400d2e9a9867aa0f622b4428' => 
    array (
      0 => 'templates\\sda\\index.tpl',
      1 => 1403505751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2715552963fea12d2b7-30724483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52963fea1b1045_78577372',
  'variables' => 
  array (
    'images' => 0,
    'slider' => 0,
    'itemslider' => 0,
    'databerita' => 0,
    'entryberita' => 0,
    'dataartikel' => 0,
    'entryartikel' => 0,
    'dataagenda' => 0,
    'entryagenda' => 0,
    'kategorifoto' => 0,
    'itemkat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52963fea1b1045_78577372')) {function content_52963fea1b1045_78577372($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'libs/php/smarty/plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'libs/php/smarty/plugins\\modifier.truncate.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<script type="text/javascript" language="javascript">
			$(function() {

				$('#foo0').carouFredSel({
					auto: {
						pauseOnHover: 'resume'
					}
				}, {
					transition: true
				});
			});
		</script>


<div style="box-shadow: 0 0 5px #327195;border:1px solid #327195; position: fixed; top: 35%; right: 1pt;">     
	<a href="" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
/fb_group.png"></a>
</div>

<div class="row">
		<div class="span12 sliderFrame">
		<div id="sliderFrame">
        <div id="slider">
        <?php  $_smarty_tpl->tpl_vars['itemslider'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemslider']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemslider']->key => $_smarty_tpl->tpl_vars['itemslider']->value) {
$_smarty_tpl->tpl_vars['itemslider']->_loop = true;
?>  
        <a href="slide-<?php echo $_smarty_tpl->tpl_vars['itemslider']->value['id_slider'];?>
-<?php echo $_smarty_tpl->tpl_vars['itemslider']->value['link'];?>
.html"><img src="assets/slider/<?php echo $_smarty_tpl->tpl_vars['itemslider']->value['gambar'];?>
" class="lazyImage" alt="<p align=left style='padding:0px 0px 0px 10px;'><?php echo $_smarty_tpl->tpl_vars['itemslider']->value['judul'];?>
<br/><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['itemslider']->value['tgl_slider'],"%d %B %Y");?>
<br/><br/><?php echo preg_replace('!<[^>]*?>!', ' ', smarty_modifier_truncate($_smarty_tpl->tpl_vars['itemslider']->value['deskripsi'],150));?>
</p>" /></a>
        <?php } ?>
        </div>
         <div id="thumbs">
        <?php  $_smarty_tpl->tpl_vars['itemslider'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemslider']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemslider']->key => $_smarty_tpl->tpl_vars['itemslider']->value) {
$_smarty_tpl->tpl_vars['itemslider']->_loop = true;
?>
        	<div class="thumb">
                <div class="frame"><img src="assets/slider/thumb_<?php echo $_smarty_tpl->tpl_vars['itemslider']->value['gambar'];?>
" /></div>
                <div class="thumb-content"><a href="<?php echo $_smarty_tpl->tpl_vars['itemslider']->value['link'];?>
" target="_blank"><p><?php echo $_smarty_tpl->tpl_vars['itemslider']->value['judul'];?>
</p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['itemslider']->value['tgl_slider'],"%d %b %Y");?>
</a></div>
                <div style="clear:both;"></div>
            </div>
        <?php } ?>
        </div>
       <div style="clear:both;height:0;"></div>
    </div>
		</div>
    <div class="clear"></div>

<div class="span9">
        <div class=" row content">
        <div class="span3">
  
        <object width="200" height="260" align="left">
        <param name="movie" value="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
/banner.swf">
        <embed src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
/banner.swf" width="200" height="260">
        </embed>
        </object></div>
        <div class="span5" style="margin-left:-50px;">
          <h1 class="box">Selamat datang di website</h1><p style="font-size:16px;">Selamat datang di website Dinas Pekerjaan Umum Provinsi Kalimantan Timur, Bidang Sumber Daya Air semoga website ini dapat menginformasikan 	kegiatan-kegiatan di Bidang Sumber Daya Air Dinas PU Kalimantan Timur ini, terutama kepada masyarakat Provinsi Kalimantan Timur.</p>
<p style="font-size:16px;">Harapan kami dengan adanya website ini akan lebih memudahkan masyarakat untuk mengetahui lebih dekat DPU KALTIM, juga mengetahui kegiatan kerja DPU KALTIM.</p>
        </div>
        <div class="clear"></div>
     
        <div class="span3" style="margin-top:20px;">
        <h1 class="box">Berita Terbaru</h1>
        	<?php  $_smarty_tpl->tpl_vars["entryberita"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["entryberita"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['databerita']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["entryberita"]->key => $_smarty_tpl->tpl_vars["entryberita"]->value) {
$_smarty_tpl->tpl_vars["entryberita"]->_loop = true;
?>
            <div class="latest-post">
            	<a href="#"><img src="assets/foto_berita/small_<?php echo $_smarty_tpl->tpl_vars['entryberita']->value['gambar'];?>
" alt="" /></a>
				<p><a href="post-<?php echo $_smarty_tpl->tpl_vars['entryberita']->value['id_berita'];?>
-<?php echo $_smarty_tpl->tpl_vars['entryberita']->value['judul_seo'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['entryberita']->value['judul'];?>
</a></p>
				<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['entryberita']->value['tanggal'],"%d %B %Y");?>
</span>
			</div>
            <?php }
if (!$_smarty_tpl->tpl_vars["entryberita"]->_loop) {
?>
		    	Tidak ada data
            <?php } ?>
        <p align="right"><a href="berita.html" class="m-btn blue-stripe">Arsip Berita</a></p>  
        </div>
        <div class="span3" style="margin-top:20px;">
        <h1 class="box">Artikel Terkini</h1>
        	<?php  $_smarty_tpl->tpl_vars["entryartikel"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["entryartikel"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataartikel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["entryartikel"]->key => $_smarty_tpl->tpl_vars["entryartikel"]->value) {
$_smarty_tpl->tpl_vars["entryartikel"]->_loop = true;
?>
            <div class="latest-post">
            	<a href="#"><img src="assets/foto_berita/small_<?php echo $_smarty_tpl->tpl_vars['entryartikel']->value['gambar'];?>
" alt="" /></a>
				<p><a href="artikel-<?php echo $_smarty_tpl->tpl_vars['entryartikel']->value['id_artikel'];?>
-<?php echo $_smarty_tpl->tpl_vars['entryartikel']->value['judul_seo'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['entryartikel']->value['judul'];?>
</a></p>
				<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['entryartikel']->value['tanggal'],"%d %B %Y");?>
</span>
			</div>
            <?php }
if (!$_smarty_tpl->tpl_vars["entryartikel"]->_loop) {
?>
		    	Tidak ada data
            <?php } ?>
        <p align="right"><a href="artikel.html" class="m-btn blue-stripe">Arsip Artikel</a></p>  
        </div>
        
        <div class="span3" style="margin-top:20px;">
        <h1 class="box">Agenda</h1>
        <ul class="styled">
		  <?php  $_smarty_tpl->tpl_vars["entryagenda"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["entryagenda"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataagenda']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["entryagenda"]->key => $_smarty_tpl->tpl_vars["entryagenda"]->value) {
$_smarty_tpl->tpl_vars["entryagenda"]->_loop = true;
?>
            <li><a href="agenda-<?php echo $_smarty_tpl->tpl_vars['entryagenda']->value['id_agenda'];?>
-<?php echo $_smarty_tpl->tpl_vars['entryagenda']->value['tema_seo'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['entryagenda']->value['tema'];?>
</a></li>
          <?php }
if (!$_smarty_tpl->tpl_vars["entryagenda"]->_loop) {
?>
		  Tidak ada judul
		  <?php } ?>
		  </ul>
          <p align="right"><a href="agenda.html" class="m-btn blue-stripe">Arsip Agenda</a></p>
        </div>
         <div class="clear"></div>
         <div class="span8" style="margin-left:50px; margin-top:25px">
        <h1 class="box">Album Foto</h1>
		</div>
        <div class="span8" style="margin-left:50px;">
        <div class="list_carousel">
				<ul id="foo0">
                <?php  $_smarty_tpl->tpl_vars['itemkat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemkat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kategorifoto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemkat']->key => $_smarty_tpl->tpl_vars['itemkat']->value) {
$_smarty_tpl->tpl_vars['itemkat']->_loop = true;
?>
                		<li><a href="gallery-<?php echo $_smarty_tpl->tpl_vars['itemkat']->value['id_kat_album'];?>
-<?php echo $_smarty_tpl->tpl_vars['itemkat']->value['kat_album_seo'];?>
.html"><img src="assets/foto_banner/<?php echo $_smarty_tpl->tpl_vars['itemkat']->value['gambar'];?>
" height="180px" width="180px" /><p style="margin-top:-20px; color:#FFF; display:block;"><?php echo $_smarty_tpl->tpl_vars['itemkat']->value['nama_kat'];?>
</p></a></li>
                <?php } ?>
			      </ul>
				<div class="clearfix"></div>
               
			</div>
  </div>
  		</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
