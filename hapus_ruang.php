<?php
// include database connection file
include 'koneksi.php';
$id = $_GET['id_ruangan'];
$result = mysqli_query($koneksi, "DELETE ruang, fasil FROM fasil INNER JOIN ruang ON fasil.id_ruangan=ruang.id_ruangan WHERE fasil.id_ruangan='$id';
;
");
if( $result ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    echo "<script>
    alert('Ruangan Berhasil Di Hapus');
    </script>";
    echo "<meta http-equiv=refresh content=0,url='index_admin.php'>";
}
?>