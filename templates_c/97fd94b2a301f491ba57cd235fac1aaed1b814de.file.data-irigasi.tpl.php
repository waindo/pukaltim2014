<?php /* Smarty version Smarty-3.1.15, created on 2014-10-30 07:43:05
         compiled from "templates\sda\data-irigasi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2080552a319444c7b29-70596658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97fd94b2a301f491ba57cd235fac1aaed1b814de' => 
    array (
      0 => 'templates\\sda\\data-irigasi.tpl',
      1 => 1403505798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2080552a319444c7b29-70596658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a319445a61a8_00933606',
  'variables' => 
  array (
    'judul' => 0,
    'datairigasi' => 0,
    'irigasi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a319445a61a8_00933606')) {function content_52a319445a61a8_00933606($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
    	<th rowspan="2">Kode Jaringan</th>
        <th rowspan="2">Nama Jaringan</th>
        <th rowspan="2">Lokasi (Kab/Kota)</th>
        <th rowspan="2">Luas Daerah (Ha)</th>
        <th rowspan="2">Tahun Pelaksanaan</th>
        <th colspan="2">Saluran Pembawa Primer</th>
        <th colspan="2">Saluran Pembawa Sekunder</th>
        <th rowspan="2">Saluran Pembuang(m)</th>
        <th rowspan="2">Bangunan Bagi Sadap (Buah)</th>
        <th rowspan="2">Bangunan Pelengkap (Buah)</th>
        <th rowspan="2">Keterangan</th>
    </tr>
    <tr>
    	<th>Tanah Primer</th>
        <th>Linning Primer</th>
        <th>Tanah Sekunder</th>
        <th>Linning Sekunder</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['irigasi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['irigasi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datairigasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['irigasi']->key => $_smarty_tpl->tpl_vars['irigasi']->value) {
$_smarty_tpl->tpl_vars['irigasi']->_loop = true;
?>
    <tr>
    	<td><?php echo $_smarty_tpl->tpl_vars['irigasi']->value['kode_jaringan'];?>
</td>
        <td><a href="assets/foto_booklet/<?php echo $_smarty_tpl->tpl_vars['irigasi']->value['booklet_jaringan'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['irigasi']->value['nama_jaringan'];?>
</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['irigasi']->value['lokasi_jaringan'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['irigasi']->value['luas_jaringan'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['irigasi']->value['tahun'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['irigasi']->value['tnh_primer'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['irigasi']->value['inning_primer'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['irigasi']->value['tnh_sekunder'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['irigasi']->value['linning_sekunder'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['irigasi']->value['sp'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['irigasi']->value['bs'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['irigasi']->value['bp'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['irigasi']->value['keterangan'];?>
</td>
    </tr>
    <?php } ?>
    
    
    </table></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
