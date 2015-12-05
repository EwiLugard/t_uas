<?php 
include 'menu/menu_admin.php';
 ?>
<div class="container"> 

<form action="index.php?hal=karyawan&file=simpan" id="form-karyawan" method="POST" role="form">
	<div class="panel panel-success">
			<div class="panel panel-heading">

			<h3>Input Data Karyawan</h3>
			</div>
			<div class="panel panel-body">
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
				<select name="jabatan" id="" class="form-control"> 
					<option value="karyawan">Karyawan</option>
                    <option value="tiketting">Tiketting</option>
				</select>
				<!-- <input type="text" name="jabatan" class="form-control" id="" placeholder="Input Jabatan">
			 --></div>
			<div class="form-group">
				<label for="">User Name</label>
				<input type="text" name="user_name" class="form-control" id="" placeholder="User Name">
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
		</div>
	</div>
</div>

	<script type="text/javascript">
$(document).ready(function() {
    $('#form-karyawan').bootstrapValidator({
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
             user_name: {
                validators: {
                    notEmpty: {
                        message: 'Username Anda Tidak Boleh Kosong'
                    }
                }
            },
        }
    });
});
</script>