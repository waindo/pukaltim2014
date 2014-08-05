<?php /* Smarty version Smarty-3.1.15, created on 2013-12-07 13:48:59
         compiled from "data-bendungan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2632552a3156ce3afc3-92795533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a926d653fe2bbe01234bd0def101d3e671b7a9cd' => 
    array (
      0 => 'data-bendungan.tpl',
      1 => 1386420536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2632552a3156ce3afc3-92795533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a3156cf160b3_48363048',
  'variables' => 
  array (
    'judul' => 0,
    'databendungan' => 0,
    'bendungan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a3156cf160b3_48363048')) {function content_52a3156cf160b3_48363048($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a>/ Data Prasarana SDA</p>
    <h1>Data Prasarana SDA</h1>
    <h2><?php echo $_smarty_tpl->tpl_vars['judul']->value;?>
</h2>
    <div style="Width: 100%; overflow-x: scroll;">
 	<table border="1" class="gradienttable">
    <tr>
    	<th rowspan="2">Kode Bendung</th>
        <th rowspan="2">Nama Bendung</th>
        <th rowspan="2">Sungai</th>
        <th rowspan="2">DAS</th>
        <th rowspan="2">WS</th>
        <th colspan="3">Lokasi</th>
        <th rowspan="2">Tahun Dibangun</th>
        <th rowspan="2">Tahun Selesai Konstruksi</th>
        <th rowspan="2">Tahun Rehabilitasi</th>
        <th rowspan="2">Tipe Bendung</th>
        <th rowspan="2">Tinggi Bendung (m)</th>
        <th rowspan="2">Lebar Bendung (m)</th>
        <th rowspan="2">Pemanfaatan Irigasi (Ha)</th>
        <th rowspan="2">Pengelola</th>
        <th rowspan="2">Keterangan</th>
    </tr>
    <tr>
    	<th>Kabupaten/Kota</th>
        <th>Kecamatan</th>
        <th>Desa</th>
    </tr>
    <tr>
    <?php  $_smarty_tpl->tpl_vars['bendungan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bendungan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['databendungan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bendungan']->key => $_smarty_tpl->tpl_vars['bendungan']->value) {
$_smarty_tpl->tpl_vars['bendungan']->_loop = true;
?>
    	<td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['kode_bendung'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['nama'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['sungai'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['das'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['ws'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['kota'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['kecamatan'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['desa'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['thn_bangun'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['thn_selesai'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['thn_rehab'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['tipe'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['tinggi'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['lebar'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['pemanfaatan'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['pengelola'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['keterangan'];?>
</td>
    <?php } ?>
    </tr>
    
    </table></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
