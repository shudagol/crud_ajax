<?php
include('database.php');

$id = $_GET['id'];

$sql = "select
	pg.nama as nama_pegawai,
	pg.telp,
	kt.nama as kota,
	kl.nama as jenis_kelamin,
	po.nama as posisi
from
	pegawai pg,kelamin kl,posisi po,kota kt
where
	pg.id = '$id' and
	pg.id_kelamin = kl.id and
	pg.id_kota = kt.id and
	pg.id_posisi = po.id";

$result = mysql_query($sql);
$data = mysql_fetch_array($result);
?>

<?php include('head.php'); ?>
<?php include('menu.php'); ?>




<div class="container">
	<div class="row">
		<div class="col-lg-12">         
			<div class="col-lg-8">
				<div><br></div>
				<div><br></div>
				

				<div class="well bs-component">
					<h1>Halaman Detail Data Pegawai</h1>




<?php 
echo "Nama = ".$data['nama_pegawai']."<br>";
echo "Telepon = ".$data['telp']."<br>";
echo "Kota = ".$data['kota']."<br>";
echo "Jenis Kelamin = ".$data['jenis_kelamin']."<br>";
echo "Posisi = ".$data['posisi']."<br>";
 ?>
 <br>
<a href='index.php' class="btn btn-primary">kembali</a></br>

 </div>
 </div>
 </div>
 </div>
 </div>






?>