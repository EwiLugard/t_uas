<?php
session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$data = 'db_uas';
$ok = mysql_connect($host, $user, $pass) or die('Gagal Koneksi');
mysql_select_db($data, $ok) or die('database tidak ditemukan');
$tanggal = date('Y-m-d');
$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from user where username='$username' and password='$password'";
$hasil=mysql_query("$query");
$cek=mysql_num_rows($hasil);

if ($cek) {
$_SESSION['username']=$username;
	 header ("Location: index.php?hal=menu&file=home");
}else{ 
	header ("Location: index.php?hal=login&file=login&msg=1");
}

?>