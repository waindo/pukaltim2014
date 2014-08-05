{* Smarty *}
{include file='header.tpl'}
{literal}
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

{/literal}
<div style="box-shadow: 0 0 5px #327195;border:1px solid #327195; position: fixed; top: 35%; right: 1pt;">     
	<a href="" target="_blank"><img src="{$images}/fb_group.png"></a>
</div>

<div class="row">
		<div class="span12 sliderFrame">
		<div id="sliderFrame">
        <div id="slider">
        {foreach from=$slider item=itemslider}  
        <a href="slide-{$itemslider.id_slider}-{$itemslider.link}.html"><img src="assets/slider/{$itemslider.gambar}" class="lazyImage" alt="<p align=left style='padding:0px 0px 0px 10px;'>{$itemslider.judul}<br/>{$itemslider.tgl_slider|date_format:"%d %B %Y"}<br/><br/>{$itemslider.deskripsi|truncate:150|strip_tags:true}</p>" /></a>
        {/foreach}
        </div>
         <div id="thumbs">
        {foreach from=$slider item=itemslider}
        	<div class="thumb">
                <div class="frame"><img src="assets/slider/thumb_{$itemslider.gambar}" /></div>
                <div class="thumb-content"><a href="{$itemslider.link}" target="_blank"><p>{$itemslider.judul}</p>{$itemslider.tgl_slider|date_format:"%d %b %Y"}</a></div>
                <div style="clear:both;"></div>
            </div>
        {/foreach}
        </div>
       <div style="clear:both;height:0;"></div>
    </div>
		</div>
    <div class="clear"></div>

<div class="span9">
        <div class=" row content">
        <div class="span3">
  
        <object width="200" height="260" align="left">
        <param name="movie" value="{$images}/banner.swf">
        <embed src="{$images}/banner.swf" width="200" height="260">
        </embed>
        </object></div>
        <div class="span5" style="margin-left:-50px;">
          <h1 class="box">Selamat datang di website</h1><p style="font-size:16px;">Selamat datang di website Dinas Pekerjaan Umum Provinsi Kalimantan Timur, Bidang Sumber Daya Air semoga website ini dapat menginformasikan 	kegiatan-kegiatan di Bidang Sumber Daya Air Dinas PU Kalimantan Timur ini, terutama kepada masyarakat Provinsi Kalimantan Timur.</p>
<p style="font-size:16px;">Harapan kami dengan adanya website ini akan lebih memudahkan masyarakat untuk mengetahui lebih dekat DPU KALTIM, juga mengetahui kegiatan kerja DPU KALTIM.</p>
        </div>
        <div class="clear"></div>
     
        <div class="span3" style="margin-top:20px;">
        <h1 class="box">Berita Terbaru</h1>
        	{foreach from=$databerita item="entryberita"}
            <div class="latest-post">
            	<a href="#"><img src="assets/foto_berita/small_{$entryberita.gambar}" alt="" /></a>
				<p><a href="post-{$entryberita.id_berita}-{$entryberita.judul_seo}.html">{$entryberita.judul}</a></p>
				<span>{$entryberita.tanggal|date_format:"%d %B %Y"}</span>
			</div>
            {foreachelse}
		    	Tidak ada data
            {/foreach}
        <p align="right"><a href="berita.html" class="m-btn blue-stripe">Arsip Berita</a></p>  
        </div>
        <div class="span3" style="margin-top:20px;">
        <h1 class="box">Artikel Terkini</h1>
        	{foreach from=$dataartikel item="entryartikel"}
            <div class="latest-post">
            	<a href="#"><img src="assets/foto_berita/small_{$entryartikel.gambar}" alt="" /></a>
				<p><a href="artikel-{$entryartikel.id_artikel}-{$entryartikel.judul_seo}.html">{$entryartikel.judul}</a></p>
				<span>{$entryartikel.tanggal|date_format:"%d %B %Y"}</span>
			</div>
            {foreachelse}
		    	Tidak ada data
            {/foreach}
        <p align="right"><a href="artikel.html" class="m-btn blue-stripe">Arsip Artikel</a></p>  
        </div>
        
        <div class="span3" style="margin-top:20px;">
        <h1 class="box">Agenda</h1>
        <ul class="styled">
		  {foreach from=$dataagenda item="entryagenda"}
            <li><a href="agenda-{$entryagenda.id_agenda}-{$entryagenda.tema_seo}.html">{$entryagenda.tema}</a></li>
          {foreachelse}
		  Tidak ada judul
		  {/foreach}
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
                {foreach from=$kategorifoto item=itemkat}
                		<li><a href="gallery-{$itemkat.id_kat_album}-{$itemkat.kat_album_seo}.html"><img src="assets/foto_banner/{$itemkat.gambar}" height="180px" width="180px" /><p style="margin-top:-20px; color:#FFF; display:block;">{$itemkat.nama_kat}</p></a></li>
                {/foreach}
			      </ul>
				<div class="clearfix"></div>
               
			</div>
  </div>
  		</div>
</div>
{include file='sidebar.tpl'}

{include file='footer.tpl'}
