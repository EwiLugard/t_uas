<?php
include ("koneksi.php");
class cpenerbangan {
	// put your code here

	private $c, $id_penerbangan, $tgl_penerbangan, $nama_pesawat, $jam_berangkat, $tujuan, $harga, $gambar;
	private $insert;

	public function cpenerbangan(){
		// $c=new cconnection();
	}

	public function getid_penerbangan(){
		return $this->id_penerbangan;
	}

	public function setid_penerbangan($id_penerbangan){
		$this->id_penerbangan=$id_penerbangan;
	}
	public function gettgl_penerbangan(){
		return $this->tgl_penerbangan;
	}
	public function settgl_penerbangan($tgl_penerbangan){
		$this->tgl_penerbangan=$tgl_penerbangan;
	}

	public function getnama_pesawat(){
		return $this->nama_pesawat;
	}

	public function setnama_pesawat($nama_pesawat){
		$this->nama_pesawat=$nama_pesawat;
	}

	public function getjam_berangkat(){
		return $this->jam_berangkat;
	}

	public function setjam_berangkat($jam_berangkat){
		$this->jam_berangkat=$jam_berangkat;
	}

	public function gettujuan(){
		return $this->tujuan;
	}

	public function settujuan($tujuan){
		$this->tujuan=$tujuan;
	 }
	 public function getharga(){
	 	return $this->harga;
	 }
	 public function setharga($harga){
	 	$this->harga=$harga;
	 }
	 public function getgambar(){
	 	return $this->gambar;
	 }
	 public function setgambar($gambar){
	 	$this->gambar=$gambar;
	 }

	// 	public function getjabatan(){
	// 	return $this->jabatan;
	// }

	// public function setjabatan($jabatan){
	// 	$this->jabatan=$jabatan;
	// }

	// public function getuser_name(){
	// 	return $this->user_name;
	// }

	// public function setuser_name($user_name){
	// 	$this->user_name=$user_name;
	// }
	


	public function getInsert(){
		$insert = false;
//echo "insert into penerbangan (id_penerbangan, nama_pesawat, jam_berangkat, tujuan, tgl_penerbangan, harga, gambar) values ('','".$this->getnama_pesawat()."','".$this->gettgl_penerbangan()."','".$this->getjam_berangkat()."','".$this->gettujuan()."','".$this->getharga()."','".$this->getgambar()."')";
		$sql="insert into penerbangan (id_penerbangan, nama_pesawat, jam_berangkat, tujuan, tgl_penerbangan, harga, gambar) values ('','".$this->getnama_pesawat()."','".$this->getjam_berangkat()."','".$this->gettujuan()."','".$this->gettgl_penerbangan()."','".$this->getharga()."','".$this->getgambar()."')";
		$c= new koneksi();
		$c->openconnection();
		$query=mysql_query($sql) or die(mysql_error());
		if ($query){
			$insert= true;
		}
		$c->closeconnection();
		return $insert;
	}

	public function getSearch(){
		$sql="select * from penerbangan where id_penerbangan ='$_GET[id_penerbangan]'";
		$c= new koneksi();
		$c->openconnection();
		$query=mysql_query($sql) or die(mysql_error());

		return $query;
	}

	public function getUpdate(){
		$insert= false;
	//	echo "update penerbangan set nama_pesawat='".$this->getnama_pesawat()."', jam_berangkat='".$this->getjam_berangkat()."', tujuan='".$this->gettujuan()."',jabatan='".$this->getjabatan()."',user_name='".$this->getuser_name()."' where id_penerbangan='".$this->getid_penerbangan()."'";
 	$sql="update penerbangan set nama_pesawat='".$this->getnama_pesawat()."', jam_berangkat='".$this->getjam_berangkat()."', harga='".$this->getharga()."', tujuan='".$this->gettujuan()."',tgl_penerbangan='".$this->gettgl_penerbangan()."' where id_penerbangan='".$this->getid_penerbangan()."'";
		$c= new koneksi();
		$c->openconnection();
		$query=mysql_query($sql) or die(mysql_error());
		if ($query) {
			$insert=true;
		}
		$c->closeconnection();
		return $insert;
	}

	public function getList(){
		$sql="select * from penerbangan";
		$c = new koneksi();
		$c->openconnection();
		$query=mysql_query($sql) or die(mysql_error());

		return $query;
	}

	public function getDelete(){
		$sql="DELETE from penerbangan where id_penerbangan='$_GET[id_penerbangan]'";
		$c=new koneksi();
		$c->openconnection();
		$query=mysql_query($sql) or die(mysql_error());
		return $query;
	}
}
?>