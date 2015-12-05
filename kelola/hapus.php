<?php 
include ('ckaryawan.php');

$cm= new ckaryawan();
$query=$cm->getDelete();

if ($query){
	?>
    <script language="javascript">alert("Data berhasil dihapus")
	document.location="index.php?hal=karyawan&file=tampil";</script>
<?php	

}else{
	echo "data gagal terhapus";}?>