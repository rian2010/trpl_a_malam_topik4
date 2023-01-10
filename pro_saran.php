<?php 
include 'koneksi.php';
$saran = $_POST['saran'];
$foto = $_POST['foto'];
 
$query = mysqli_query($koneksi,"INSERT INTO saran VALUES('','$saran','$foto')");
 
if( $query ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    echo "<script>
    alert('Saran Berhasil Diterima, Thanks :D');
    </script>";
    echo "<meta http-equiv=refresh content=0,url='index.php'>";
}
?>