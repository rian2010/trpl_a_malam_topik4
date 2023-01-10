<!DOCTYPE html>
<html lang="en">
<head>
<title>Pagination</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-sm">
    <div class="card mt-5" style="width: 70rem;">
  <div class="card-body">
    <h5 class="card-title">Data Ruangan</h5>

<?php
include 'koneksi.php';
?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Ruang
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Ruangan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="pro_tambah_ruang.php" method="post">
      <table>
			<tr>
				<td>Nama Ruangan</td>
				<td><input type="text" name="kode_ruangan" required></td>					
			</tr>	
			<tr>
            
            <td><div class="mb-4"><label for="formFile" class="form-label">Foto</label></td>
            <td><input class="form-control" type="file" id="formFile" name="foto"></div></td>
            
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
  Tambah Fasilitas
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Fasilitas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  <form action="pro_tambah_fasil.php" method="post">	
      <table>
			<tr>
				<td>Nama Alat</td>
				<td><input type="text" name="nama_alat" required></td>					
			</tr>	
			<tr>
            
            <td>Jumlah</td>
            <td><input type="number" name="jumlah" required></div></td>
            
			</tr>
            <tr>
                <td>Ruangan</td>
                <td>
                <select name="id_ruangan" id="input-3" class="form-control" required>
                                        <option value="" disabled selected>Pilih Ruangan</option>
                                            <?php 
                                            include "koneksi.php";
                                             $query = mysqli_query($koneksi, 'SELECT * FROM ruang');
                                             while ($r = mysqli_fetch_array($query)) {
                                            ?>
                                                <option value="<?= $r["id_ruangan"] ?>">Ruang <?= $r["kode_ruangan"] ?></option>
                                            <?php } ?>
                                        </select>
                </td>    
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<hr>

<table class="table table-stripped table-hover datatab">
<thead>
<tr>
<th>No</th>
<th>Ruangan</th>
<th>Detail</th>
<th>Foto</th>
<th>Action</th>                         
</tr>
</thead>  
<tbody>
<?php 
$query = mysqli_query($koneksi,"SELECT * FROM ruang");
$no = 1;
while ($data = mysqli_fetch_assoc($query)) 
{
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $data['kode_ruangan']; ?></td>
<td><a href="#" type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal1<?php echo $data['id_ruangan']; ?>">Detail</a></td>

<!-- Modal Edit Mahasiswa-->
<div class="modal fade" id="myModal1<?php echo $data['id_ruangan']; ?>" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Detail</h4>
</div>
<div class="modal-body">
<form role="form" action="pro_edit_fasilitas.php" method="post">
<?php
$id = $data['id_ruangan']; 
$query_edit = mysqli_query($koneksi,"SELECT * FROM fasil WHERE id_ruangan='$id'");
//$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($query_edit)) {  
?>

<input type="hidden" name="id_ruangan" value="<?php echo $row['id_ruangan']; ?>">
<input type="hidden" name="id_alat" value="<?php echo $row['id_alat']; ?>">

<div class="form-group">
<label>Nama Alat</label>
<input type="text" name="nama_alat" class="form-control" value="<?php echo $row['nama_alat']; ?>">      
</div>

<div class="form-group">
<label>Jumlah</label>
<input type="number" name="jumlah" class="form-control" value="<?php echo $row['jumlah']; ?>">      
</div>

<div class="modal-footer">  

</div>
<?php
}
?>
<input type="submit" value="Simpan">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</form>

<td><?php echo "<img src='assets/img/".$data['foto']."' width='300' height='200'>";?></td>
<td>
<!-- Button untuk modal -->
<a href="#" type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal<?php echo $data['id_ruangan']; ?>">Edit</a>
<a  type="button"class="btn btn-danger" href="hapus_ruang.php?id_ruangan=<?php echo $data['id_ruangan']; ?>">Hapus</a>
</td>
</tr>
<!-- Modal Edit Mahasiswa-->
<div class="modal fade" id="myModal<?php echo $data['id_ruangan']; ?>" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Update Data Ruangan</h4>
</div>
<div class="modal-body">
<form role="form" action="pro_edit_ruang.php" method="POST">

<?php
$id = $data['id_ruangan']; 
$query_edit = mysqli_query($koneksi,"SELECT * FROM ruang WHERE id_ruangan='$id'");
//$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($query_edit)) {  
?>

<input type="hidden" name="id_ruangan" value="<?php echo $row['id_ruangan']; ?>">

<div class="form-group">
<label>ruangan</label>
<input type="text" name="kode_ruangan" class="form-control" value="<?php echo $row['kode_ruangan']; ?>">      
</div>

<div class="form-group">
<label>Foto</label>
<input class="form-control" type="file" id="formFile" name="foto" value="<?php echo $data['foto'] ?>"></div>

<div class="modal-footer">  
<input type="submit" value="Simpan">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

<?php 
}
//mysql_close($host);
?>        
</form>
</div>
</div>

</div>
</div>
<?php               
} 
?>
</tbody>
</table>          
</div>
</div>
</div>
</div>
</body>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
$('.datatab').DataTable();
} );
</script>
</html>