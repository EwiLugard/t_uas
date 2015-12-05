<?php
include_once 'ctransaksi.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$no_tiket=$_POST['no_tiket'];
$kode_booking=$_POST['kode_booking'];
$bank=$_POST['bank'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$tanggal=$_POST['tanggal'];
$harga=$_POST['harga'];

$cm=new ctransaksi();
$cm->setid($id);
$cm->setnama($nama);
$cm->setno_tiket($no_tiket);
$cm->setkode_booking($kode_booking);
$cm->setbank($bank);
$cm->setalamat($alamat);
$cm->settelp($telp);
$cm->settanggal($tanggal);
$cm->setharga($harga);
$hasil=$cm->getInsert();

if ($hasil) 
{
	echo "simpan data berhasil!!";
	echo "<br>";
	echo "Nama :".$cm->getnama();
	echo "<br>";
	echo "No Tiket :".$cm->getno_tiket();
	echo "<br>";
	echo "Kode Booking :".$cm->getkode_booking();
	echo "<br>";
	echo "Bank :".$cm->getbank();
	echo "<br>";
	echo "Alamat :".$cm->getalamat();
	echo "<br>";
	echo "Telp :".$cm->gettelp();
	echo "<br>";
	echo "Tanggal :".$cm->gettanggal();
	echo "<br>";
	echo "Harga :".$cm->getharga();
	echo "<br>";
	echo "<a href=index.php?hal=transaksi&file=tampil_trn>Input Lagi</a>";
}
else {
	echo "Simpan Data Gagal";
}
?>