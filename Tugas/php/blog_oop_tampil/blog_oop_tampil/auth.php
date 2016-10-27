<?php

session_start();

include_once('database.php');
mysql_select_db('visual_core');

$user = $_POST['user'];
$pass = ($_POST['pass']);

$sql = "select * from login where username = '{$user}'";
$query = mysql_query($sql);
if(mysql_num_rows($query) == 1){
	$dataLoginDB = mysql_fetch_array($query);

	if($pass == $dataLoginDB['password']){

		$_SESSION['userdata'] = $dataLoginDB;
		header('Location: edit.php');
	}else{
		header('Location: index.php');
	}

}else{
	header('Location: index.php');
}

?>