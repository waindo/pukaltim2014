{include file='header.tpl'}
<div class="row">
  <div class="span9">
    <div class="row content" style="padding:15px 15px 0 15px">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <a href="berita.html">Berita</a></p>
    {foreach from=$arsipberita item='berita'}
    <div class="posttitle">
     <div class="entry-utility">
      <div  class="date"> {$berita.tanggal|date_format:"%d"} </div>
      <div  class="month">{$berita.tanggal|date_format:"%b %Y"}</div>
     </div>                
       <h2><a href="single.html">{$berita.judul}</a></h2>
       <div class="postoptions">
                            	<ul>
                                	<li class="owner"><a href="#" class="txthover">Admin</a></li>
                                    <li class="tags">
                                    {$berita.tag}
                                    </li>
                                </ul>
                            </div>
       <div class="clear"></div>    
    </div>
    <div class=" row">
    <div class="entry-content">
    <img src="assets/foto_berita/small_{$berita.gambar}" style="float:left; margin-right:10px;"/>
    <p>{$berita.isi_berita|truncate:450|strip_tags:true} <a href="post-{$berita.id_berita}-{$berita.judul_seo}.html">Baca Selengkapnya</a></p>
    </div>
    </div>
    <div class="clear"></div>
    {/foreach}
   
    <div class="pagination">
      <ul>
      {section name=num loop=$num}
	  {if $num[num].url == "yes"}
		{$num[num].i}
	  {else}
        <li><a href="halberita-{$num[num].i}.html">{$num[num].i}</a></li>
      	{/if}
{/section}
      </ul>
    </div>
    </div>
  </div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}