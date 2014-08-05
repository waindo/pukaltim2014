{include file='header.tpl'}
<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / {$judul}</p>
    <h1>{$judul}</h1>
    <img src="assets/slider/{$gambar}" align="middle" />
    <p>{$deskripsi}</p>
 	{literal}
    <script language="javascript">
		document.write("<a href='http://www.facebook.com/share.php?u=" + document.URL + "' target='_blank'>");
	</script>
    {/literal}
    <img src="{$images}/share_fb.png" /></a>
  </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}