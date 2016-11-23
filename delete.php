<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysql_connect($host,$user,$pass);
mysql_select_db('cendana2000');



$id = $_GET['id'];

$sql = "delete from pegawai where id ='$id'";
mysql_query($sql);

header('location: index.php');



?>