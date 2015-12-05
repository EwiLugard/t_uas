<?php
include ('ctransaksi.php');

$id=$_POST['id'];
$nama=$_POST['nama'];
$no_tiket=$_POST['no_tiket'];
$kode_booking=$_POST['kode_booking'];
$bank=$_POST['bank'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$tanggal=$_POST['tanggal'];
$harga=$_POST['harga'];

$cm= new ctransaksi();
$cm->setid($id);
$cm->setnama($nama);
$cm->setno_tiket($no_tiket);
$cm->setkode_booking($kode_booking);
$cm->setbank($bank);
$cm->setalamat($alamat);
$cm->settelp($telp);
$cm->settanggal($tanggal);
$cm->setharga($harga);
$edit=$cm->getUpdate();

if ($edit){
	?>
    <script language="javascript">alert("Data berhasil diubah")
	document.location="index.php?hal=transaksi&file=tampil_trn";</script>
<?php	

}else{
	echo "data gagal terupdate";}?>
