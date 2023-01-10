<!DOCTYPE html>
<html>
<head>
<link href="assets/img/monocore.jpg" rel="icon">

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
	<div class="judul">		
		<h1></h1>
		<h2></h2>
		<h3></h3>
	</div>
	
	<br/>
	
	<!--<a href="index.php">Lihat Semua Data</a>-->
 	
    <div class="container-sm">
    <div class="card mt-5">
  <div class="card-body">
    <h5 class="card-title">Data Fasilitas</h5>
	<div style="overflow-x:auto;">


<table class="table table-hover table-bordered">
<thead>
		<tr>
			<th scope="col">No</th>
			<th scope="col">Nama</th>
			<th scope="col">Jumlah</th>
		</tr>
</thead>
<tbody class="table-group-divider">
	<?php 
	include "koneksi.php";
	$id = $_GET['id_ruangan'];
	$query_mysql = mysqli_query($koneksi,"SELECT * FROM fasil WHERE id_ruangan='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
		<tr>
                <td><?php echo $nomor++; ?></td>
			    <td><?php echo $data['nama_alat']; ?></td>
				<td><?php echo $data['jumlah']; ?></td>
				
		</tr>
		<?php } ?>
    </tbody>				
		</table>
		<br><br><a type="button"class="btn btn-danger" href="index.php">Keluar</a>


	
	</div>
	</div>
	</div>
</body>
</html>