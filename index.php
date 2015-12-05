<?php

include 'header.php';
if (isset($_GET['hal'])) {
	$folder = $_GET['hal'];
	
	if (isset($_GET['file'])) {
		$file=$_GET['file'];
	}

	include $folder.'/'.$file.'.php';
}else{
	include 'login/login.php';
}

 include 'footer.php';
 //{
 	//include 'logout.php';
//}
?>