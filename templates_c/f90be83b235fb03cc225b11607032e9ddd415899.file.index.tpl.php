<?php /* Smarty version Smarty-3.1.15, created on 2013-11-24 08:41:54
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29423529055a2ca5855-46047643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90be83b235fb03cc225b11607032e9ddd415899' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1385278907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29423529055a2ca5855-46047643',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529055a2e7dd98_96936483',
  'variables' => 
  array (
    'slider' => 0,
    'itemslider' => 0,
    'databerita' => 0,
    'entry' => 0,
    'fototerbaru' => 0,
    'entryberita' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529055a2e7dd98_96936483')) {function content_529055a2e7dd98_96936483($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'libs/php/smarty/plugins\\modifier.truncate.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div id="featured_slide">
    <!-- ####################################################################################################### -->
    <dl class="slidedeck">
      <?php  $_smarty_tpl->tpl_vars['itemslider'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemslider']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemslider']->key => $_smarty_tpl->tpl_vars['itemslider']->value) {
$_smarty_tpl->tpl_vars['itemslider']->_loop = true;
?>
      <dt><?php echo $_smarty_tpl->tpl_vars['itemslider']->value['judul'];?>
</dt>
      <dd><img src="assets/slider/<?php echo $_smarty_tpl->tpl_vars['itemslider']->value['gambar'];?>
"/></dd>
      <?php } ?>	
    </dl>
  </div>
  <!-- ####################################################################################################### -->
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <h2 class="title">Populer Berita</h2>
        <div id="hpage_quicklinks">
          <ul class="clear">
		  <?php  $_smarty_tpl->tpl_vars["entry"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["entry"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['databerita']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["entry"]->key => $_smarty_tpl->tpl_vars["entry"]->value) {
$_smarty_tpl->tpl_vars["entry"]->_loop = true;
?>
            <li><a href="aaa"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['judul'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
          <?php }
if (!$_smarty_tpl->tpl_vars["entry"]->_loop) {
?>
		  Tidak ada judul
		  <?php } ?>
		  </ul>
        </div>
        <h2 class="title">Foto Kegiatan Terbaru</h2>
        <div id="hpage_gallery">
          <ul class="clear">
          <?php  $_smarty_tpl->tpl_vars["foto"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["foto"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fototerbaru']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["foto"]->key => $_smarty_tpl->tpl_vars["foto"]->value) {
$_smarty_tpl->tpl_vars["foto"]->_loop = true;
?>
            <li><a href="assets/images/demo/175x130.gif" rel="prettyPhoto[gallery2]"><img src="assets/images/demo/175x130.gif" alt="" /></a></li>
          <?php } ?>
          </ul>
        </div>
        <h2 class="title">Keep Up With What's Happening</h2>
        <div id="hpage_socialize">
          <ul>
            <li><span>Facebook:</span> <a href="#">www.facebook.com/myhandel</a></li>
            <li><span>Twitter:</span> <a href="#">www.twitter.com/myhandel</a></li>
            <li class="last"><span>LinkedIn:</span> <a href="#">www.linkedin.com/myhandel</a></li>
          </ul>
          <p><strong>Subscribe To Our Newsletter</strong></p>
          <p>Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit.</p>
          <form action="#" method="post">
            <fieldset>
              <legend>Newsletter Signup:</legend>
              <input type="text" id="newsletter" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
              <input type="image" id="subscribe" src="images/sign-up.gif" alt="Submit" />
            </fieldset>
          </form>
          <p class="form_hint">* Please add name@domain.com to your trusted email list</p>
        </div>
      </div>
      <!-- ############### -->
      <div class="fl_right">
        <h2 class="title">Berita Terkini</h2>
        <div id="hpage_latestnews">
          <ul>
          <?php  $_smarty_tpl->tpl_vars["entryberita"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["entryberita"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['databerita']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["entryberita"]->key => $_smarty_tpl->tpl_vars["entryberita"]->value) {
$_smarty_tpl->tpl_vars["entryberita"]->_loop = true;
?>
            <li>
              <h2><?php echo $_smarty_tpl->tpl_vars['entryberita']->value['judul'];?>
</h2>
              <div class="imgl"><img src="assets/foto_berita/small_<?php echo $_smarty_tpl->tpl_vars['entryberita']->value['gambar'];?>
" /></div>
              <p><?php echo $_smarty_tpl->tpl_vars['entryberita']->value['hari'];?>
,<?php echo $_smarty_tpl->tpl_vars['entryberita']->value['tanggal'];?>
 </p>
              <p class="latestnews" align="justify">
              <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['entryberita']->value['isi_berita'],300);?>

              </p>
              <p class="readmore"><a href="berita-<?php echo $_smarty_tpl->tpl_vars['entryberita']->value['id_berita'];?>
-<?php echo $_smarty_tpl->tpl_vars['entryberita']->value['judul_seo'];?>
.html">Baca Selengkapnya &raquo;</a></p>
            </li>
            <?php } ?>
            
          </ul>
        </div>
        <div id="hpage_specials" class="clear">
          <ul>
            <li>
              <h2 class="title">Virtual Tour</h2>
              <div class="box">
                <div class="imgholder"><img src="images/demo/160x160.gif" alt="" /></div>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phasellus sagittitor ant curabiturpis molesuada amet. Tricessem faucibulum sit sed eleifendisse accumsan justo in tor vel purus.</p>
                <p class="readmore"><a href="#">Take The Tour &raquo;</a></p>
              </div>
            </li>
            <li>
              <h2 class="title">Sporting Activities</h2>
              <div class="box">
                <p><strong>Jan 01:</strong> <a href="#">Rugby</a></p>
                <div class="imgholder"><img src="images/demo/160x80.gif" alt="" /></div>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget.</p>
              </div>
              <div class="box">
                <p><strong>Jan 06:</strong> <a href="#">Volleyball</a></p>
                <div class="imgholder"><img src="images/demo/160x80.gif" alt="" /></div>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget.</p>
              </div>
            </li>
            <li class="last">
              <h2 class="title">Upcoming Events</h2>
              <div class="box">
                <p><a href="#">Magna phasellus</a></p>
                <p>Monday 21st January</p>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phasellus sagittitor ant curabiturpis.</p>
              </div>
              <div class="box">
                <p><a href="#">Sentumquisque morbi dui congue tincidunt eu quis</a></p>
                <p>Monday 21st January</p>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phasellus sagittitor ant.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
