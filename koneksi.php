<?php
$koneksi =  mysqli_connect("localhost","root","","pbl2");

if (!$koneksi) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}

?>