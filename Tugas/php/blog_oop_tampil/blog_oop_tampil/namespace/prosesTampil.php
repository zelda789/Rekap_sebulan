<?php namespace show;

class allTampil
{
	public function jalan()
	{
		return "SELECT * FROM ";
	}
}

class tampilArt extends allTampil //tampilan home

{
	public static function tampilArtikel($id)
	{
		$jalan = "SELECT * FROM ".$id;
		$query = mysql_query($jalan);
		while ($row=mysql_fetch_array($query))
		$data[]=$row;
		return $data;
	}
}

class tampilItm extends allTampil //readmore
{
	public static function tampilItem($tabel,$id)
	{
		$jalan = "SELECT * FROM tb_artikel WHERE id_artikel = ". $id;

		$query = mysql_query($jalan);
		while ($row=mysql_fetch_array($query))
		return $row;
	}
}

?>
