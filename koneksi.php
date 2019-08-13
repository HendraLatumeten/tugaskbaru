<?php
 class Database{

	private $connection;

	function __construct()
  {
		$this->connect_db();
  }

  public function connect_db(){
    $this->connection = mysqli_connect('localhost','root','','perpustakaan');
      if (mysqli_connect_error()) {
        die ("database eror" . mysqli_connect_error() .
          mysqli_connect_errno());
      }
  }


public function create($kode,$judul,$pengarang,$penerbit,$tahun){
    $sql ="INSERT INTO buku (kode_buku, judul_buku, pengarang, penerbit, tahun_terbit)VALUES('$kode','$judul','$pengarang','$penerbit','$tahun')";
    $res= mysqli_query($this->connection, $sql);
    if($res){
        return true;
        echo "string";
    }else{
      return false;
    }
  } 

public function read($kd_buku = null){
  $sql = "SELECT * FROM buku";
  if($kd_buku){ $sql = "WHERE kd_buku = $kd_buku";}
  $res = mysqli_query($this->connection, $sql);
  return $res;
}




 public function delete($kd_buku){
  
  $database = new mysqli('localhost','root','','perpustakaan');
  if($database->connect_errno){
    echo"Database Tidak Dapat Terhubung";
  }
  $sql = "DELETE FROM buku WHERE kode_buku =('$_GET[kode_buku]')";
  $data=$database->query($sql);
  header("location:tugasOOP.php"); 
}
}
// public function read($id = null){
//   $sql = "SELECT * FROM buku";
//   if($id){ $sql = "WHERE id = $id";}
//   $res = mysqli_query($this->connection, $sql);
//   return $res;
// }


// }
// include 'database.php';
// $db = new database();
 
// $aksi = $_GET['aksi'];
//  if($aksi == "tambah"){
//   $db->input($_POST['nama'],$_POST['alamat'],$_POST['usia']);
//   header("location:tampil.php");
//  }elseif($aksi == "hapus"){   
//   $db->hapus($_GET['id']);
//   header("location:tampil.php");
//  }elseif($aksi == "update"){
//   $db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
//   header("location:tampil.php");
//  }



$koneksi = new Database();

 ?>