<?php 
	include ('ckaryawan.php');
	include 'header.php';
	$cm= new ckaryawan();
	$query=$cm->getSearch();
	if ($data=mysql_fetch_array($query)){
 ?>
<div class="container"> 

<form action="index.php?hal=karyawan&file=edit" method="POST" >
	<legend>Input Data Karyawan</legend>
	<input type="hidden" name="id" value="<?php echo $data['id']; ?>" class="form-control">
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" id="" placeholder="Input Nama Karyawan">
	</div>
	<div class="form-group">
		<label for="">Telpon</label>
		<input type="text" maxlength="12" name="telp" value="<?php echo $data['telp'];?>" class="form-control" id="" placeholder="Input telepon">
	</div>
	<div class="form-group">
		<label for="">Password</label>
		<input type="password" name="password" value="" class="form-control" id="" placeholder="Input password">
	</div>
	<div class="form-group">
		<label for="">Jabatan</label>
		<input type="text" name="jabatan" value="<?php echo $data['jabatan'];?>" class="form-control" id="" placeholder="Input Jabatan">
	</div>
	<div class="form-group">
		<label for="">User Name</label>
		<input type="text" name="user_name" value="<?php echo $data['user_name'];?>" class="form-control" id="" placeholder="User Name">
	</div>

	<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
<?php } ?>