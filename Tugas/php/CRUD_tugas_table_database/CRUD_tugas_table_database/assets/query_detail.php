<?php
$sql = "SELECT
sw.nama AS nama_siswa,
kl.nama_kelamin AS jenis_kelamin,
kota.nama_kota,
mp.nama_pelajaran
FROM
siswa sw, kelamin kl, mapel mp, kota
where
sw.id_siswa = '{$id}' AND
sw.jenis_kelamin = kl.id_kelamin AND
sw.id_mapel = mp.id_mapel AND
sw.alamat = kota.id_kota";
?>