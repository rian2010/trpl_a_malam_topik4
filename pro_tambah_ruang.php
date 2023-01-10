<?php 
include 'koneksi.php';
$nama = $_POST['kode_ruangan'];
$foto = $_POST['foto'];
 
$query = mysqli_query($koneksi,"INSERT INTO ruang VALUES('','$nama','$foto','Kosong')");
 
if( $query ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    echo "<script>
    alert('Yey!,..Ruangan Berhasil Ditambah');
    </script>";
    echo "<meta http-equiv=refresh content=0,url='index_admin.php'>";
}
?>