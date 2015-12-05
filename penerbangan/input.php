<?php include 'menu/menu_kelola.php'; 
?>

<div class="container">
<form action="index.php?hal=penerbangan&file=simpan" method="POST" role="form">
	<legend>Input</legend>
		<input type="hidden" class="form-control" id="" name="id_penerbangan" placeholder="MasukanJam">

	
	<div class="form-group">
		<label for="">Nama Pesawat</label>
		<input type="text" class="form-control" id="" name="nama_pesawat" placeholder="Nama Pesawat">
	</div>
	<div><label for="">Jam Keberangkatan</label>
		<input type="text" class="form-control" id="" name="jam_berangkat" placeholder="MasukanJam">
		</div>
		<div><label for="">Tanggal Keberangkatan</label>
		<input type="date" class="form-control" id="" name="tgl_penerbangan" placeholder="MasukanJam">
		</div>
		<div><label for="">Tujuan</label>
		<input type="text" class="form-control" id="" name="tujuan" placeholder="Masukan Tujuan"></div>
		<div><label for="">Harga</label>
		<input type="text" class="form-control" id="" name="harga" placeholder="Masukan Harga"></div>

		<input type="hidden" class="form-control" id="" name="gambar" value="smart.jpg" placeholder="Masukan Harga">
		<br>
		<br>
	<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>