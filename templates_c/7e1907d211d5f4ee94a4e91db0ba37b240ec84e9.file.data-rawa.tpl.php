<?php /* Smarty version Smarty-3.1.15, created on 2013-11-13 19:50:57
         compiled from "templates\sda\data-rawa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1855252a33243796f93-26796400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e1907d211d5f4ee94a4e91db0ba37b240ec84e9' => 
    array (
      0 => 'templates\\sda\\data-rawa.tpl',
      1 => 1386453242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1855252a33243796f93-26796400',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a3324385d561_25870645',
  'variables' => 
  array (
    'judul' => 0,
    'datarawapantai' => 0,
    'rawapantai' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a3324385d561_25870645')) {function content_52a3324385d561_25870645($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
    	<th rowspan="2">Kode Pengaman Pantai</th>
        <th rowspan="2">Nama Daerah Rawa</th>
        <th rowspan="2">Luas Daerah Rawa (Ha)</th>
        <th rowspan="2">Jenis Rawa</th>
        <th colspan="3">Lokasi</th>
        <th rowspan="2">Tahun Pelaksanaan</th>
        <th rowspan="2">Panjang Penanganan (m)</th>
        <th rowspan="2">Keterangan</th>
    </tr>
    <tr>
    	<th>Kabupaten/Kota</th>
        <th>Kecamatan</th>
        <th>Desa</th>
    </tr>
    
    <?php  $_smarty_tpl->tpl_vars['rawapantai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rawapantai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datarawapantai']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rawapantai']->key => $_smarty_tpl->tpl_vars['rawapantai']->value) {
$_smarty_tpl->tpl_vars['rawapantai']->_loop = true;
?>
    <tr>
    	<td><?php echo $_smarty_tpl->tpl_vars['rawapantai']->value['kode_rawapantai'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['rawapantai']->value['nama'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['rawapantai']->value['luas_rawa'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['rawapantai']->value['jenis_rawa'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['rawapantai']->value['kota'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['rawapantai']->value['kecamatan'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['rawapantai']->value['desa'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['rawapantai']->value['thn_Pelaksanaan'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['rawapantai']->value['panjang'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['rawapantai']->value['keterangan'];?>
</td>
    </tr>
    <?php } ?>
    </table></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
