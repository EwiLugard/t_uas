<?php include 'menu/menu_kelola.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>TABEL PENJUALAN</title>
</head>
<body>
<?php 
include_once 'ctransaksi.php';

$transaksi= new ctransaksi();
$tampil= $transaksi->getList();
if(isset($_POST['tanggal'])){
          $keyword = $_POST['tanggal'];
          if($_POST['tanggal']==0){
          	$ambil=mysql_query("SELECT * FROM transaksi");
          }else{
          	$ambil = mysql_query("SELECT * FROM transaksi WHERE MONTH(tanggal) = '$keyword'");
          }          	
          $selected=$_POST['tanggal'];
    }else{
	$ambil=mysql_query("SELECT * FROM transaksi");
	$selected='';
}
?>

<div class="container">
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
<form action="index.php?hal=transaksi&file=admin_tampil" method="POST" role="form">
	<table> 
	<td>
	<select class="form-control" name="tanggal" style="width:170px">
	<?php $bulan=array('- All -','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
	for($a=0;$a<=12;$a++){
		//echo $bulan[$a]." ";
		$val=$a+1;
		echo ($selected==$a)?"<option selected value=".$a.">".$bulan[$a]."</option>":"<option value=".$a.">".$bulan[$a]."</option>";
	}?>
	</select>
	</td>
	<td>&nbsp; &nbsp;</td> 
	<td><button type="submit" class="btn btn-primary">Cari</button></td>

	</table>
</form>
<br> <br>
		</div>
<table border="1" class="table table-bordered">
<tr>
	<td colspan="10" align="center">TABEL PENJUALAN</td>
</tr>
<tr>
	<td>Nama</td>
	<td>No Tiket</td>
	<td>Kode Booking</td>
	<td>Bank</td>
	<td>Alamat</td>
	<td>Telpon</td>
	<td>Tanggal</td>
	<td>Harga</td>

</tr>
<?php
						
						if ($ambil > 0) {
							while ($data=mysql_fetch_array($ambil)) {
					?>
	<tr>
		<td><?php echo $data['nama']?></td>
		<td><?php echo $data['no_tiket']?></td>
		<td><?php echo $data['kode_booking']?></td>
		<td><?php echo $data['bank']?></td>
		<td><?php echo $data['alamat']?></td>
		<td><?php echo $data['telp']?></td>
		<td><?php echo $data['tanggal']?></td>
		<td><?php echo $data['harga']?></td>
		
	</tr>
	<?php }} ?>
</table>


</body>
</html>
</div>
