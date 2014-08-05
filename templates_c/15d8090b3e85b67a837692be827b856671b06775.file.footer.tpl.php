<?php /* Smarty version Smarty-3.1.15, created on 2013-11-27 18:37:23
         compiled from "templates\krs\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71265291ab65da5424-42015702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15d8090b3e85b67a837692be827b856671b06775' => 
    array (
      0 => 'templates\\krs\\footer.tpl',
      1 => 1385512953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71265291ab65da5424-42015702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5291ab65e00b61_85742561',
  'variables' => 
  array (
    'identitas_alamat_kantor' => 0,
    'identitas_telp' => 0,
    'identitas_email' => 0,
    'identitas_nama_website' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5291ab65e00b61_85742561')) {function content_5291ab65e00b61_85742561($_smarty_tpl) {?>
<div class="wrapper row5">
  <div id="footer" class="clear">
    <!-- ####################################################################################################### -->
    <div class="foot_contact">
      <h2>Informasi Kontak</h2>
      <address>
      Alamat : <?php echo $_smarty_tpl->tpl_vars['identitas_alamat_kantor']->value;?>
<br />
      Samarinda<br />
      Kalimantan Timur
      </address>
      <ul>
        <li><strong>Telp:</strong> <?php echo $_smarty_tpl->tpl_vars['identitas_telp']->value;?>
</li>
        <li class="last"><strong>Email:</strong> <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['identitas_email']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['identitas_email']->value;?>
</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Link Website</h2>
      <ul>
        <li><a href="http://unmul.ac.id" target="_blank">Universitas Mulawarman</a></li>
        <li><a href="#">Fakultas Kehutanan Unmul</a></li>
      </ul>
    </div>
    
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2013 - <?php echo $_smarty_tpl->tpl_vars['identitas_nama_website']->value;?>
</p>
    <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
<script type="text/javascript">$('.slidedeck').slidedeck();</script>
</body>
</html><?php }} ?>
