<?php    
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{

$aksi="modul/mod_datasda/aksi_datasda.php";
switch($_GET[act]){
  // Tampil Data SDA
  default:
    echo "<h4>Data Prasarana SDA</h4>";
	echo"
	   
                    	<li>Irigasi
                        	<ul>
                            	<li><a href='?module=jaririgasi'>Jaringan Irigasi</a></li>
                                <li><a href='?module=bendung'>Bendung</a></li>
                                <li><a href='?module=bendungan'>Bendungan</a></li>
                            </ul>
                        </li>
                        <li>Air Baku Rawa Pantai
                    		<ul>
                                <li>Air Baku
                                	<ul>
                                    <li><a href='?module=bendunganairbaku'>Bendungan</a></li>
                                    <li><a href='?module=sumurdalam'>Sumur Dalam</a></li>
                                    <li><a href='?module=embung'>Embung</a></li>
                                    <li><a href='?module=bendungairbaku'>Bendung</a></li>
                                    </ul>
                                </li>
                                <li>Rawa
                                	<ul>
                                    	<li><a href='?module=rawa'>Jaringan Tata Air Rawa</a></li>
                                    </ul>	
                                </li>
                                <li>Pantai
                                	<ul>
                                    	<li><a href='?module=pantai'>Pengaman Pantai</a></li>
                                    </ul>
                                </li>
                    		</ul>
                    	</li>
                        <li>Sungai Danau dan Waduk
                    		<ul>
                    			<li>Pengendalian Banjir
                                	<ul>
                                    	<li><a href='?module=spb'>Sistem Pengendali Banjir</a></li>
                                    	<li><a href='?module=bendali'>Bendali</a></li>
                                        <li><a href='?module=polder'>Polder</a></li>
                                    </ul>
                                </li>
                    		</ul>
                    	</li>
						<p style='font-size:12px;color:red;'>* Untuk data SDA yang berbentuk artikel silahkan buka menu halaman yang ada di sebelah kiri untuk mengelola data</p>
	";

    
  break;    
}

}
?>
