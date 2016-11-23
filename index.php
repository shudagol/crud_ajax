
<?php 

include('database.php');
mysql_select_db('cendana2000');
$sql_posisi = "select * from posisi";
$sql_kota= "select * from kota";

$posisi = mysql_query($sql_posisi);
$kota = mysql_query($sql_kota);

$sql = "select
pegawai.nama as nama_pegawai,
pegawai.id,
posisi.nama as nama_posisi
from 
pegawai,
posisi 
where
pegawai.id_posisi = posisi.id";

if (@$_GET['q']) {
	$search= $_GET['q'];
	$sql .=" and (pegawai.nama like '%$search%' or posisi.nama like '%$search%')"; 
}
$result = mysql_query($sql);
?>


<?php include('head.php'); ?>
<?php include('menu.php'); ?>
<div>
	&nbsp<br>
	&nbsp<br>
	
</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6 pull-left">
				<a class="btn btn-primary btn-sm  " href="tambah_data.php" style="margin-bottom: 5px">tambah data</a><br>
			</div>
			<div class="col-md-6 pull-right">

				<form action="index.php" method="GET" class="navbar-form pull-right" role="search"  >
					<div class="form-group">
						<input id="txtcari" type="text" class="form-control" placeholder="Search" name="q" value='<?php echo @$_GET['q']; ?>'>
						<button type="submit" class="btn btn-primary btn-sm" value="cari">Submit</button>
					</div>
				</form>	
			</div>
		</div>
		<div id="hasil"></div>
		
	</div>
<?php include('foot.php'); ?>
