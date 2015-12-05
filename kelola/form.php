<?php 
include 'menu/menu_admin.php';
 ?>
<div class="container"> 

<form action="index.php?hal=karyawan&file=simpan" method="POST" role="form">
	<legend>Input Data Karyawan</legend>
	<input type="hidden" name="id" class="form-control">
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" class="form-control" id="" placeholder="Input Nama Karyawan">
	</div>
	<div class="form-group">
		<label for="">Telpon</label>
		<input type="text" name="telp" class="form-control" id="" placeholder="Input telepon">
	</div>
	<div class="form-group">
		<label for="">Password</label>
		<input type="password" name="password" class="form-control" id="" placeholder="Input password">
	</div>
	<div class="form-group">
		<label for="">Jabatan</label>
		<input type="text" name="jabatan" class="form-control" id="" placeholder="Input Jabatan">
	</div>
	<div class="form-group">
		<label for="">User Name</label>
		<input type="text" name="user_name" class="form-control" id="" placeholder="User Name">
	</div>

	<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>