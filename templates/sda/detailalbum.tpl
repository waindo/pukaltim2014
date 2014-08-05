{include file='header.tpl'}
<div class="row">
  <div class="span9">
    <div class="row content">
   <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <a href="album-foto.html">Album Foto</a> / Detail</p>
    {section name=row loop=$detailalbum}
    <a href="assets/img_galeri/{$detailalbum[row].gbr_gallery}" rel="prettyPhoto[gallery]"><img src="assets/img_galeri/kecil_{$detailalbum[row].gbr_gallery}" style="padding:5px; border:1px solid #CCC; margin-right:10px; margin-bottom:10px;"/></a>
    {/section}
    </div>
    <div class="clear"></div>
  </div>

{include file='sidebar.tpl'}
{include file='footer.tpl'}