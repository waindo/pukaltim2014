<div class="row-fluid">
<div class="alert alert-success">
<h1>Hello, <?php echo $_SESSION['namalengkap'];?></h1>
            <p>Selamat Datang di Halaman Administrator Website, Silahkan pilih menu disamping kiri untuk pengelolaan Website Anda.</p>
</div>
</div>
<div class="row-fluid">
            <div class="span6">
              <h4>Agenda</h4>
              <?php
			  echo"<table class='table table-bordered' width='100%'><thead>
          <tr>
          <th>No.</th>
          <th>Tema</th>
          <th>Mulai</th>
          <th>Selesai</th>
          <th class='center'>#</th>
          </tr></thead><tbody>";
    if ($_SESSION[leveluser]=='admin'){
      $tampil=mysql_query("SELECT * FROM agenda ORDER BY id_agenda DESC LIMIT 3");
    }
    else{
      $tampil=mysql_query("SELECT * FROM agenda 
                           WHERE username='$_SESSION[namauser]'       
                           ORDER BY id_agenda DESC LIMIT 3");
    }

    $no = $posisi+1;
    while ($r=mysql_fetch_array($tampil)){
      $tgl_mulai   = tgl_indo($r[tgl_mulai]);
      $tgl_selesai = tgl_indo($r[tgl_selesai]);
      echo "<tr><td  width='25'>$no</td>
                <td  width=220>$r[tema]</td>
                <td >$tgl_mulai</td>
                <td >$tgl_selesai</td>
                <td>
				<a href=?module=agenda&act=editagenda&id=$r[id_agenda] title='Edit'><i class='icon-edit'></i></a>
	                  <a href=$aksi?module=agenda&act=hapus&id=$r[id_agenda] title='Hapus'><i class='icon-trash'></i></a>
		        </tr>";
      $no++;
    }
    echo "</tbody></table>";
			  ?>
              <p><a class="btn btn-success" href="?module=agenda">Semua Agenda &raquo;</a></p>
            </div><!--/span-->
            <div class="span6">
              <h4>Berita</h4>
              <?php
			  echo "<table class='table table-bordered' width='100%'><thead>  
          <tr><th>No.</th>
          <th>Judul</th>
          <th>Tanggal</th>
          <th>#</th>
          </tr></thead>";
    if ($_SESSION[leveluser]=='admin'){
      $tampil = mysql_query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 3");
    }
    else{
      $tampil=mysql_query("SELECT * FROM berita 
                           WHERE username='$_SESSION[namauser]' ORDER BY id_berita DESC LIMIT 3");
    }
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      $tgl_posting=tgl_indo($r[tanggal]);
      echo "<tr><td>$no</td>
                <td>$r[judul]</td>
                <td>$tgl_posting</td>
		            <td><a href=?module=berita&act=editberita&id=$r[id_berita] title='Edit'><i class='icon-edit'></i> </a>
		                <a href='$aksi?module=berita&act=hapus&id=$r[id_berita]&namafile=$r[gambar]' title='Hapus'><i class='icon-trash'></i></a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";
			  ?>
              <p><a class="btn btn-success" href="?module=berita">Semua Berita &raquo;</a></p>
            </div><!--/span-->
            <p><a class="btn btn-success" href="?module=lapor">Lihat Laporan Masyarakat &raquo;</a></p>
            <p><a class="btn btn-success" href="?module=air">Input Data Air &raquo;</a></p>
          </div>
          <!--/row-->