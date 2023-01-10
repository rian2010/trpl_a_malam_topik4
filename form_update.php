<html>
	<head>
	<link href="assets/img/monocore.jpg" rel="icon">

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<?php 
	include "koneksi.php";
	$id_alat = $_GET['id_alat'];
	$query_mysql = mysqli_query($koneksi,"SELECT * FROM fasil WHERE id_alat='$id_alat'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="pro_edit_fasilitas.php" method="post">
	<div class="container-sm">
    <div class="card mt-5">
  <div class="card-body">
    <h5 class="card-title">Ubah Fasilitas</h5>
		<table>
			<tr>
				<td>Nama Alat</td>
				<td>
					<input type="hidden" name="id_alat" value="<?php echo $data['id_alat'] ?>">
					<input type="text" name="nama_alat" value="<?php echo $data['nama_alat'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Jumlah</td>
				<td><input type="number" name="jumlah" value="<?php echo $data['jumlah'] ?>"></td>					
			</tr>		
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>	
			<?php } ?>			
		</table>
		<br><br><a type="button"class="btn btn-danger" href="index_admin.php">Keluar</a>

	</div>
	</div>
	</div>
	</form>
</body>
</html>