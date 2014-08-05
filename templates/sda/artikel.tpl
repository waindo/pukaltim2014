{include file='header.tpl'}
<div class="row">
  <div class="span9">
    <div class="row content" style="padding:15px 15px 0 15px">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <a href="artikel.html">artikel</a></p>
    {foreach from=$arsipartikel item='artikel'}
    <div class="posttitle">
                     
       <h2><a href="artikel-{$artikel.id_artikel}-{$artikel.judul_seo}.html">{$artikel.judul}</a></h2>
        <div class="postartikel">
                            	<ul>
                                	<li class="owner">Admin</li>
                                    <li class="date">{$artikel.tanggal|date_format:"%d %B %Y"}</li>
                                    <li class="tags">{$artikel.tag}</li>
                                </ul>
                            </div>
       <div class="clear"></div>    
    </div>
    <div class=" row">
    <div class="entry-content">
    <img src="assets/foto_artikel/small_{$artikel.gambar}" style="float:left; margin-right:10px;"/>
    <p>{$artikel.isi_artikel|truncate:450|strip_tags:true} <a href="artikel-{$artikel.id_artikel}-{$artikel.judul_seo}.html">Baca Selengkapnya</a></p>
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
        <li><a href="halartikel-{$num[num].i}.html">{$num[num].i}</a></li>
      	{/if}
{/section}
      </ul>
    </div>
    </div></div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}