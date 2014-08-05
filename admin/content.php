<?php
include "../config/koneksi.php";
include "../config/library.php";
include "../config/fungsi_indotgl.php";
include "../config/fungsi_combobox.php";
include "class_paging.php";

// Bagian Home
if ($_GET['module']=='home'){
  include"inc-home.php";
}

// Bagian User
elseif ($_GET['module']=='profil'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_profil/profil.php";
  }
}


// Bagian lapor
elseif ($_GET['module']=='lapor'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_lapor/lapor.php";
  }
}


// Bagian Logo
elseif ($_GET['module']=='logo'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_logo/logo.php";
  }
}

// Bagian Background
elseif ($_GET['module']=='background'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_background/background.php";
  }
}

// Bagian Pegawai
elseif ($_GET['module']=='pegawai'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_pegawai/pegawai.php";
  }
}

// Bagian Widget
elseif ($_GET['module']=='widget'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_widget/widget.php";
  }
}

// Bagian Slider
elseif ($_GET['module']=='slider'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_slider/slider.php";
  }
}

// Bagian User
elseif ($_GET['module']=='user'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_users/users.php";
  }
}

// Bagian Kategori Video
elseif ($_GET['module']=='kategori_video'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_kategori_video/kategori_video.php";
  }
}

// Bagian Bukutamu
elseif ($_GET['module']=='bukutamu'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_bukutamu/bukutamu.php";
  }
}


// Bagian Video
elseif ($_GET['module']=='video'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_video/video.php";
  }
}

// Bagian Kategori Regulasi
elseif ($_GET['module']=='kat_regulasi'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_kat_regulasi/kat_regulasi.php";
  }
}


// Bagian Kategori Link
elseif ($_GET['module']=='kat_link'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_kat_link/kat_link.php";
  }
}

// Bagian Link
elseif ($_GET['module']=='link'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_link/link.php";
  }
}

// Bagian Regulasi
elseif ($_GET['module']=='regulasi'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_regulasi/regulasi.php";
  }
}




// Bagian Modul
elseif ($_GET['module']=='modul'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_modul/modul.php";
  }
}

// Bagian Kategori Berita
elseif ($_GET['module']=='kategori'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_kategori/kategori.php";
  }
}

// Bagian Berita
elseif ($_GET['module']=='berita'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_berita/berita.php";                            
  }
}

// Bagian Komentar Berita
elseif ($_GET['module']=='komentar'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_komentar/komentar.php";
  }
}

// Bagian Tag
elseif ($_GET['module']=='tag'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_tag/tag.php";
  }
}

// Bagian Artikel
elseif ($_GET['module']=='artikel'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_artikel/artikel.php";                            
  }
}

// Bagian Program SDA
elseif ($_GET['module']=='programsda'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_program/program.php";                            
  }
}

// Bagian Kegiatan SDA
elseif ($_GET['module']=='kegiatansda'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_kegiatan/kegiatan.php";                            
  }
}

// Bagian Progres Kegiatan SDA
elseif ($_GET['module']=='progressda'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_progres_kegiatan/progres_kegiatan.php";                            
  }
}

// Bagian Data SDA
elseif ($_GET['module']=='datasda'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_datasda/datasda.php";                            
  }
}

// Bagian Jaringan Irigasi
elseif ($_GET['module']=='jaririgasi'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_jaririgasi/jaririgasi.php";                            
  }
}

// Bagian Bendung
elseif ($_GET['module']=='bendung'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_bendung/bendung.php";                            
  }
}

// Bagian Bendungan
elseif ($_GET['module']=='bendungan'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_bendungan_irigasi/bendungan.php";                            
  }
}

// Bagian Bendungan Air Baku
elseif ($_GET['module']=='bendunganairbaku'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_bendungan/bendungan.php";                            
  }
}

// Bagian Sumur Dalam
elseif ($_GET['module']=='sumurdalam'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_sumurdalam/sumurdalam.php";                            
  }
}

// Bagian Embung
elseif ($_GET['module']=='embung'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_embung/embung.php";                            
  }
}

// Bagian Bendung Air Baku
elseif ($_GET['module']=='bendungairbaku'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_bendung_airbaku/bendung.php";                            
  }
}

// Bagian Rawa
elseif ($_GET['module']=='rawa'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_rawa/rawa.php";                            
  }
}

// Bagian Pantai
elseif ($_GET['module']=='pantai'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_pantai/pantai.php";                            
  }
}

// Bagian SPB
elseif ($_GET['module']=='spb'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_spb/spb.php";                            
  }
}

// Bagian Bendali
elseif ($_GET['module']=='bendali'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_bendali/bendali.php";                            
  }
}

// Bagian Polder
elseif ($_GET['module']=='polder'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_polder/polder.php";                            
  }
}

// Bagian DAS
elseif ($_GET['module']=='das'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_das/das.php";                            
  }
}

// Bagian Hidrologi
elseif ($_GET['module']=='hidrologi'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_hidrologi/hidrologi.php";                            
  }
}

// Bagian Agenda
elseif ($_GET['module']=='agenda'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION['leveluser']=='user'){
    include "modul/mod_agenda/agenda.php";
  }
}

// Bagian Banner
elseif ($_GET['module']=='banner'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_banner/banner.php";
  }
}

// Bagian Poling
elseif ($_GET['module']=='poling'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_poling/poling.php";
  }
}

// Bagian Download
elseif ($_GET['module']=='download'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_download/download.php";
  }
}

// Bagian Hubungi Kami
elseif ($_GET['module']=='hubungi'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_hubungi/hubungi.php";
  }
}

// Bagian Templates
elseif ($_GET['module']=='templates'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_templates/templates.php";
  }
}

// Bagian Shoutbox
elseif ($_GET['module']=='shoutbox'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_shoutbox/shoutbox.php";
  }
}

// Bagian Album
elseif ($_GET['module']=='album'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_album/album.php";
  }
}

// Bagian Kat Album
elseif ($_GET['module']=='kat_album'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_kat_album/kat_album.php";
  }
}

// Bagian Galeri Foto
elseif ($_GET['module']=='galerifoto'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_galerifoto/galerifoto.php";
  }
}

// Bagian Kata Jelek
elseif ($_GET['module']=='katajelek'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_katajelek/katajelek.php";
  }
}

// Bagian Sekilas Info
elseif ($_GET['module']=='sekilasinfo'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_sekilasinfo/sekilasinfo.php";
  }
}

// Bagian Menu Utama
elseif ($_GET['module']=='menuutama'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_menuutama/menuutama.php";
  }
}

// Bagian Sub Menu
elseif ($_GET['module']=='submenu'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_submenu/submenu.php";
  }
}

// Bagian Halaman Statis
elseif ($_GET['module']=='halamanstatis'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_halamanstatis/halamanstatis.php";
  }
}

// Bagian Sekilas Info
elseif ($_GET['module']=='sekilasinfo'){
  if ($_SESSION['leveluser']=='admin' OR $_SESSION[leveluser]=='user'){
    include "modul/mod_sekilasinfo/sekilasinfo.php";
  }
}

// Bagian Identitas Website
elseif ($_GET['module']=='identitas'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_identitas/identitas.php";
  }
}

// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>
