<?php
// include database connection file
include 'koneksi.php';
$id = $_GET['id_alat'];
$result = mysqli_query($koneksi, "DELETE FROM fasil WHERE id_alat='$id'");
if( $result ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    echo "<script>
    alert('Fasilitas Berhasil Di Hapus');
    </script>";
    echo "<meta http-equiv=refresh content=0,url='index_admin.php'>";
}
?>