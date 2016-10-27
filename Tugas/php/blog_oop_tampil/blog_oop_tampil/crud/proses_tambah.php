<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);

mysql_select_db('visual_core');
// optional
date_default_timezone_set('Asia/Jakarta');
