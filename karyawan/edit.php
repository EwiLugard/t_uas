<?php
include ('ckaryawan.php');

$id=$_POST['id'];
$nama=$_POST['nama'];
$telp=$_POST['telp'];
$password=$_POST['password'];
$jabatan=$_POST['jabatan'];
$user_name=$_POST['user_name'];

$cm= new ckaryawan();
$cm->setid($id);
$cm->setnama($nama);
$cm->settelp($telp);
$cm->setpassword($password);
$cm->setjabatan($jabatan);
$cm->setuser_name($user_name);
$edit=$cm->getUpdate();

if ($edit){
	?>
    <script language="javascript">alert("Data berhasil diubah")
	document.location="index.php?hal=karyawan&file=tampil 	";</script>
<?php	

}else{
	echo "data gagal terupdate";}?>
