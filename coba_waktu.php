<?php
include "koneksi.php";
$ambildata = mysqli_query($koneksi,"SELECT * FROM peminjam WHERE kode_peminjam='37'
");
{
$tgl_now=date("Y-m-d");
$tgl_pinjam=["tanggal_pinjam"];//tanggal expired
if ($tgl_now >=$tgl_pinjam)
{
 echo"<center><h1>Web Expired</h1>
 <h3>Silahkan Hubungi Admin<h3></center>";
}
else
{
?>
<h2>Hello World</h2>
<?php
}}
?>