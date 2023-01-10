<?php
// include database connection file
include 'koneksi.php';
$id = $_GET['kode_peminjam'];
$id_ruangan = $_GET['id_ruangan'];
$result = mysqli_query($koneksi, "UPDATE peminjam INNER JOIN ruang ON peminjam.id_ruangan = ruang.id_ruangan SET peminjam.status = 'Diterima', ruang.status_ruangan='Dipakai' WHERE peminjam.kode_peminjam ='$id' AND ruang.id_ruangan ='$id_ruangan'");

if( $result ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    echo "<script>
    alert('Pengajuan Diterima');
    </script>";
    echo "<meta http-equiv=refresh content=0,url='index_admin.php'>";
}
?>