<?php /* Smarty version Smarty-3.1.15, created on 2014-07-18 03:26:48
         compiled from "templates\sda\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160952963fea22c815-63385622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cd09bf5ae611a1415b68ce61eb91fb29aa0e07e' => 
    array (
      0 => 'templates\\sda\\sidebar.tpl',
      1 => 1403505728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160952963fea22c815-63385622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52963fea232e77_24158000',
  'variables' => 
  array (
    'images' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52963fea232e77_24158000')) {function content_52963fea232e77_24158000($_smarty_tpl) {?><div class="span3" style="margin-left:15px;">
       	   <div class="widget">
              <h4 class="headng backcolr">Sign In</h4>
              <div class="formlogin">
              <?php if ($_SESSION['username']=='') {?>
               <form action="cek_login.php" method="post">
                 	<input type="text" class="m-wrap" name="username" placeholder="username" />
                    <input type="password" class="m-wrap" name="password" placeholder="password" />
                    <input type="submit" class="m-btn blue-stripe" value="Sign In"  />
                 </form>
              <?php } else { ?>
              <p style="padding-bottom:10px;">Anda sudah login sebagai : <?php echo $_SESSION['nama'];?>
<br /><a href="logout.php"><input type="button" class="m-btn blue-stripe" value="Logout" /></a></p>
              <?php }?>
              </div>
           </div>
           	 
           <div class="widget" style="background-color:transparent;border:none;">
				<div id='cssmenu'>
<ul>
   <li class="box" style="background-color: #2B5282;  padding:12px 8px 12px 8px; color:#FFF; font-size:16px; text-align:center;"><b>Data Prasarana SDA</b></li>
   <li class='has-sub'><a href='#'><span>Irigasi</span></a>
      <ul>
         <li><a href='prasarana-1-Jaringan-irigas.html'><span>Jaringan Irigasi</span></a></li>
         <li><a href='prasarana-2-Bendung.html'><span>Bendung</span></a></li>
         <li class='last'><a href='prasarana-3-Bendungan.html'><span>Bendungan</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Air Baku</span></a>
      <ul>
         <li><a href='prasarana-4-Bendungan.html'><span>Bendungan</span></a></li>
         <li><a href='prasarana-5-Sumur-dalam.html'><span>Sumur Dalam</span></a></li>
         <li><a href='prasarana-6-Embung.html'><span>Embung</span></a></li>
         <li class='last'><a href='prasarana-7-Bendung.html'><span>Bendung</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Rawa</span></a>
      <ul>
         <li class='last'><a href='prasarana-8-Jaringan-rawa.html'><span>Jaringan Tata Air Rawa</span></a></li>
      </ul>
   </li>
   <li class='has-sub last'><a href='#'><span>Pantai</span></a>
      <ul>
         <li class='last'><a href='prasarana-9-Pengaman-Pantai.html'><span>Pengaman Pantai</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Pengendalian Banjir</span></a>
      <ul>
         <li><a href='prasarana-10-pengendali-banjir.html'><span>Sistem Pengendali Banjir</span></a></li>
         <li><a href='prasarana-11-bendali.html'><span>Bendali</span></a></li>
         <li class='last'><a href='prasarana-12-polder.html'><span>Polder</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Danau</span></a>
      <ul>
         <li class='last'><a href='page-26-konservasi-danau.html'><span>Konservasi Danau</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Waduk</span></a>
      <ul>
         <li class='last'><a href='page-27-konservasi-waduk.html'><span>Konservasi Waduk</span></a></li>
      </ul>
   </li>
</ul>
</div>
			 </div>
             
                   <div class="widget" style="background-color:transparent;border:none;">
				<div id='cssmenu'>
<ul>
      <li class="box" style="background-color: #2B5282; padding:12px 8px 12px 8px; color:#FFF; font-size:16px; text-align:center;"><b>Data Hidrologi SDA</b></li>
   
   <li><a href='page-23-wilayah-sungai.html'><span>Wilayah Sungai</span></a></li>
   <li class='has-sub'><a href='#'><span>Neraca</span></a>
      <ul>
         <li style="background-color:#FFF;"><a href='page-24-ws-berau-kelay.html'><span>WS. Berau Kelay</span></a></li>
         <li style="background-color:#FFF;"><a href='page-25-ws-kandilo.html'><span>WS. Kandilo</span></a></li>
         <li style="background-color:#FFF;"><a href='#'><span>WS. Karangan</span></a></li>
         <li class='last' style="background-color:#FFF;"><a href='#'><span>WS. Kayan</span></a></li>
      </ul>
   </li>
   <li><a href='hidrologi-das.html'><span>DAS</span></a></li>
   <li><a href='hidrologi.html'><span>POS Hidrologi</span></a></li>
</ul>
</div>
			 </div>
                
                   	<div class="widget">
                        <div class="textwidget">
                        	<a href="http://sda.pu.go.id/" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
/link_ditjen.jpg" alt="" width="270" /></a>
                        </div>
                   </div>
                   
                   <div class="widget">
                        <div class="textwidget">
                        	<a href="http://pu.kaltimprov.go.id/" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
/link_pu.jpg" alt="" width="270" /></a>
                        </div>
                   </div>
                   
                    <div class="widget">
                        <div class="textwidget">
                        	<a href="http://bwskal2.pdsda.net/" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
/link_bws.jpg" alt="" width="270" /></a>
                        </div>
                   </div>
                   
                   <div class="widget">
                        <div class="textwidget">
                        	<a href="http://www.lapanrs.com/home" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
/lapan.jpg" alt="" width="270" /></a>
                        </div>
                   </div>
       
         </div>
			
		<div class="span12">
			
		</div>
	</div>
    <div class="clear"></div>
<?php }} ?>
