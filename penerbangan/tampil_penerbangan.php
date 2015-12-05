<?php include 'menu/menu_awal.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>SMART TRAVEL</title>
</head>
<body>
<?php 
include_once 'cpenerbangan.php';

$penerbangan= new cpenerbangan();
$tampil_penerbangan= $penerbangan->getList();

?>
<br>

<?php error_reporting(0) // tambahkan untuk menghilangkan notice... hehe ?>
<br>
<!doctype html>
<html>
    <head>
        <title></title>
            <?php
                if(isset($_GET['msg']) and $_GET['msg'] == 1){?>
                        <script type="text/javascript">
                    swal({   title: "<?php echo 'Selamat Datang, '.$_SESSION['nama'].'';?>",   text: "Silakan tekan oke.",   imageUrl: "gambar/sukses.jpg" });
                </script>

            <?php
            }?>

    </head>
    <body>
        <?php 
//        includekan fungsi paginasi
        include 'pagination.php';

//        mengatur variabel reload dan sql
        
        if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']<>""){
//        jika ada kata kunci pencarian (artinya form pencarian disubmit dan tidak kosong)
//        pakai ini
            $keyword=$_REQUEST['keyword'];
            $reload = "index.php?hal=penerbangan&file=tampil_penerbangan&true&keyword=$keyword";
            $ambil =  "SELECT * FROM penerbangan WHERE nama_pesawat LIKE '%$keyword%' OR jam_berangkat LIKE '%$keyword%' OR tujuan LIKE '%$keyword%' OR harga LIKE '%$keyword%'";
            $result = mysql_query($ambil);
        }else{
//            jika tidak ada pencarian pakai ini
            $reload = "index.php?hal=penerbangan&file=tampil_penerbangan&=true";
            $ambil =  "SELECT * FROM penerbangan";
            $result = mysql_query($ambil);
        }
        
        //pagination config start
        $rpp = 5; // jumlah record per halaman
        $page = intval($_GET["page"]);
        if($page<=0) $page = 1;  
        $tcount = mysql_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no = ($page-1)*$rpp;
        //pagination config end
        ?>
    <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!--muncul jika ada pencarian (tombol reset pencarian)-->
                    <?php
                    if($_REQUEST['keyword']<>""){
                    ?>
                        <a class="btn btn-danger" href="index.php?hal=penerbangan&file=tampil_penerbangan"> Reset Pencarian</a>
                    <?php
                    }
                    ?>
                </div>

                <div class="col-lg-4 text-right">
                    <form method="post" action="index.php?hal=penerbangan&file=tampil_penerbangan">
                        <div class="form-group input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="Cari Pesawat..." value="<?php echo $_REQUEST['keyword']; ?>">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Cari
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
    	<table class="table table-hover">
    		<?php
                    while(($count<$rpp) && ($i<$tcount)) {
                        mysql_data_seek($result,$i);
                        $data = mysql_fetch_array($result);
                    ?>
                
    		<thead>
    			<tr>
    				<th>Nama Pesawat</th>
    				<th>Jam Keberangkatan</th>
    				<th>Tujuan</th>
    				<th>Harga</th>
    				<th>Gambar pesawat</th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr>
    				<td><?php echo $data['nama_pesawat']; ?></td>
    				<td><?php echo $data['jam_berangkat']; ?></td>
    				<td><?php echo $data['tujuan']; ?></td>
    				<td width="10%">Rp <?php echo number_format($data['harga'],0,',','.'); ?></td>
    				<td><img class="preview" height="100px" width="200px" src="<?php echo 'gambar/'.$data['gambar'];?>"></td>
    			</tr>
    		</tbody>

                    <?php
                        $i++; 
                        $count++;
                    }
                    ?>
                
    	</table>   

        </div>    
             <div align="center"><?php echo paginate_one($reload, $page, $tpages); ?></div>
    </body>
</html>
