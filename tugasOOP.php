<?php 
require_once ('koneksi.php');
if(isset($_POST) && !empty($_POST)){
  $kode = $_POST['a'];
  $judul = $_POST['b'];
  $pengarang = $_POST['c'];
  $penerbit =$_POST['d'];
  $tahun = $_POST['e'];
  $del = $koneksi->delete($kode);
  $res = $koneksi->create($kode,$judul,$pengarang,$penerbit,$tahun);
  if ($res) {
 echo "<script>alert('Data Berhasil Disimpan');</script>";;
  }else{
    echo "gagal";
  }

}





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

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left: 10px; margin-bottom: 5px;">
  Tambah Data
</button>
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
        <a type="submit" name="hapus" onclick="return confirm('Yakin Hapus?')"class="btn btn-danger"href="delete.php?kode_buku=<?php echo $tm['kode_buku']; ?>">Hapus</a>
        <a type="submit" class="btn btn-danger" href='tugasOOP.php?kode_buku=$tm[kode_buku]'>edit</a>
        
    
      </td>
    </tr>

<?php $no++;	} ?>
</tbody>
</table>	


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
 <form class="form" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Buku</label>
    <input type="number" name="a" class="form-control" id="exampleInputEmail1"placeholder="masukan kode buku">
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Judul Buku</label>
    <input type="text"  name="b" class="form-control" id="exampleInputEmail1"placeholder="masukan judul buku">
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pengarang</label>
    <input type="text" name="c" class="form-control" id="exampleInputEmail1"placeholder="pengarang">
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Penerbit</label>
    <input type="text" name="d" class="form-control" id="exampleInputEmail1"placeholder="Penerbit">
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tahun Terbit</label>
    <input type="number" name="e" class="form-control" id="exampleInputEmail1"placeholder="Tahun Terbit">
  
  </div>
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  class="btn btn-primary">Submit</button>


      </div>
 
</form>



    </div>
  </div>
</div>



       </body>
       </html>       
