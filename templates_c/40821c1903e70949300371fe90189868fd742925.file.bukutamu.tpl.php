<?php /* Smarty version Smarty-3.1.15, created on 2013-11-26 15:32:13
         compiled from "templates\krs\bukutamu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4992529404d8c07065-10641291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40821c1903e70949300371fe90189868fd742925' => 
    array (
      0 => 'templates\\krs\\bukutamu.tpl',
      1 => 1385476328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4992529404d8c07065-10641291',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529404d8c39e29_36254345',
  'variables' => 
  array (
    'bukutamu' => 0,
    'images' => 0,
    'r_bukutamu' => 0,
    'beritalainnya' => 0,
    'beritalain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529404d8c39e29_36254345')) {function content_529404d8c39e29_36254345($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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

<div class="wrapper row4">
  <div id="container" class="clear">
    <div id="content">
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
/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#"><?php echo $_smarty_tpl->tpl_vars['r_bukutamu']->value['nama'];?>
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
            <input type="text" name="nama" size="22" />
            <label for="name"><small>Nama (required)</small></label>
          </p>
          <p>
            <input type="text" name="email" size="22" />
            <label for="email"><small>Mail (required)</small></label>
          </p>
          <p>
            <textarea name="pesan" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small>Pesan (required)</small></label>
          </p>
          <p><img src="captcha.php" /><br />
            <input type="text" name="kode" size="10" /><br />
            <label for="email"><small>masukan kode diatas</small></label>
          </p>
          <p>
            <input name="submit" type="submit" value="Kirim Buku Tamu" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>
      </div>
    </div>
    <div id="column">
      <div class="subnav">
        <h2>Info Lainnya</h2>
        <ul>
        <?php  $_smarty_tpl->tpl_vars['beritalain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['beritalain']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['beritalainnya']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['beritalain']->key => $_smarty_tpl->tpl_vars['beritalain']->value) {
$_smarty_tpl->tpl_vars['beritalain']->_loop = true;
?>
          <li><a href="post-<?php echo $_smarty_tpl->tpl_vars['beritalain']->value['id_berita'];?>
-<?php echo $_smarty_tpl->tpl_vars['beritalain']->value['judul_seo'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['beritalain']->value['judul'];?>
</a></li>
        <?php } ?>
        </ul>
      </div>
      </div>
    <div class="clear"></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
