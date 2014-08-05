<?php /* Smarty version Smarty-3.1.15, created on 2013-12-03 09:35:23
         compiled from "templates\sda\bukutamu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30360529d8ec3a6ced4-89339692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '671cc3e9f1af0719d6a2f23a5b1354467875f8eb' => 
    array (
      0 => 'templates\\sda\\bukutamu.tpl',
      1 => 1386059720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30360529d8ec3a6ced4-89339692',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529d8ec3b31e88_21928399',
  'variables' => 
  array (
    'bukutamu' => 0,
    'images' => 0,
    'r_bukutamu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529d8ec3b31e88_21928399')) {function content_529d8ec3b31e88_21928399($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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

<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / Buku Tamu</p>
      <div id="comments">
        <h2>Yang telang mengisi daftar Buku Tamu : </h2>
        <ul class="commentlist">
        <?php  $_smarty_tpl->tpl_vars['r_bukutamu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r_bukutamu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bukutamu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r_bukutamu']->key => $_smarty_tpl->tpl_vars['r_bukutamu']->value) {
$_smarty_tpl->tpl_vars['r_bukutamu']->_loop = true;
?>
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#"><?php echo $_smarty_tpl->tpl_vars['r_bukutamu']->value['nama'];?>
</a></span> <span class="wrote">menulis:</span></div>
            <div class="submitdate"><a href="#"><?php echo $_smarty_tpl->tpl_vars['r_bukutamu']->value['tgl'];?>
, <?php echo $_smarty_tpl->tpl_vars['r_bukutamu']->value['jam'];?>
</a></div>
            <p><?php echo $_smarty_tpl->tpl_vars['r_bukutamu']->value['pesan'];?>
</p>
          </li>
          <?php } ?>
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
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
