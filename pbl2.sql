-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2023 pada 06.31
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbl2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nip`, `nama_dosen`) VALUES
(1, '11111', 'Dosen1'),
(2, '22222', 'Dosen2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasil`
--

CREATE TABLE `fasil` (
  `id_alat` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `nama_alat` varchar(50) NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasil`
--

INSERT INTO `fasil` (`id_alat`, `id_ruangan`, `nama_alat`, `jumlah`) VALUES
(31, 15, 'WIFI', 2),
(32, 16, 'WIFI', 2),
(33, 14, 'Lampu', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laboran`
--

CREATE TABLE `laboran` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laboran`
--

INSERT INTO `laboran` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjam`
--

CREATE TABLE `peminjam` (
  `kode_peminjam` int(11) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email_nohp` varchar(50) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `tanggal_pinjam` varchar(25) NOT NULL,
  `waktu_pinjam` varchar(25) NOT NULL,
  `waktu_selesai` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjam`
--

INSERT INTO `peminjam` (`kode_peminjam`, `nim`, `nama_lengkap`, `email_nohp`, `id_dosen`, `id_ruangan`, `tanggal_pinjam`, `waktu_pinjam`, `waktu_selesai`, `status`, `keterangan`) VALUES
(39, '1', 'Mahasiswa1', 'Mahasiswa1@gmail.com', 1, 2, '2022-12-24', '19:00', '21:00', 'Diterima', ''),
(40, '2', 'Mahasiswa2', 'Mahasiswa2@gmail.com', 2, 3, '2022-12-25', '22:00', '12:00', 'Menunggu', ''),
(41, '3', 'Mahasiswa3', 'Mahasiswa3@gmail.com', 1, 4, '2022-12-27', '13:00', '15:00', 'Menunggu', ''),
(42, '4', 'Mahasiswa4', 'Mahasiswa4@gmail.com', 2, 5, '2022-12-28', '20:00', '21:00', 'Diterima', ''),
(43, '5', 'Mahasiswa5', 'Mahasiswa5@gmail.com', 1, 9, '2022-12-29', '22:00', '13:00', 'Menunggu', ''),
(44, '6', 'Mahasiswa6', 'Mahasiswa6@gmail.com', 1, 10, '2022-12-30', '18:00', '20:00', 'Menunggu', ''),
(45, '7', 'Mahasiswa7', 'Mahasiswa7@gmail.com', 1, 11, '2022-12-30', '19:59', '21:06', 'Menunggu', ''),
(46, '8', 'Mahasiswa8', 'Mahasiswa8@gmail.com', 1, 2, '2022-12-31', '14:00', '17:00', 'Menunggu', ''),
(47, '9', 'Mahasiswa9', 'Mahasiswa9@gmail.com', 2, 3, '2022-12-31', '21:00', '14:00', 'Menunggu', ''),
(48, '10', 'Mahasiswa10', 'Mahasiswa10@gmail.com', 2, 4, '2022-01-01', '13:00', '15:00', 'Ditolak', ''),
(49, '11', 'Mahasiswa11', 'Mahasiswa11@gmail.com', 1, 5, '2022-01-02', '21:00', '22:00', 'Menunggu', ''),
(50, '1', 'Mahasiswa1', 'Mahasiswa1@gmail.com', 1, 14, '2022-12-29', '12:00', '13:00', 'Menunggu', ''),
(51, '2', 'Mahasiswa2', 'Mahasiswa2@gmail.com', 1, 15, '2022-12-30', '20:00', '21:00', 'Ditolak', ''),
(52, '3', 'Mahasiswa3', 'Mahasiswa3@gmail.com', 1, 14, '2022-12-31', '21:10', '22:00', 'Diterima', ''),
(53, '4342211021', 'Yerico Marchel Bernadus', 'yericomarchel11@gmail.com', 1, 15, '2023-01-03', '16:30', '18:30', 'Ditolak', ''),
(54, '4342211031', 'Ammar Habib Zaensyah', 'AmmarZaensyah31@gmail.com', 2, 16, '2023-01-28', '15:00', '09:00', 'Expired', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id_ruangan` int(11) NOT NULL,
  `kode_ruangan` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status_ruangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id_ruangan`, `kode_ruangan`, `foto`, `status_ruangan`) VALUES
(14, 'Ruangan1', 'Ruangan11.3.jpeg', 'Dipakai'),
(15, 'Ruangan2', 'Ruangan12.3.jpeg', 'Kosong'),
(16, 'Ruangan3', 'TestRuangan.jpeg', 'Kosong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id` int(11) NOT NULL,
  `saran` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id`, `saran`, `foto`) VALUES
(11, 'AC nya kurang dingin', 'ackotor.jpg'),
(12, 'karpetnya bauuu :c', 'karpetbauk.jpg'),
(13, 'test', 'ackotor.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `fasil`
--
ALTER TABLE `fasil`
  ADD PRIMARY KEY (`id_alat`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indeks untuk tabel `laboran`
--
ALTER TABLE `laboran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`kode_peminjam`),
  ADD KEY `dosen_penanggung` (`id_dosen`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `fasil`
--
ALTER TABLE `fasil`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `laboran`
--
ALTER TABLE `laboran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `kode_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fasil`
--
ALTER TABLE `fasil`
  ADD CONSTRAINT `fasil_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `ruang` (`id_ruangan`);

--
-- Ketidakleluasaan untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  ADD CONSTRAINT `peminjam_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `peminjam_ibfk_3` FOREIGN KEY (`id_ruangan`) REFERENCES `ruang` (`id_ruangan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
