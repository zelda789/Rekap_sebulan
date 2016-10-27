<?php 


namespace n_space\detail_ns;

class Detail
{
	public function nama ($data)
	{
		echo "NAMA : " . $data['nama_siswa']."<br>";

	}
		public function alamat ($data)
	{
		echo "ALAMAT : " . $data['nama_kota']."<br>";
		
	}
		public function jenis_kelamin($data)
	{
		echo "JENIS KELAMIN : " . $data['jenis_kelamin']."<br>";
		
	}
		public function mapel($data)
	{
		echo "MATA PELAJARAN : " . $data['nama_pelajaran']."<br>";
		
	}
		public function nilai($data)
	{
		echo "NILAI : " . $data['nilai_']."<br>";
		
	}
}


?>