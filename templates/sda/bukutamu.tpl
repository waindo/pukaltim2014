{include file='header.tpl'}
{literal}
<script language="javascript">
function valkomen(form){
  if (form.nama.value == ""){
    alert("Anda belum mengisikan Nama.");
    form.nama.focus();
    return (false);
  }
  if (form.email.value == ""){
    alert("Anda belum mengisikan Email.");
    form.email.focus();
    return (false);
  }
  if (form.kode.value == ""){
    alert("Anda belum mengisikan Kode Captcha.");
    form.kode.focus();
    return (false);
  }   
  if (form.pesan.value == ""){
    alert("Anda belum mengisikan Pesan.");
    form.pesan.focus();
    return (false);
  }
  return (true);
}
</script>
{/literal}
<div class="row">
  <div class="span9">
    <div class="row content" style="padding:15px 15px 0 15px">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / Buku Tamu</p>
      <div id="comments">
        <h2>Yang telang mengisi daftar Buku Tamu : </h2>
        <ul class="commentlist">
        {foreach from=$bukutamu item='r_bukutamu'}
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="{$images}/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">{$r_bukutamu.nama}</a></span> <span class="wrote">menulis:</span></div>
            <div class="submitdate"><a href="#">{$r_bukutamu.tgl}, {$r_bukutamu.jam}</a></div>
            <p>{$r_bukutamu.pesan}</p>
          </li>
          {/foreach}
        </ul>
      </div>
      <h2>Form Isi Buku Tamu : </h2>
      <div id="respond">
        <form action="act_bukutamu.php" method="post" onSubmit="return valkomen(this)" name="form"> 
          <p>
            <input type="text" name="nama" class="m-wrap" placeholder="Nama" size="22" />
            <label for="name"><small>Nama (required)</small></label>
          </p>
          <p>
            <input type="text" name="email" class="m-wrap" placeholder="Email" size="22" />
            <label for="email"><small>Mail (required)</small></label>
          </p>
          <p>
            <textarea name="pesan" cols="100%" class="m-wrap" placeholder="Pesan" rows="4"></textarea>
            <label for="comment" style="display:none;"><small>Pesan (required)</small></label>
          </p>
          <p><img src="captcha.php" /><br />
            <input type="text" name="kode" size="10" class="m-wrap" placeholder="Kode Captcha" /><br />
            <label for="email"><small>masukan kode diatas</small></label>
          </p>
          <p>
            <input name="submit" type="submit" class="m-btn green-stripe" value="Kirim Buku Tamu" />
            &nbsp;
            <input name="reset" type="reset" class="m-btn red-stripe" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>
      </div>
    </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}