{include file='header.tpl'}
<div class="row">
  <div class="span9">
    <div class="content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <a href="agenda.html">Agenda</a> / {$tema_agenda}</p>
    <h1>{$tema_agenda}</h1>
    <p><b>Tempat</b> : {$tempat_agenda}, <b>Jam</b> : {$jam_agenda}</p>
    <p><b>Dikirim Oleh</b> : {$pengirim_agenda}</p>
    <p><b>Tentang </b> : {$isi_agenda}</p>
    
            <h2>Agenda Lainnya</h2>
        <ul>
        {foreach from=$beritalainnya item='beritalain'}
          <li><a href="post-{$beritalain.id_berita}-{$beritalain.judul_seo}.html">{$beritalain.judul}</a></li>
        {/foreach}
        </ul>
  </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}