<?php
include ("koneksi.php");
class ckaryawan {
	// put your code here

	private $c, $id, $nama, $telp, $password, $jabatan, $user_name;
	private $insert;

	public function ckaryawan(){
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

	public function gettelp(){
		return $this->telp;
	}

	public function settelp($telp){
		$this->telp=$telp;
	}

	public function getpassword(){
		return $this->password;
	}

	public function setpassword($password){
		$this->password=$password;
	}

		public function getjabatan(){
		return $this->jabatan;
	}

	public function setjabatan($jabatan){
		$this->jabatan=$jabatan;
	}

	public function getuser_name(){
		return $this->user_name;
	}

	public function setuser_name($user_name){
		$this->user_name=$user_name;
	}
	


	public function getInsert(){
		$insert = false;
		//echo "insert into karyawan (id, nama, telp, password, jabatan, user_name) values ('','".$this->getnama()."','".$this->gettelp()."','".$this->getpassword()."','".$this->getjabatan()."','".$this->getuser_name()."')";

		$sql="insert into karyawan (id, nama, telp, password, jabatan, user_name) values ('','".$this->getnama()."','".$this->gettelp()."','".$this->getpassword()."','".$this->getjabatan()."','".$this->getuser_name()."')";
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
		$sql="select * from karyawan where id ='$_GET[id]'";
		$c= new koneksi();
		$c->openconnection();
		$query=mysql_query($sql) or die(mysql_error());

		return $query;
	}

	public function getUpdate(){
		$insert= false;
	//	echo "update karyawan set nama='".$this->getnama()."', telp='".$this->gettelp()."', password='".$this->getpassword()."',jabatan='".$this->getjabatan()."',user_name='".$this->getuser_name()."' where id='".$this->getid()."'";
 	$sql="update karyawan set nama='".$this->getnama()."', telp='".$this->gettelp()."', password='".$this->getpassword()."',jabatan='".$this->getjabatan()."',user_name='".$this->getuser_name()."' where id='".$this->getid()."'";
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
		$sql="select * from karyawan";
		$c = new koneksi();
		$c->openconnection();
		$query=mysql_query($sql) or die(mysql_error());

		return $query;
	}

	public function getDelete(){
		$sql="DELETE from karyawan where id='$_GET[id]'";
		$c=new koneksi();
		$c->openconnection();
		$query=mysql_query($sql) or die(mysql_error());
		return $query;
	}
}
?>