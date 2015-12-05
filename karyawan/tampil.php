<?php include 'menu/menu_admin.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>SMART TRAVEL</title>
</head>
<body>
<?php 
include_once 'ckaryawan.php';

$karyawan= new ckaryawan();
$tampil= $karyawan->getList();

?>
<div class="container">
<table border="1" class="table table-bordered">
<tr>
	<td colspan="6" align="center">SMART</td>
</tr>
<tr>
	<td>Nama</td>
	<td>Telpon</td>
	<td>Jabatan</td>
	<td>User Name</td>
	<td colspan="2">Aksi</td>
</tr>
<?php
while ($data=mysql_fetch_array($tampil)) {
	?>
	<tr>
		<td><?php echo $data['nama']?></td>
		<td><?php echo $data['telp']?></td>
		<td><?php echo $data['jabatan']?></td>
		<td><?php echo $data['user_name']?></td>
		<td><a class="btn btn-success" href="index.php?hal=karyawan&file=form_edit&id=<?php echo $data['id'];?>">Edit</a>
			<a class="btn btn-primary" href="index.php?hal=karyawan&file=hapus&id=<?php echo $data['id'];?>">Hapus</a></td>

		
	</tr>
<?php } ?>
</table>
<a class="btn btn-danger" href="index.php?hal=karyawan&file=form">Tambah Data</a>

</body>
</html>
</div>