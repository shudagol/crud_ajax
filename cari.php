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


<div class="row">	
			<div class="col-md-12">	
				<table class="table table-striped table-hover ">
					<thead>
						<tr class='info'>
							<td>Nama</td>
							<td>Posisi</td>
							<td>Aksi</td>
						</tr>
					</thead>
					<tbody>
						<?php while ($data = mysql_fetch_array($result)) { ?>
						<tr>
							<td> <?php echo $data['nama_pegawai']; ?></td>
							<td><?php echo $data['nama_posisi']; ?></td>
							<td>
								<span class="label label-default" style="margin-right : 10px">
									<a style="text-decoration : none" href="detail.php?id=<?php echo $data['id']; ?>">detail</a>
								</span>
								<span class="label label-warning" style="margin-right : 10px">
									<a style="text-decoration : none" href="edit.php?id=<?php echo $data['id']; ?>">edit</a>
								</span>
								<span class="label label-danger" style="margin-right : 10px">
									<a style="text-decoration : none" href="delete.php?id=<?php echo $data['id']; ?>" onclick="confirm('anda yakin menghapus ?' )">delete</a>
								</span>
							</td>

						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>