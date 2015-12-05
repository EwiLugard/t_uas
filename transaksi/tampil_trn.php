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
<form action="index.php?hal=transaksi&file=tampil_trn" method="POST" role="form">
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
	<td colspan="2">Aksi</td>

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
		<td><a class="btn btn-success" href="index.php?hal=transaksi&file=form_edit_trn&id=<?php echo $data['id'];?>">Edit</a></td>
		<td><a class="btn btn-primary" href="index.php?hal=transaksi&file=hapus_trn&id=<?php echo $data['id'];?>">Hapus</a></td>
	</tr>
	<?php }} ?>
</table>
<a class="btn btn-danger" href="index.php?hal=transaksi&file=form_trn">Tambah Data</a>
<br>
				<div class="tombol" onClick="print_d()" align="center">
			      <a href="index.php?hal=transaksi&file=laporan&bln=<?php echo $keyword;?>" target="_blank" class="btn btn-success" ><span class="glyphicon glyphicon-print"></span> Cetak Data Pembelian <span class="glyphicon glyphicon-print"></span> </a>
			    </div>
			    			<script>  
			  					function print_d(){  
			   						window.open("index.php?hal=transaksi&file=laporan&bln=<?php echo $keyword;?>","_blank");  
			  							}  
			 				</script>  
					</div>
</body>
</html>
</div>
