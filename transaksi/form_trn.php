<?php 
include 'menu/menu_admin.php';
 ?>
 <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
</head>
<div class="container"> 
	<form action="index.php?hal=transaksi&file=simpan_trn" id="form-transaksi" method="POST" role="form">
		<div class="panel panel-success">
			<div class="panel panel-heading">
				<h3>Tambah Data Penjualan</h3>
			</div>
			<div class="panel panel-body">
			<input type="hidden" name="id">
				<div class="form-group">
					<label for="">Nama</label>
					<input type="text" name="nama" class="form-control" id="" placeholder="Masukan Nama">
				</div>
				<div class="form-group">
					<label for="">No Tiket</label>
					<input type="text" name="no_tiket" class="form-control" id="" placeholder="Masukan No Tiket">
				</div>
				<div class="form-group">
					<label for="">Kode Booking</label>
					<input type="text" name="kode_booking" class="form-control" id="" placeholder="Masukan Kode">
				</div>
				<div class="form-group">
					<label for="">Bank</label>
					<select class="form-control" name="bank">
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
					<textarea name="alamat" id="" cols="30" class="form-control" rows="10"></textarea>
					<!-- <input type="text" name="alamat" class="form-control" id="" placeholder=" Masukan Alamat"> -->
				</div>
				<div class="form-group">
					<label for="">Telepon</label>
					<input type="text" maxlength="12" name="telp" class="form-control" id="" placeholder="Masukan No Telepon">
				</div>
				<div class="form-group">
					<label for="">Tanggal</label>
					<input type="date" name="tanggal" class="form-control" id="" placeholder="Tanggal">
				</div>
				<div class="form-group">
					<label for="">Harga</label>
					<input type="text" name="harga" class="form-control" id="" placeholder="Masukan Harga">
				</div>

				<button type="submit" class="btn btn-primary">Simpan</button>
				<a class="btn btn-danger" href="index.php?hal=transaksi&file=tampil_trn">Kembali</a>
			</form>
		</div>
	</div>
</div>


	<script type="text/javascript">
$(document).ready(function() {
    $('#form-transaksi').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nama: {
                validators: {
                        regexp:{
                            regexp:/^[A-Z ']+$/i,
                                message: 'Tidak Boleh Angka atau simbol'
                            },
                    notEmpty: {
                        message: 'Nama Karyawan Anda Tidak Boleh Kosong'
                    }
                }
            },
            telp: {
                        validators: {
                            regexp:{
                                    regexp:/^[0-9]+$/i,
                                        message: 'Tidak Boleh Huruf'
                                    },
                            notEmpty: {
                                message: 'Telepon Tidak Boleh Kosong'
                            }
                        }
                    },
             password: {
                validators: {
                    notEmpty: {
                        message: 'password Anda Tidak Boleh Kosong'
                    }
                }
            },
            harga: {
                        validators: {
                            regexp:{
                                    regexp:/^[0-9]+$/i,
                                        message: 'Tidak Boleh Huruf'
                                    },
                            notEmpty: {
                                message: 'Harga Tidak Boleh Kosong'
                            }
                        }
                    },
        }
    });
});
</script>