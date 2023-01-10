<?php
// include database connection file
include 'koneksi.php';
$id_ruangan=$_POST['id_ruangan'];
$kode_ruangan=$_POST['kode_ruangan'];
$foto=$_POST['foto'];

$query = mysqli_query($koneksi,"UPDATE ruang SET kode_ruangan='$kode_ruangan', foto='$foto' WHERE id_ruangan='$id_ruangan'");
// Redirect to homepage to display updated user in list

if( $query ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    echo "<script>
    alert('Yey!,..Ruangan Berhasil Diubah');
    </script>";
    echo "<meta http-equiv=refresh content=0,url='index_admin.php'>";
}
?>
