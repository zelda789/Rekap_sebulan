<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'visual_core';

$conn = mysql_connect($host,$username,$password);

mysql_select_db($db, $conn);

?>