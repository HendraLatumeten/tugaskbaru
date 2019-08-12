<?php



class koneksi{
	private $connection;

	function __construct(){
		$this->connect_db();
  }
  public function connect_db(){
    $this->connection = mysqli_connect('localhost','root','','perpustakaan');
      if (mysqli_connect_error()) {
        die ("database eror" . mysqli_connect_error() .
          mysqli_connect_errno());
      }
  }

// public function create($kd_buku, $judul_buku, $pengarang, $penerbit, $tahun_terbit){
//  $sql = "INSERT INTO buku";
//  if($id){ $sql= "(kode_buku,judul_buku,pengarang,penerbit,tahun_terbit)";}
//  $res = mysqli_query(query)($this->connection, $sql);
//  return $res;


// }

public function read($kd_buku = null){
  $sql = "SELECT * FROM buku";
  if($kd_buku){ $sql = "WHERE kd_buku = $kd_buku";}
  $res = mysqli_query($this->connection, $sql);
  return $res;
}

// public function delete($id){
//   $sql = "DELETE  FROM buku";
//   if($kd_buku){ $sql = "WHERE kd_buku = $kd";}
//   $res = mysqli_query($this->connection, $sql);
//   return $res;
// }

// public function read($id = null){
//   $sql = "SELECT * FROM buku";
//   if($id){ $sql = "WHERE id = $id";}
//   $res = mysqli_query($this->connection, $sql);
//   return $res;
// }


}

$koneksi = new Koneksi();
 ?>
