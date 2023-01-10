<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $dosen_penanggung = $_POST['dosen_penanggung'];
    $ruangan = $_POST['kode_ruangan'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $waktu_pinjam = $_POST['waktu_pinjam'];
    $waktu_balik = $_POST['waktu_balik'];

    // buat query
    $sql = "INSERT INTO peminjam (nim, nama_lengkap, email_nohp, id_dosen, id_ruangan, tanggal_pinjam, waktu_pinjam, waktu_selesai, peminjam.status) VALUE ('$nim', '$nama', '$hp', '$dosen_penanggung', '$ruangan', '$tanggal_pinjam', '$waktu_pinjam', '$waktu_balik','Menunggu')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo "<script>
        alert('Berhasil Diajukan Silahkan Tunggu !');
        </script>";
        echo "<meta http-equiv=refresh content=0,url='index.php'>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo "<script>
        alert('Data Yang dimasukkan salah!');
        </script>";
        echo "<meta http-equiv=refresh content=2;URL='index.php'>";
    }


} else {
    die("Akses dilarang...");
}

?>