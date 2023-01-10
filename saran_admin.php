<html lang="en">
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="assets/dataTable/datatables.min.css" rel="stylesheet">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
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
    <h5 class="card-title">Laporan Kerusakan</h5>
    <div style="overflow-x:auto;">

<table class="table table-hover table-bordered" id="datatable8">
<thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Laporan</th>
        <th scope="col">Foto</th>
    </tr>
</thead>
<tbody class="table-group-divider">

<?php
$no=1;
include "koneksi.php";
 $ambildata = mysqli_query($koneksi,"SELECT * FROM saran");
 while ($tampil = mysqli_fetch_array($ambildata)){
 ?>
 <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $tampil['saran'];?></td>
            <td><?php echo "<img src='assets/img/".$tampil['foto']."' width='300' height='200'>";?></td>
        </tr>
<?php
        
    }
    
    ?>
</tbody>
</table>

</div>
</div>
</div>
<script src="assets/dataTable/datatables.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
    	$('#datatable8').DataTable();
    	} );
</script>
</body>
</html>