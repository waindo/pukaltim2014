<?php /* Smarty version Smarty-3.1.15, created on 2014-06-13 10:57:39
         compiled from "templates\sda\progreskegiatan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1883852a0b8b8154038-48478769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b16953d28ea5d22d477ad7e16cae470378becf0' => 
    array (
      0 => 'templates\\sda\\progreskegiatan.tpl',
      1 => 1389485471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1883852a0b8b8154038-48478769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a0b8b82207a1_49676621',
  'variables' => 
  array (
    'bln' => 0,
    'dataprogramberjalan' => 0,
    'programberjalan' => 0,
    'dataprogres' => 0,
    'progres' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a0b8b82207a1_49676621')) {function content_52a0b8b82207a1_49676621($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript">
function pilihbulan()
    {
    var bulan=(document.FormBulan.bulan.value);
    var menuju="progres-sda.php?bulan="+bulan+"";
    location.href=menuju;
}
</script>

<div class="row">
  <div class="span9">
    <div class="content" style="padding:15px 15px 0 15px">
        <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / Progres Kegiatan</p>
   <h2>Progres Kegiatan SDA</h2>
     <div style="border:1px solid #CCC; padding:20px 10px 10px 10px; margin-bottom:10px;">
     <form action="" method="post" name="FormBulan">
     <table>
     <tr>
     	<td>Pilih Bulan</td>
        <td>
        <select name="bulan" class="m-wrap" onchange="pilihbulan();" style="margin:5px 20px 0 20px;width:120px;">
     	<?php if ($_smarty_tpl->tpl_vars['bln']->value!='') {?>
        	<option value="<?php echo $_smarty_tpl->tpl_vars['bln']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['bln']->value;?>
</option>
        <?php }?>
     <option value="">Pilih Bulan</option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
     <option value="6">6</option>
     <option value="7">7</option>
     <option value="8">8</option>
     <option value="9">9</option>
     <option value="10">10</option>
     <option value="11">11</option>
     <option value="12">12</option>
     
     </select></td>
     </tr>
     </table>
     </form>
     </div>
          <div style="border:1px solid #CCC; padding:20px 10px 10px 10px; margin-bottom:10px;">
     <form class="form-horizontal" method="post" action="progres-sda.php?bulan=<?php echo $_smarty_tpl->tpl_vars['bln']->value;?>
">
    	<table width="100%" border="0">
        <tr>
        	<td width="80px" style="padding-bottom:10px;">Program</td>
            <td>
            <select name="program" class="m-wrap" style="width:70%;">
            	<option value="">-- Pilih Program --</option>
     			<?php  $_smarty_tpl->tpl_vars['programberjalan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['programberjalan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataprogramberjalan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['programberjalan']->key => $_smarty_tpl->tpl_vars['programberjalan']->value) {
$_smarty_tpl->tpl_vars['programberjalan']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['programberjalan']->value['id_program'];?>
"><?php echo $_smarty_tpl->tpl_vars['programberjalan']->value['nama_program'];?>
</option>
                <?php } ?>
     		</select>
            </td>
        </tr>
        <tr>
        	<td width="80px" style="padding-bottom:10px;">Pekerjaan</td>
            <td><input type="text" name="pekerjaan" class="m-wrap" style="width:60%" placeholder="Nama Pekerjaan" /></td>
        </tr>
        <tr>
        	<td width="80px" style="padding-bottom:10px;">Lokasi</td>
            <td><input type="text" name="lokasi" class="m-wrap" style="width:30%" placeholder="Lokasi Pekerjaan" /></td>
        </tr>
        <tr>
        	<td width="80px" style="padding-bottom:10px;"></td>
            <td><input type="submit" name="tampil" class="m-btn green-stripe" style="width:120px" value="Tampilkan" /></td>
        </tr>
        </table>
     </form>
     </div>   
    <table border="1" class="gradienttable">
    <tr>
    <th rowspan="2">No</th>
    <th rowspan="2">Progam</th>
    <th rowspan="2">Pekerjaan</th>
    <th rowspan="2">Lokasi</th>
    <th rowspan="2">Rekanan</th>
    <th colspan="3">Progres Fisik</th>
    <th rowspan="2">Progres Keuangan</th>
    </tr>
    <tr>
    <th>Recana</th>
    <th>Realisasi</th>
    <th>Deviasi</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['progres'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['progres']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataprogres']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['progres']->key => $_smarty_tpl->tpl_vars['progres']->value) {
$_smarty_tpl->tpl_vars['progres']->_loop = true;
?>
    <tr>
    	<td width="2%"><?php echo $_smarty_tpl->tpl_vars['progres']->value['no'];?>
</td>
    	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['progres']->value['nama_program'];?>
</td>
        <td width="30%"><a href="detailkeg-<?php echo $_smarty_tpl->tpl_vars['progres']->value['id_kegiatan'];?>
-<?php echo $_smarty_tpl->tpl_vars['progres']->value['pekerjaan'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['progres']->value['pekerjaan'];?>
</a></td>
        <td width="15%"><?php echo $_smarty_tpl->tpl_vars['progres']->value['lokasi'];?>
</td>
        <td width="15%"><?php echo $_smarty_tpl->tpl_vars['progres']->value['rekanan'];?>
</td>
        <td width="5%"><?php echo $_smarty_tpl->tpl_vars['progres']->value['rencana'];?>
</td>
        <td width="5%"><?php echo $_smarty_tpl->tpl_vars['progres']->value['realisasi'];?>
</td>
        <td width="5%"><?php echo $_smarty_tpl->tpl_vars['progres']->value['deviasi'];?>
</td>
        <td width="5%"><?php echo $_smarty_tpl->tpl_vars['progres']->value['keuangan'];?>
</td>
    </tr>
    
    <?php } ?>
   </table>
    
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
