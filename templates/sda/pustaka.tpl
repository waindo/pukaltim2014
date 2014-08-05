{include file='header.tpl'}
<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / Pustaka</p>
    {foreach from=$download item='d_download'}
    <div class="posttitle">
                     
       <h2><img src="{$images}/pustaka.png" style="padding-right:8px;" /><a href="unduh.php?file={$d_download.nama_file}">{$d_download.judul}</a></h2>
        <p style="margin:-20px 0px 0px 65px;padding-bottom:5px;font-size:10px;">{$d_download.tgl_posting|date_format:"%e %B %Y"}</p>
    </div>
    <div class=" row">
   
    </div>
    <div class="clear"></div>
    {/foreach}
   
     </div>
  </div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}