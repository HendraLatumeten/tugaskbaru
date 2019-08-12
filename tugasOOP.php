<?php 
include 'koneksi.php';

$tampil= $koneksi->read(); 
// $hapus= $koneksi->delete(); 


// $id = $_GET['kode_buku'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tugas OOP</title>
  </head>
  <body>
    <h1>Perpustakaan</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Buku</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Action</th>
  
    </tr>
  </thead>
  <tbody>
  	<?php 
    $no=1;
foreach($tampil as $tm){
	?>

    <tr>
      <td><?php echo $no ?>	</td>
			<td><?php echo $tm['kode_buku']; ?>	</td>
			<td><?php echo $tm['judul_buku']; ?>	</td>
			<td><?php echo $tm['pengarang']; ?>	</td>
			<td><?php echo $tm['penerbit']; ?>	</td>
			<td><?php echo $tm['tahun_terbit']; ?>	</td>
      <td>
        <a type="submit" class="btn btn-danger"href="proses.php?kode_buku=<?php echo $tm['kode_buku']; ?>&aksi=hapus">Hapus</a>
        <a type="submit" class="btn btn-danger" href='tugasOOP.php?kode_buku=$tm[kode_buku]'>edit</a>      
    
      </td>
    </tr>

<?php $no++;	} ?>
</table>
</table>	
<!-- <a href='form-edit.php?id_mahasiswa=$row[id_mahasiswa]'>Edit</a>
                <a href='delete.php?id_mahasiswa=$row[id_mahasiswa]'>Delete</a> -->