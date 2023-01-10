<table class="table table-hover table-bordered">
<thead>
<h5><a href="cetak1.php">Cetak</h5>

    <tr>
        <th scope="col">No</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Dosen</th>
        <th scope="col">Ruangan</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Mulai</th>
        <th scope="col">Akhirs</th>
        <th scope="col">Status</th>


    </tr>
</thead>
<tbody class="table-group-divider">

    <?php

    include "koneksi.php";
    $status = $_GET['status_ruangan'];
	$peminjam = $_GET['peminjam'];
    $no=1;
    $ambildata = mysqli_query($koneksi,"SELECT peminjam.kode_peminjam, peminjam.nim, peminjam.nama_lengkap, peminjam.email_nohp, dosen.nama_dosen, ruang.kode_ruangan, peminjam.tanggal_pinjam, peminjam.waktu_pinjam, peminjam.waktu_selesai, peminjam.status FROM peminjam JOIN dosen ON peminjam.dosen_penanggung=dosen.id_dosen JOIN ruang ON peminjam.id_ruangan = ruang.id_ruangan
    WHERE peminjam.kode_peminjam='$peminjam' AND ruang.status='$status'");
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
        </tr>
<?php
        $no++;
    }
    ?>
</tbody>
</table>