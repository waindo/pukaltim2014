 <div class="row">
    <div id="footer" class="span12">
    
		<div class="span3" style="margin-right:35px">
			         <div class="textwidget">
                        <h4 class="headng colr">Office</h4>
                        <p>
                           	Dinas Pekerjaan Umum Provinsi Kalimantan Timur<br />
                            Jl.Tengkawang No. 1 Gedung A Lantai 1,<br />
                            Samarinda.<br />
                            Tel - 0541 276246<br />
                            Fax - 0541 276237<br />
                            e-mail : info@hidrologikaltim.com <br />
                        </p>
                </div>
		</div>
		<div class="span4">
        <h4 class="headng colr">Buku Tamu</h4>
        {foreach from=$bukutamu item='r_bukutamu'}
        	<blockquote>
				<p>
					{$r_bukutamu.pesan}
				</p> <small>{$r_bukutamu.nama} <cite>{$r_bukutamu.tgl|date_format:"%D"}</cite></small>
			</blockquote>
		  {/foreach}           
		</div>
        
		<div class="span3">
		 <div class="textwidget">
                        <h4 class="headng colr">Contact us</h4>
                        <input type="text" class="m-wrap" name="nama" placeholder="Name" />
                        <input type="text" class="m-wrap" name="email" placeholder="Email" />
                        <textarea class="m-wrap" placeholder="Messages" name="pesan"></textarea>
                        <img src="captcha.php" /><br />
            			<input type="text" name="kode" size="10" class="m-wrap" placeholder="Kode Captcha" /><br />
                        <input type="submit" class="m-btn blue-stripe" value="Send" />
                </div>

		</div>
	</div>
</div></div>

<script type="text/javascript" src="{$js}/js-image-slider.js"></script>
<script type="text/javascript" src="{$js}/m-dropdown.min.js"></script>
<script type="text/javascript" src="{$js}/m-radio.min.js"></script>
<script type="text/javascript" src="{$js}/less-1.3.3.min.js"></script>
<script src="{$js}/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="{$js}/jquery-slider.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript" src="{$js}/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" language="javascript" src="{$datatable}/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#tabel').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>
</body>
</html>