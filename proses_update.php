<?php 

include('database.php');

$id = $_POST['id'];
$nama = mysql_escape_string($_POST['nama']);
$posisi = $_POST['posisi'];
$kelamin = $_POST['kelamin'];
$kota = $_POST['kota'];
$telp = $_POST['telp'];




$sql = "update pegawai set nama = '$nama',id_posisi = '$posisi',id_kelamin='$kelamin',id_kota='$kota',telp='$telp' where id = '$id'";


mysql_query($sql);
header('location: index.php');
 ?>