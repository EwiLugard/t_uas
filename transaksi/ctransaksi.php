<?php
include ("koneksi.php");
class ctransaksi {
	// put your code here

	private $c, $id, $nama, $no_tiket, $kode_booking, $bank, $alamat,  $tanggal, $harga;
	private $insert;

	public function ctransaksi(){
		// $c=new cconnection();
	}

	public function getid(){
		return $this->id;
	}

	public function setid($id){
		$this->id=$id;
	}

	public function getnama(){
		return $this->nama;
	}

	public function setnama($nama){
		$this->nama=$nama;
	}

	public function getno_tiket(){
		return $this->no_tiket;
	}

	public function setno_tiket($no_tiket){
		$this->no_tiket=$no_tiket;
	}

	public function getkode_booking(){
		return $this->kode_booking;
	}

	public function setkode_booking($kode_booking){
		$this->kode_booking=$kode_booking;
	}
	public function getbank(){
		return $this->bank;
	}
	public function setbank($bank){
		$this->bank=$bank;
	}
	public function getalamat(){
		return $this->alamat;
	}
	public function setalamat($alamat){
		$this->alamat=$alamat;
	}
	public function gettelp(){
		return $this->telp;
	}
	public function settelp($telp){
		$this->telp=$telp;
	}
	public function gettanggal(){
		return $this->tanggal;
	}
	public function settanggal($tanggal){
		$this->tanggal=$tanggal;
	}
	public function getharga(){
		return $this->harga;
	}
	public function setharga($harga){
		$this->harga=$harga;
	}

	public function getInsert(){
		$insert = false;

		$sql="insert into transaksi (id, nama, no_tiket, kode_booking, bank, alamat, tanggal, harga) values ('".$this->getid()."','".$this->getnama()."','".$this->getno_tiket()."','".$this->getkode_booking()."','".$this->getbank()."','".$this->getalamat()."','".$this->gettanggal()."','".$this->getharga()."')";
		$c=new koneksi();
		$c->openconnection();
		$query=mysql_query($sql) or die(mysql_error());
		if ($query){
			$insert= true;
		}
		$c->closeconnection();
		return $insert;
	}

	public function getList(){
		$sql="select * from transaksi";
		$c = new koneksi();
		$c->openconnection();
		$query=mysql_query($sql) or die(mysql_error());

		return $query;
	}
	public function getSearch(){
		$sql="select * from transaksi where id ='$_GET[id]'";
		$c= new koneksi();
		$c->openconnection();
		$query=mysql_query($sql) or die(mysql_error());

		return $query;
	}
	public function getUpdate(){
		$insert= false;
		//echo "update transaksi set nama='".$this->getnama()."', no_tiket='".$this->getno_tiket()."', kode_booking='".$this->getkode_booking()."', bank='".$this->getbank()."', alamat='".$this->getalamat()."', telp='".$this->gettelp()."', tanggal='".$this->gettanggal()."', harga='".$this->getharga()."' where id='".$this->getid()."'";
 	$sql="update transaksi set nama='".$this->getnama()."', no_tiket='".$this->getno_tiket()."', kode_booking='".$this->getkode_booking()."', bank='".$this->getbank()."', alamat='".$this->getalamat()."', telp='".$this->gettelp()."', tanggal='".$this->gettanggal()."', harga='".$this->getharga()."' where id='".$this->getid()."'";
		$c= new koneksi();
		$c->openconnection();
		$query=mysql_query($sql) or die(mysql_error());
		if ($query) {
			$insert=true;
		}
		$c->closeconnection();
		return $insert;
	}

	public function getDelete(){
		$sql="DELETE from transaksi where id='".$this->getid()."'";
		$c=new koneksi();
		$c->openconnection();
		$query=mysql_query($sql) or die(mysql_error());
		return $query;
	}
}
?>