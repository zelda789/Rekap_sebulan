<?php

$sql = "select siswa.id_siswa as id, siswa.nama as nama_siswa, 
kota.nama_kota, kelamin.nama_kelamin
from siswa, kota, kelamin
where siswa.alamat = kota.id_kota and
siswa.jenis_kelamin = kelamin.id_kelamin";

?>