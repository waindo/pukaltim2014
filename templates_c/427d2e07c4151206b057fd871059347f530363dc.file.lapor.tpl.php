<?php /* Smarty version Smarty-3.1.15, created on 2014-08-05 11:09:43
         compiled from "templates\sda\lapor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1140453e086d0e8ef50-54952100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '427d2e07c4151206b057fd871059347f530363dc' => 
    array (
      0 => 'templates\\sda\\lapor.tpl',
      1 => 1407229780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1140453e086d0e8ef50-54952100',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53e086d100b713_30139712',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e086d100b713_30139712')) {function content_53e086d100b713_30139712($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a>/ Informasi dari masyarakat</p>
    <h1>Pelaporan Bencana Banjir Online</h1>
    <h2>Silahkan Masukkan Informasi Anda</h2>
    <div align="center">
	<form name="form1" method="post" action="lapor.php">
	<table width="510"  align="left" cellpadding="1" cellspacing="1" >

    <tr bgcolor="#FFFFFF">
      <td height="40">Nama </td>
      <td>
      <input name="nama" type="text" id="nama" ></td>
    </tr>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="100">Alamat </td>
      <td>
      <textarea name="alamat" type="text" id="alamat" cols = "45" rows ="6"> </textarea></td>
    </tr>
	<tr bgcolor="#FFFFFF">
      <td height="40">Jenis Kejadian </td>
      <td>
          <select name="jk" id="jk">
            <<?php ?>?php
			$cn=mysql_connect('localhost','root','') or die(mysql_error());
			mysql_select_db('sda_db',$cn) or die(mysql_error());
			$sql = "SELECT * FROM codes WHERE codesheads = 1 AND codescodes <> 0 ORDER BY codesdesc1 ASC";
			$rs = mysql_query($sql) or die(mysql_error());

			while($row = mysql_fetch_array($rs)){
			echo "<option value='$row["codescodes"]'>'$row["codesdesc1"]'</option>";
			}mysql_free_result($rs);

			?<?php ?>>

        </select></td>
    </tr>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="140">Lokasi Kejadian </td>
      <td>
      <textarea name="lokasi" type="text" id="lokasi" cols="45" rows ="7"></textarea></td>
    </tr>
	<tr bgcolor="#FFFFFF">
      <td height="140">Deskripsi Kejadian </td>
      <td>
      <textarea name="des" type="text" id="des" cols ="45" rows="8"></textarea></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>&nbsp;</td>
      <td height="50"><input type="submit" name="Submit" value="Laporkan!"></td>
    </tr>
    </table></form></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
