<?php 
include('database.php');
mysql_select_db('cendana2000');
$sql_posisi = "select * from posisi";
$sql_kota= "select * from kota";

$posisi = mysql_query($sql_posisi);
$kota = mysql_query($sql_kota);
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
					<h1>Halaman Tambah Data Pegawai</h1>

					<form action="proses_tambah.php" method="POST" class="form-horizontal">
						<br>
						<div>
							<label>Nama : </label>
							<input type="text" name="nama" class="form-control">
						</div>

						<br>
						<div>
							<label>Posisi :</label> 
							<select name="posisi" class="form-control">
								<?php while ($data = mysql_fetch_array($posisi)) { ?>
								<option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
								<?php } ?>
							</select>
						</div>

						<br>
						<div>
							<label>Jenis Kelamin : </label>
							<input type="radio" name="kelamin" value="1"  />Laki-laki
							<input type="radio" name="kelamin" value="2" />Perempuan
							<input type="radio" name="kelamin" value="3" />Campur<br>
						</div>

					<br>
						<div>
							<label>Kota :</label> 
							<select name="kota" class="form-control" >
								<?php while ($data = mysql_fetch_array($kota)) { ?>
								<option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div>
							<label>Telepon : </label>
							<input type="number" name="telp" class="form-control"  />
						</div>
						<br>
						<div>
						<input type="submit" value="tambah data" class="btn btn-primary">
					<a href="index.php" class="btn btn-primary">kembali</a>
						
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>


<?php include('foot.php'); ?>
