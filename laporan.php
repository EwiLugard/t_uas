<?php include 'menu/menu_admin.php' ?>
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

?>
<div class="container">

<table border="1" class="table table-bordered">
<tr>
	<td colspan="6" align="center">TABEL PENJUALAN</td>
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
       $bln = $_GET['bln'];
        $ambil=mysql_query("SELECT * FROM transaksi WHERE MONTH(tanggal) = '$bln' ");
        $data=mysql_num_rows($ambil);
        if ($ambil > 0) {
              $total=0;
          while ($data = mysql_fetch_array($ambil)) {

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
        <script>  
            window.print();
            //window.load = print_d();  
            //    function print_d(){  
            //        window.print();  
            //}  
        </script>  
