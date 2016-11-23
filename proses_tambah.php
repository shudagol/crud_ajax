<?php 

include('database.php');

$nama = $_POST['nama'];
$posisi = $_POST['posisi'];
$kelamin = $_POST['kelamin'];
$kota = $_POST['kota'];
$telp = $_POST['telp'];

date_default_timezone_get('Asia/Jakarta');
$id = md5(date('ymdmsh').rand());

$sql= "insert into pegawai(id,nama,id_posisi,id_kelamin,id_kota,telp) values('$id','$nama','$posisi','$kelamin','$kota','$telp')";
mysql_query($sql);
header('location: index.php');
 ?>