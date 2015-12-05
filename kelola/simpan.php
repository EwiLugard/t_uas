<?php
include_once 'ckaryawan.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$telp=$_POST['telp'];
$password=$_POST['password'];
$jabatan=$_POST['jabatan'];
$user_name=$_POST['user_name'];

$cm=new ckaryawan();
$cm->setid($id);
$cm->setnama($nama);
$cm->settelp($telp);
$cm->setpassword($password);
$cm->setjabatan($jabatan);
$cm->setuser_name($user_name);
$hasil=$cm->getInsert();

if ($hasil) 
{
	echo "simpan data berhasil!!";
	echo "<br>";
	echo "Nama :".$cm->getnama();
	echo "<br>";
	echo "Telp :".$cm->gettelp();
	echo "<br>";
	echo "Password :".$cm->getpassword();
	echo "<br>";
	echo "Jabatan :".$cm->getjabatan();
	echo "<br>";
	echo "User_Name :".$cm->getuser_name();
	echo "<br>";
	echo "<a href=index.php?hal=karyawan&file=tampil>Input Lagi</a>";
}
else {
	echo "Simpan Data Gagal";
}
?>