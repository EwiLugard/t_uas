<?php include 'menu/menu_awal.php'; 
	include 'header.php';
?>


 <!-- 
 * parallax_login.html
 * @Author original @msurguy (tw) -> http://bootsnipp.com/snippets/featured/parallax-login-form
 * @Tested on FF && CH
 * @Reworked by @kaptenn_com (tw)
 * @package PARALLAX LOGIN.
-->
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
            </div>
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <img src="gambar/smart.jpg" class="img-responsive" alt="Conxole Admin"/>
                                </div>
                                <div class="row-fluid user-row"><br>
                                    <center><h4><b>LOGIN ADMIN</b></h4></center>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="index.php?hal=login&file=ceklogin" method="post" accept-charset="UTF-8" role="form" class="form-signin">
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Username" name="username" id="username" type="text">
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