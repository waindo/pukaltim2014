<?php /* Smarty version Smarty-3.1.15, created on 2013-11-09 23:39:25
         compiled from "templates\sda\data-pantai.tpl" */ ?>
<?php /*%%SmartyHeaderCode:773452a333e12f9528-27322168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078c8f10a597ef84046f5f334c224a74ea5347c9' => 
    array (
      0 => 'templates\\sda\\data-pantai.tpl',
      1 => 1386453221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '773452a333e12f9528-27322168',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a333e13c0e15_70812245',
  'variables' => 
  array (
    'judul' => 0,
    'datarawapantai' => 0,
    'rawapantai' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a333e13c0e15_70812245')) {function content_52a333e13c0e15_70812245($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
        <th rowspan="2">Nama Pantai</th>
        <th colspan="3">Lokasi</th>
        <th rowspan="2">Tahun Pelaksanaan</th>
        <th rowspan="2">Tipe Pengamanan</th>
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
         <td><?php echo $_smarty_tpl->tpl_vars['rawapantai']->value['kota'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['rawapantai']->value['kecamatan'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['rawapantai']->value['desa'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['rawapantai']->value['thn_Pelaksanaan'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['rawapantai']->value['tipe'];?>
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
