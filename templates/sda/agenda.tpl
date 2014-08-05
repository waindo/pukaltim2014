{include file='header.tpl'}
<div class="row">
  <div class="span9">
    <div class="content" style="padding:15px 15px 0 15px">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <a href="agenda.html">Agenda</a></p>
    {foreach from=$arsipagenda item='agenda'}
    <h2><a href="agenda-{$agenda.id_agenda}-{$agenda.tema_seo}.html">{$agenda.tema}</a></h2>
    <p>{$agenda.isi_agenda}</p>
    <p style="border-bottom:1px dashed #CCC; clear:left; padding-top:10px;"></p>
    {/foreach}
    <div class="pagination">
      <ul>
      {section name=num loop=$num}
	  {if $num[num].url == "yes"}
		{$num[num].i}
	  {else}
        <li><a href="halagenda-{$num[num].i}.html">{$num[num].i}</a></li>
      	{/if}
{/section}
      </ul>
    </div>
    </div>
  </div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}