<?php
// include database connection file
include 'koneksi.php';
$id_alat= $_POST['id_alat'];
$nama_alat=$_POST['nama_alat'];
$jumlah=$_POST['jumlah'];

$query = mysqli_query($koneksi,"UPDATE fasil SET nama_alat='$nama_alat',jumlah='$jumlah' WHERE id_alat='$id_alat'");
// Redirect to homepage to display updated user in list

if( $query ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    echo "<script>
    alert('Yey!,..Fasilitas Berhasil Diubah');
    </script>";
    echo "<meta http-equiv=refresh content=0,url='index_admin.php'>";
}
?>
