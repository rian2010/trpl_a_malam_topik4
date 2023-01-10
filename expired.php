<?php
// include database connection file
include 'koneksi.php';
$id = $_GET['kode_peminjam'];
$id_ruangan = $_GET['id_ruangan'];
$result = mysqli_query($koneksi, "UPDATE peminjam INNER JOIN ruang ON peminjam.id_ruangan = ruang.id_ruangan SET peminjam.status = 'Expired', ruang.status_ruangan='Kosong' WHERE peminjam.kode_peminjam ='$id' AND ruang.id_ruangan ='$id_ruangan'");

if( $result ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    echo "<script>
    alert('Peminjaman Berhasil Diakhiri');
    </script>";
    echo "<meta http-equiv=refresh content=0,url='index_admin.php'>";
}
?>