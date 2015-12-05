<?php
class koneksi
{
	var $koneksi;
	public function closeConnection(){
		mysql_close($this->koneksi);
	}
	public function openConnection(){
		$server = 'localhost';
		$database = 'db_uas';
		$user = 'root';
		$password = '';
		$this->koneksi = mysql_connect($server,$user,$password) or die(mysql_error());
		if ($this->koneksi) {
			mysql_select_db($database) or die(mysql_error());
		}else{
			echo "koneksi ke database";
		}
	}
}
?>