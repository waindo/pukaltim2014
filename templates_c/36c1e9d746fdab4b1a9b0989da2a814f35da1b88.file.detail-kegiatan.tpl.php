<?php /* Smarty version Smarty-3.1.15, created on 2014-03-05 01:34:52
         compiled from "templates\sda\detail-kegiatan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2429852a319c8092137-34632724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36c1e9d746fdab4b1a9b0989da2a814f35da1b88' => 
    array (
      0 => 'templates\\sda\\detail-kegiatan.tpl',
      1 => 1389485461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2429852a319c8092137-34632724',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a319c81a7ad6_07883129',
  'variables' => 
  array (
    'pekerjaan' => 0,
    'nama_program' => 0,
    'tahun' => 0,
    'lokasi' => 0,
    'rekanan' => 0,
    'kontrak' => 0,
    'foto' => 0,
    'images' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a319c81a7ad6_07883129')) {function content_52a319c81a7ad6_07883129($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="row">
  <div class="span9">
    <div class="content" style="padding:15px 15px 0 15px">
        <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> /<a href="kinerja.html"> Kegiatan</a> / <?php echo $_smarty_tpl->tpl_vars['pekerjaan']->value;?>
</p>
     <h2 style="background:#FF9; padding:2px 2px 2px 10px">Detail Pekerjaan BIDANG SUMBER DAYA AIR</h2>
     <table style="margin-left:10px;">
     <tr height="30px">
     	<td width="20%" style="font-size:14px;"><b>Program</b></td>
        <td style="font-size:14px;">: <?php echo $_smarty_tpl->tpl_vars['nama_program']->value;?>
</td>
     </tr>
     <tr height="30px">
     	<td width="15%" style="font-size:14px;"><b>Tahun</b></td>
        <td style="font-size:14px;">: <?php echo $_smarty_tpl->tpl_vars['tahun']->value;?>
</td>
     </tr>
     <tr height="30px">
     	<td width="15%" style="font-size:14px;"><b>Nama Pekerjaan</b></td>
        <td style="font-size:14px;">: <?php echo $_smarty_tpl->tpl_vars['pekerjaan']->value;?>
</td>
     </tr>
     <tr height="30px">
     	<td width="15%" style="font-size:14px;"><b>Lokasi</b></td>
        <td style="font-size:14px;">: <?php echo $_smarty_tpl->tpl_vars['lokasi']->value;?>
</td>
     </tr>
     <tr height="30px">
     	<td width="15%" style="font-size:14px;"><b>Rekanan</b></td>
        <td style="font-size:14px;">: <?php echo $_smarty_tpl->tpl_vars['rekanan']->value;?>
</td>
     </tr>
     <tr height="30px">
     	<td width="15%" style="font-size:14px;"><b>Nilai Kontrak</b></td>
        <td style="font-size:14px;">: Rp <?php echo $_smarty_tpl->tpl_vars['kontrak']->value;?>
</td>
     </tr>
     <tr height="30px">
     	<td width="15%" style="font-size:14px;"><b>Foto</b></td>
        <td style="font-size:14px;">: <img src="assets/foto_kegiatan/<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
" width="850px"></td>
     </tr>
     </table>
    <p style="font-size:14px;margin-top:15px;"><img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
/map-marker.png" /> <b>Peta Lokasi</b> :</p>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
