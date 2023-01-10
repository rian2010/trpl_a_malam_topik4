<?php 
include 'fpdf.php';
include "koneksi.php";
$id = $_GET['kode_peminjam'];

$pdf = new FPDF("L", "cm", "A3");
$pdf->SetMargins(0.5, 1, 1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(25.5,0.7,"SURAT PEMINJAMAN",0,10,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(2.5,0.8,'NIM',1,0,'C');
$pdf->Cell(8.0,0.8,'NAMA LENGKAP',1,0,'C');
$pdf->Cell(4.5,0.8,'EMAIL',1,0,'C');
$pdf->Cell(4.5, 0.8, 'PENANGGUNG JAWAB', 1, 0,'C');
$pdf->Cell(4.5, 0.8, 'RUANGAN', 1, 0,'C');
$pdf->Cell(4, 0.8, 'TANGGAL PINJAM', 1, 0,'C');
$pdf->Cell(4, 0.8, 'WAKTU PINJAM', 1, 0,'C');
$pdf->Cell(4, 0.8, 'WAKTU SELESAI', 1, 1,'C');

$pdf->SetFont('Arial', '', 9);

$tampil = mysqli_query($koneksi, "SELECT peminjam.kode_peminjam, peminjam.nim, peminjam.nama_lengkap, peminjam.email_nohp, dosen.nama_dosen, ruang.kode_ruangan, peminjam.tanggal_pinjam, peminjam.waktu_pinjam, peminjam.waktu_selesai, peminjam.status FROM peminjam JOIN dosen ON peminjam.id_dosen=dosen.id_dosen JOIN ruang ON peminjam.id_ruangan = ruang.id_ruangan
WHERE kode_peminjam='$id'");
while ($hasil = mysqli_fetch_array($tampil)){
    $pdf->Cell(2.5,0.8,$hasil['nim'],1,0,'L');
    $pdf->Cell(8,0.8,$hasil['nama_lengkap'],1,0,'L');
    $pdf->Cell(4.5,0.8,$hasil['email_nohp'],1,0,'L');
    $pdf->Cell(4.5, 0.8,$hasil['nama_dosen'], 1, 0,'L');
    $pdf->Cell(4.5, 0.8,$hasil['kode_ruangan'], 1, 0,'L');
    $pdf->Cell(4, 0.8,$hasil['tanggal_pinjam'], 1, 0,'L');
    $pdf->Cell(4, 0.8,$hasil['waktu_pinjam'], 1, 0,'L');
    $pdf->Cell(4, 0.8,$hasil['waktu_selesai'], 1, 1,'L');
    $pdf->Text(1,8,'Pengajuan Anda Diterima,Silahkan Datang Sesuai Waktu Yang Tertera Di File ini!');
    $pdf->Text(1,8.5,'Silahkan Tunjukkan File ini Jika Anda Ingin Meminjam Ruangan!,Dan tolong meninggalkan Sesuai Jam Yang Sudah Tertera di file Ini. ');
    $pdf->Text(30,22,'STEMPEL','R');
    $pdf->Text(10,22,'STEMPEL');
    $pdf->Image('assets/img/stempel1.jpeg',8.5,23,5,5);
    $pdf->Image('assets/img/stempel1.jpeg',28.5,23,5,5);

}
$pdf->Output("surat persetujuan.pdf", "I");
?>

