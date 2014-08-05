<?php /* Smarty version Smarty-3.1.15, created on 2014-07-18 03:26:48
         compiled from "templates\sda\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:699052963fea244c30-82439147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '894f7cb912050e2336dc8113e15ea29f82d28b50' => 
    array (
      0 => 'templates\\sda\\footer.tpl',
      1 => 1403505770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '699052963fea244c30-82439147',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52963fea249613_87535744',
  'variables' => 
  array (
    'bukutamu' => 0,
    'r_bukutamu' => 0,
    'js' => 0,
    'datatable' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52963fea249613_87535744')) {function content_52963fea249613_87535744($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'libs/php/smarty/plugins\\modifier.date_format.php';
?> <div class="row">
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
        <?php  $_smarty_tpl->tpl_vars['r_bukutamu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r_bukutamu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bukutamu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r_bukutamu']->key => $_smarty_tpl->tpl_vars['r_bukutamu']->value) {
$_smarty_tpl->tpl_vars['r_bukutamu']->_loop = true;
?>
        	<blockquote>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['r_bukutamu']->value['pesan'];?>

				</p> <small><?php echo $_smarty_tpl->tpl_vars['r_bukutamu']->value['nama'];?>
 <cite><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['r_bukutamu']->value['tgl'],"%D");?>
</cite></small>
			</blockquote>
		  <?php } ?>           
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

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/js-image-slider.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/m-dropdown.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/m-radio.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/less-1.3.3.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/jquery-slider.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['datatable']->value;?>
/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#tabel').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>
</body>
</html><?php }} ?>
