<?php  
session_start();
$host='localhost';
$user='root';
$password='';
$data='db_uas';

$ambil = mysql_connect($host, $user, $password, $data) or die ('Gagal Koneksi');
mysql_select_db($data, $ambil) or die ('Database Tidak Ditemukan');
$tanggal = date('Y-m-d');
$username=$_POST['user'];
$password=$_POST['password'];

$query="select * from user where user='$username' and password='$password'";
$hasil=mysql_query("$query");
$cek=mysql_num_rows($hasil);

if ($cek) {
$_SESSION['user']=$username;
?>

<script type="javascript">
	document.location.href="login.php";
</script>

<?php
} else { 
?><script>alert("Login gagal!"); document.location.href="index.php"</script>
<?php
}

?>