<?php include 'menu/menu_awal.php'; 
	include 'header.php';
?>
<!-- <form action="index.php?hal=login&file=cek_login_karyawan" method="post">
	<table width="281" border="0" align="center">
		<td colspan="2" align="center"><h3>LOGIN KARYAWAN</h3><br></td>
		<br>
		<tr>
			<td>Username</td>
			<td><label>
				<input type="text" name="nama"/>
			</label></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><label>
				<input type="password" name="password"/>
			</label></td>
		</tr>
		<tr>
			<td> </td>
			<td colspan="2"><label><input type="submit" name="submit" id="button" value="Login"/></label>
			<label><input type="reset" name="button2" id="button2" value="Cancel"/></label></td>
		</tr>
	</table>
</form> -->

     <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
        <body>
            <div class="container">
            <?php include 'header.php'; 

            if(isset($_GET['msg']) and $_GET['msg'] == 1){ ?>
                <div class="alert alert-danger">
                    Maaf Anda Gagal Login
                </div>

            <?php
            }?>
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <img src="gambar/smart.jpg" class="img-responsive" alt="Conxole Admin"/>
                                </div>
                                <div class="row-fluid user-row"><br>
                                    <center><h4><b>LOGIN KARYAWAN</b></h4></center>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="index.php?hal=login&file=cek_login_karyawan" method="post" accept-charset="UTF-8" role="form" class="form-signin">
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Nama" name="nama" id="nama" type="text">
                                        <input class="form-control" placeholder="Password" id="password" name="password" type="password">
                                        <br></br>
                                        <input class="btn btn-lg btn-success btn-block" type="submit" id="login" value="Login">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
            </div>