<?php 
	public function getSearch(){
		$c=new CConnection();
		$c->openConnection();
		$ambil = mysql_query($sql) or die (mysql_error());

		return $ambil;
	}


 ?>