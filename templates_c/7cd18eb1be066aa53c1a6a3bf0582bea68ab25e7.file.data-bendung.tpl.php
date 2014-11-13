<?php /* Smarty version Smarty-3.1.15, created on 2014-10-30 07:43:14
         compiled from "templates\sda\data-bendung.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100652a3ad381cd222-75937110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cd18eb1be066aa53c1a6a3bf0582bea68ab25e7' => 
    array (
      0 => 'templates\\sda\\data-bendung.tpl',
      1 => 1403505806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100652a3ad381cd222-75937110',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a3ad3831b3a7_83651449',
  'variables' => 
  array (
    'judul' => 0,
    'databendungan' => 0,
    'bendungan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a3ad3831b3a7_83651449')) {function content_52a3ad3831b3a7_83651449($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
    
    <?php  $_smarty_tpl->tpl_vars['bendungan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bendungan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['databendungan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bendungan']->key => $_smarty_tpl->tpl_vars['bendungan']->value) {
$_smarty_tpl->tpl_vars['bendungan']->_loop = true;
?>
    <tr>
    	<td><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['kode_bendung'];?>
</td>
        <td><a href="assets/foto_booklet/<?php echo $_smarty_tpl->tpl_vars['bendungan']->value['booklet'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['bendungan']->value['nama'];?>
</a></td>
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
        </tr>
    <?php } ?>
    
    </table></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
