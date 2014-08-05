{include file='header.tpl'}
<div class="row">
  <div class="span9">
    <div class="row content" style="padding:15px 15px 0 15px">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / Album Foto</p>
    {foreach from=$album item='itemalbum'}
    <div class="span2">
    <a href="album-{$itemalbum.id_album}-{$itemalbum.album_seo}.html"><img src="assets/img_album/kecil_{$itemalbum.gbr_album}" width="150" style="padding:2px;box-shadow: 0 0 5px #bbb; border:1px solid #CCC;"/></a>
    <p align="center">{$itemalbum.jdl_album}</p>
   	</div>
    {/foreach}
    </div>
    <div class="clear"></div>
  </div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}