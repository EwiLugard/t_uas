<?php  
	include ('ctransaksi.php');
	include 'header.php';
	$cm= new ctransaksi();
	$query=$cm->getSearch();
	if ($data=mysql_fetch_array($query)){
 ?>
<div class="container"> 

<form action="index.php?hal=transaksi&file=edit_trn" method="POST" role="form">
	<legend>Input Data Penjualan</legend>
<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" id="" placeholder="Input Nama">
	</div>
	<div class="form-group">
		<label for="">No Tiket</label>
		<input type="text" maxlength="12" name="no_tiket" value="<?php echo $data['no_tiket']; ?>" class="form-control" id="" placeholder="Input No Tiket">
	</div>
	<div class="form-group">
		<label for="">Kode Booking</label>
		<input type="text" maxlength="6" name="kode_booking" value="<?php echo $data['kode_booking']; ?>" class="form-control" id="" placeholder="Input Kode">
	</div>
	<div class="form-group">
		<label for="">Bank</label>
		<select class="form-control" name="bank" value="<?php echo $data['bank']; ?>" >
		<option>-Pilihan-</option>
		<option>BCA</option>
		<option>MANDIRI</option>
		<option>BNI</option>
		<option>BRI</option>
		<option>DANAMON</option>
		<option>BTN</option></select>
	</div>
	<div class="form-group">
		<label for="">Alamat</label>
		<input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" class="form-control" id="" placeholder="Alamat">
	</div>
	<div class="form-group">
		<label for="">Telepon</label>
		<input type="text" maxlength="12" name="telp" value="<?php echo $data['telp']; ?>" class="form-control" id="" placeholder="No Telepon">
	</div>
	<div class="form-group">
		<label for="">Tanggal</label>
		<input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>" class="form-control" id="" placeholder="Tanggal">
	</div>
	<div class="form-group">
		<label for="">Harga</label>
		<input type="text" name="harga" value="<?php echo $data['harga']; ?>" class="form-control" id="" placeholder="Harga">
	</div>

	<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
<?php } ?>