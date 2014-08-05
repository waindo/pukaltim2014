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
    <div class="row content">
		<p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / Kontak</p>
        <h1>Kontak Kami</h1>
        <div class="contactinfo">
                    	<div class="cont_map">
                        	<iframe width="50%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=jalan+tengkawang,+samarinda,kalimantan+timur,indonesia&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=42.85226,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Jalan+Tengkawang,+Sungai+Kunjang,+Samarinda,+Kalimantan+Timur+75243,+Indonesia&amp;ll=-0.50191,117.1137&amp;spn=0.00663,0.010568&amp;t=m&amp;z=14&amp;output=embed"></iframe>
                        </div>
                        
                    </div>
        			<div class="span4">
                    <h1>Alamat Kantor</h1>
                    <b>BIDANG SUMBER DAYA AIR xxx<br />
                    DINAS PEKERJAAN UMUM PROVINSI KALTIM</b><br />
                    Jl. Tengkawang No.1 Gedung A Lantai 1<br />
                    Samarinda - Kalimantan Timur<br />
                    Telp. 0541 276246<br />
                    Fax. 0541 276237<br />
                    e-mail : info@hidrologikaltim.com 
                    
                    </div>
                    <div class="span4">
                    <h1>Buku Tamu</h1>
                        <form method="post" name="form" onSubmit="return valkomen(this)" action="act_bukutamu.php">
                        <input name="nama" type="text" class="m-wrap" placeholder="Nama" />
                        <input type="text" class="m-wrap" name="email" placeholder="Email" />
                        <textarea class="m-wrap" placeholder="Pesan" rows="3" name="pesan"></textarea><br/>
                        <img src="captcha.php" /><br/>
                        <input type="text" name="kode" class="m-wrap" placeholder="Masukan kode diatas" size="10" /><br />                        
                        <p align="right" style="margin-right:150px;"><input type="submit" class="m-btn blue-stripe" value="Send" /></p>
                        </form></div>
	</div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}