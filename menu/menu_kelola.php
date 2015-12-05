<?php include 'header.php'; 

?>
<div class="container"> 

<nav class="navbar navbar-custom" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.php?hal=menu&file=home">Home</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li><a href="index.php?hal=transaksi&file=tampil_trn">Data Reservasi</a></li>
			<li><a href="index.php?hal=karyawan&file=tampil_karyawan">Karyawan</a></li>
			<li><a href="index.php?hal=penerbangan&file=tampil">Penerbangan</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="index.php?hal=login&file=logout">Keluar</a></li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>
</div>