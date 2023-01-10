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
	$id_ruangan = $_GET['id_ruangan'];
	$query_mysql = mysqli_query($koneksi,"SELECT * FROM ruang WHERE id_ruangan='$id_ruangan'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="pro_edit_ruang.php" method="post">
	<div class="container-sm">
    <div class="card mt-5" style="width: 67rem;">
  <div class="card-body">
    <h5 class="card-title">Ubah Ruang</h5>
		<table>
			<tr>
				<td>Nama Ruang</td>
				<td>
					<input type="hidden" name="id_ruangan" value="<?php echo $data['id_ruangan'] ?>">
					<input type="text" name="kode_ruangan" value="<?php echo $data['kode_ruangan'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Foto</td>
				<td><input class="form-control" type="file" id="formFile" name="foto" value="<?php echo $data['foto'] ?>"></td>					
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