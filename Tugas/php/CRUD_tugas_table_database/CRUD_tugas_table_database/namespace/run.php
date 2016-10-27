<?php  

include 'detail_ns.php';

use n_space\detail_ns as detil;

$detail_ns=new detil\Detail;

echo $detail_ns->nama($data);
echo $detail_ns->alamat($data);
echo $detail_ns->jenis_kelamin($data);
echo $detail_ns->mapel($data);
echo $detail_ns->nilai($data);

?>