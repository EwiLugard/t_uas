<?php
include_once 'cpenerbangan.php';

$id=$_POST['id_penerbangan'];
$nama=$_POST['nama_pesawat'];
$jam=$_POST['jam_berangkat'];
$tujuan=$_POST['tujuan'];
$tgl=date('Ymd',strtotime($_POST['tgl_penerbangan'])); 
$harga=$_POST['harga'];
$gambar=$_POST['gambar'];

$cm=new cpenerbangan();
$cm->setid_penerbangan($id);
$cm->setnama_pesawat($nama);
$cm->setjam_berangkat($jam);
$cm->settujuan($tujuan);
$cm->settgl_penerbangan($tgl);
$cm->setharga($harga);
$cm->setgambar($gambar);
$hasil=$cm->getInsert();

if ($hasil) 
{
	echo "simpan data berhasil!!";
	echo "<br>";
	echo "Nama Pesawat :".$cm->getnama_pesawat();
	echo "<br>";
	echo "Jam Berangkat :".$cm->getjam_berangkat();
	echo "<br>";
	echo "Tujuan :".$cm->gettujuan();
	echo "<br>";
	echo "Tanggal Berangkat :".$cm->gettgl_penerbangan();
	echo "<br>";
	echo "Harga :".$cm->getharga();
	echo "<br>";
	echo "<a href=index.php?hal=Penerbangan&file=tampil>Input Lagi</a>";
}
else {
	echo "Simpan Data Gagal";
}
?>