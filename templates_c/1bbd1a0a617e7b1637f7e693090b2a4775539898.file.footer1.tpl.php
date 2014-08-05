<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 05:47:51
         compiled from "templates\sda\footer1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8519533f7ce704dea9-67362327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bbd1a0a617e7b1637f7e693090b2a4775539898' => 
    array (
      0 => 'templates\\sda\\footer1.tpl',
      1 => 1396669538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8519533f7ce704dea9-67362327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bukutamu' => 0,
    'r_bukutamu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533f7ce70cf525_18176546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533f7ce70cf525_18176546')) {function content_533f7ce70cf525_18176546($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'libs/php/smarty/plugins\\modifier.date_format.php';
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
</body>
</html><?php }} ?>
