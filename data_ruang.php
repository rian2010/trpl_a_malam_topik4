<!DOCTYPE html>
<html>
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href="assets/dataTable/datatables.min.css" rel="stylesheet">
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
	.tableContainer {
    overflow: hidden;
    width: 800px;
	}
	.table {
	position: sticky;
	top: 0;
	width: 100%;
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
    <h5 class="card-title">Room Update</h5>
	<div style="overflow-x:auto;">
	<div style="overflow-y:auto;">

    
<table class="table table-hover table-bordered" id="datatable7">
<thead>
		<tr>
			<th>No</th>
			<th>Ruangan</th>
			<th>Foto</th>
			<th>Detail</th>
			<th>Status Ruang</th>				
		</tr>
</thead>
<tbody class="table-group-divider">
		<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($koneksi,"SELECT * FROM ruang;
")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['kode_ruangan']; ?></td>
			<td><?php echo "<img src='assets/img/".$data['foto']."' width='300' height='200'>";?></td>
			<td>
			<a  type="button"class="btn btn-success" href="detail_user.php?id_ruangan=<?php echo $data['id_ruangan']; ?>">Detail</a>
			</td>
			<td><?php echo $data['status_ruangan']; ?></td>
		</tr>
        </tbody>
		<?php } ?>
        
	</table>
		</div>
		</div>
		</div>

<script src="assets/dataTable/datatables.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
    	$('#datatable7').DataTable();
    	} );
</script>

</body>

</html>