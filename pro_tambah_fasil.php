<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $id_ruangan = $_POST['id_ruangan'];
    $nama_alat = $_POST['nama_alat'];
    $jumlah = $_POST['jumlah'];

    // buat query
    $sql = "INSERT INTO fasil (id_ruangan, nama_alat, jumlah) VALUE ('$id_ruangan', '$nama_alat', '$jumlah')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo "<script>
        alert('Fasilitas Berhasil Ditambah !');
        </script>";
        echo "<meta http-equiv=refresh content=0,url='index_admin.php'>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo "<script>
        alert('Data Yang dimasukkan salah!');
        </script>";
        echo "<meta http-equiv=refresh content=2;URL='index_admin.php'>";
    }


} else {
    die("Akses dilarang...");
}

?>