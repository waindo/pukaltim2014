<?php /* Smarty version Smarty-3.1.15, created on 2013-12-07 00:16:05
         compiled from "detail-kegiatan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:391152a24dda2929c2-13219002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc54f9aca6f274d4b35f60b8fab4bf3521d5e517' => 
    array (
      0 => 'detail-kegiatan.tpl',
      1 => 1386371754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '391152a24dda2929c2-13219002',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a24dda328dc4_56051619',
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
<?php if ($_valid && !is_callable('content_52a24dda328dc4_56051619')) {function content_52a24dda328dc4_56051619($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="row">
  <div class="span9">
    <div class="content">
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
"></td>
     </tr>
     </table>
    <p style="font-size:14px;margin-top:15px;"><img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
/map-marker.png" /> <b>Peta Lokasi</b> :</p>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
