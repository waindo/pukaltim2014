{include file='header.tpl'}

<div class="row">
  <div class="span9">
    <div class="content" style="padding:15px 15px 0 15px">
        <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <a href="berita.html">Berita</a> / {$judul}</p>
     
     <div class="posttitle">
     <div class="entry-utility">
      <div  class="date"> {$tgl|date_format:"%d"} </div>
      <div  class="month">{$tgl|date_format:"%b %Y"}</div>
     </div>                
       <h2><a href="single.html">{$judul}</a></h2>
       <div class="postoptions">
          <ul>
            <li class="owner"><a href="#" class="txthover">Admin</a></li>
            <li class="tags">
              {$tag}
            </li>
          </ul>
       </div>
       <div class="clear"></div></div>
       <div class=" row">
       <div class="entry-content">  
        <img src="assets/foto_berita/{$gambar_berita}" style="float:left; margin-right:10px;"/>
        <p>{$isi_berita}</p> 
        </div>
        </div>
        {literal}
    <script language="javascript">
		document.write("<a href='http://www.facebook.com/share.php?u=" + document.URL + "' target='_blank'>");
	</script>
    {/literal}
    <img src="{$images}/share_fb.png" /></a>
  	<hr />
        <h2>Berita Lainnya</h2>
        <ul>
        {foreach from=$beritalainnya item='beritalain'}
          <li><a href="post-{$beritalain.id_berita}-{$beritalain.judul_seo}.html">{$beritalain.judul}</a></li>
        {/foreach}
        </ul>    
    </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}