CREATE VIEW v_kegiatan_progres_sda AS
SELECT pk.id_program, pk.nama_program, pk.tahun,ks.id_kegiatan,ks.pekerjaan,ks.lokasi,ks.rekanan,
ks.volume,ks.nilai_kontrak,ks.foto,pks.id_progres,pks.bulan,pks.rencana,pks.realisasi,pks.deviasi,pks.keuangan
 FROM program_kegiatan pk LEFT JOIN kegiatan_sda ks ON pk.id_program = ks.id_program LEFT JOIN progres_kegiatan_sda pks 
 ON ks.id_kegiatan = pks.id_kegiatan 