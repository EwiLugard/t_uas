<?php 
include ('ctransaksi.php');

$cm= new ctransaksi();
$cm->setid($_GET['id']);
$query=$cm->getDelete();

if ($query){
	?>
    <script language="javascript">alert("Data berhasil dihapus")
	document.location="index.php?hal=transaksi&file=tampil_trn";</script>
<?php	

}else{
	echo "data gagal terhapus";}?>