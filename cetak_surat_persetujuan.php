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
    <h5 class="card-title">Cetak Pengajuan</h5>
    <div style="overflow-x:auto;">

<table class="table table-hover table-bordered" id="datatable5">
<thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Dosen</th>
        <th scope="col">Ruangan</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Mulai</th>
        <th scope="col">Akhir</th>
        <th scope="col">Status</th>
        <th scope="col">Cetak Data</th>


    </tr>
</thead>
<tbody class="table-group-divider">

    <?php

    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"SELECT peminjam.kode_peminjam, peminjam.nim, peminjam.nama_lengkap, peminjam.email_nohp, dosen.nama_dosen, ruang.kode_ruangan, peminjam.tanggal_pinjam, peminjam.waktu_pinjam, peminjam.waktu_selesai, peminjam.status FROM peminjam JOIN dosen ON peminjam.id_dosen=dosen.id_dosen JOIN ruang ON peminjam.id_ruangan = ruang.id_ruangan
    WHERE peminjam.status='Diterima'");
    while ($tampil = mysqli_fetch_array($ambildata)){
        ?>
        <tr>
            <td><?php echo $no?></td>
            <td><?php echo $tampil['nim']; ?></td>
            <td><?php echo $tampil['nama_lengkap']; ?></td>
            <td><?php echo $tampil['email_nohp']; ?></td>
            <td><?php echo $tampil['nama_dosen']; ?></td>
            <td><?php echo $tampil['kode_ruangan']; ?></td>
            <td><?php echo $tampil['tanggal_pinjam']; ?></td>
            <td><?php echo $tampil['waktu_pinjam']; ?></td>
            <td><?php echo $tampil['waktu_selesai']; ?></td>
            <td><?php echo $tampil['status']; ?></td>
            <td><a href="cetak.php?kode_peminjam=<?php echo $tampil['kode_peminjam']; ?>">Cetak Data</td>
        </tr>
<?php
        $no++;
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
    	$('#datatable5').DataTable();
    	} );
</script>
</body>
</html>