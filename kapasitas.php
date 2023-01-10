<!DOCTYPE html>
<html>
<head>
    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<title></title>

	<style>
	table {
	border-collapse: collapse;
	border-spacing: 0;
	width: 100%;
	border: 1px solid #ddd;
	}

	th, td {
	text-align: left;
	padding: 8px;
	}

	tr:nth-child(even){background-color: #f2f2f2}
	</style>
</head>
<body>
 
 
	<div class="container-sm">
    <div class="card mt-5">
  <div class="card-body">
    <h5 class="card-title">Data Ruangan</h5>
	<div style="overflow-x:auto;">

	
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Tambah Ruang
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Ruang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  <form action="pro_tambah_ruang.php" method="post">	
    <div class="container-sm">
    <div class="card mt-5" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title"></h5>	
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
	</div>
	</div>
	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  Tambah Fasilitas
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Fasilitas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

	  <form action="pro_tambah_fasil.php" method="post">	
    <div class="container-sm">
    <div class="card mt-5" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title"></h5>	
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
	</div>
	</div>
	</form>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

	<table class="table table-hover table-bordered">
<thead>
		<tr>
			<th>No</th>
			<th>Ruangan</th>
			<th>Detail</th>
			<th>Foto</th>
			<th>Aksi</th>
			<th>Status Ruang</th>				
		</tr>
</thead>
<tbody class="table-group-divider">
		<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($koneksi,"SELECT ruang.id_ruangan, ruang.kode_ruangan, ruang.foto, ruang.status, peminjam.kode_peminjam FROM ruang join peminjam on ruang.id_ruangan=peminjam.id_ruangan where ruang.status='dipakai';
")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['kode_ruangan']; ?></td>
			<td>
				<a  type="button"class="btn btn-success" href="detail.php?id_ruangan=<?php echo $data['id_ruangan']; ?>">Detail</a>
			
		
			</td>
			<td><?php echo "<img src='assets/img/".$data['foto']."' width='300' height='200'>";?></td>
			<td>
			<a  type="button"class="btn btn-primary" href="form_edit_ruang.php?id_ruangan=<?php echo $data['id_ruangan']; ?>">Edit</a>
			<a  type="button"class="btn btn-danger" href="hapus_ruang.php?id_ruangan=<?php echo $data['id_ruangan']; ?>">Hapus</a>
			</td>
			<td><a  type="button"class="btn btn-light" href="detail_pemakaian.php?status_ruangan=<?php echo $data['status']; ?>&peminjam=<?php echo $data['kode_peminjam']; ?>"></a></td>

		</tr>
        </tbody>
		<?php } ?>
        
	</table>
		</div>
		</div>
		</div>
</body>
</html>