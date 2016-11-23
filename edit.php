<?php 
include('database.php');
$id = $_GET['id'];

$sql_pegawai = "select
pg.nama as nama_pegawai,
pg.telp,
kt.nama as kota,
kl.nama as jenis_kelamin,
po.nama as posisi,
po.id as posisi_id,
kt.id as kota_id,
kl.id as kelamin_id
from
pegawai pg,kelamin kl,posisi po,kota kt
where
pg.id = '$id' and
pg.id_kelamin = kl.id and
pg.id_kota = kt.id and
pg.id_posisi = po.id";

$result_pegawai = mysql_query($sql_pegawai);
$data_pegawai = mysql_fetch_array($result_pegawai);

$sql_posisi = "select * from posisi";
$sql_kota = "select * from kota";

$result_posisi = mysql_query($sql_posisi);
$result_kota = mysql_query($sql_kota);



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

					<h1>Halaman Edit Data Pegawai</h1>
					

					<form action="proses_update.php" method="POST">
						<div><label>Nama :</label> 
						<input type="text" name="nama" class="form-control" value="<?php echo $data_pegawai['nama_pegawai']; ?>"><br>
						</div>
						<div>
						<label>Posisi : </label>
						<select name="posisi" class="form-control" >
							<?php while ($data_posisi = mysql_fetch_array($result_posisi)) { ?>
							<option value="<?php echo $data_posisi['id']; ?>"
								<?php if ($data_pegawai['posisi_id']==$data_posisi['id']) {
									echo "selected"; }?>
									><?php echo $data_posisi['nama']; ?></option>
									<?php } ?>
								</select>
								</div>
								<br>
								<div>
								<label>Jenis Kelamin :</label>
								<input type="radio" name="kelamin" value="1" <?php if ($data_pegawai['kelamin_id']==1) {
									echo 'checked';
								} ?>/>Laki-laki
								<input type="radio" name="kelamin" value="2"<?php if ($data_pegawai['kelamin_id']==2) {
									echo 'checked';
								} ?>/>Perempuan
								<input type="radio" name="kelamin" value="3"<?php if ($data_pegawai['kelamin_id']==3) {
									echo 'checked';
								} ?>/>Campur<br>
								</div>

								<div><label>Kota :</label> 
								<select class="form-control" name="kota">
									<?php while ($data_kota = mysql_fetch_array($result_kota)) { ?>
									<option value="<?php echo $data_kota['id']; ?>"
										<?php if ($data_pegawai['kota_id']==$data_kota['id']) {
											echo "selected"; }?>
											><?php echo $data_kota['nama']; ?></option>
											<?php } ?>
										</select></div>

										<div>
										<label>Telepon :</label>
										<input class="form-control" type="number" name="telp" value="<?php echo $data_pegawai['telp']; ?>" />
										</div><br>
										<input type="hidden" name = 'id' value="<?php echo $id; ?>">
										<input class="btn btn-primary" type="submit" value="update data">
										<a class="btn btn-primary" href="index.php">kembali</a>
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
