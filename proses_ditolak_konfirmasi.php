<?php
// include database connection file
include 'koneksi.php';
$id = $_GET['kode_peminjam'];
$result = mysqli_query($koneksi, "UPDATE peminjam SET status = 'Ditolak' WHERE kode_peminjam = '$id';
");
if( $result ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    echo "<script>
    alert('Pengajuan Ditolak');
    </script>";
    echo "<meta http-equiv=refresh content=0,url='index_admin.php'>";

}
?>