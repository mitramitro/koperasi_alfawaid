-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2020 pada 15.26
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_koperasi_alfawaaid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(10) UNSIGNED NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kawin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kartu_identifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `tgl_daftar`, `nama_lengkap`, `jk`, `pekerjaan`, `status_kawin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `kartu_identifikasi`, `nohp`, `status_anggota`, `created_at`, `updated_at`) VALUES
(1, '2011-04-04', 'TARYAMAN IBRAHIM. UST.', 'laki-laki', '-', '-', '-', '0000-00-00', 'Desa Nunuk RT 11/04 Kec. Lelea Im.', '-', '08122498557', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '2011-05-09', 'AED BAJRI. Ust.', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Letjen Soeprapto No. 235 Indramayu', '-', '085923100166', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '2011-04-30', 'RUDI SUDARMANTO', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Perjuangan No. 41 Kepandaian', '-', '081324294645', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '2011-04-04', 'ABDUL GHONI', 'laki-laki', '-', '-', '-', '0000-00-00', 'Desa Kalimati RT 006/02 Kec. JTB - Im.', '-', '085224162233', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '2011-03-17', 'ANWAR Z. MUSTOFA', 'laki-laki', '-', '-', '-', '0000-00-00', 'Griya Asri II Kec. Kab. Indramayu', '-', '081324086361', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '2014-05-24', 'HERI MAULANA', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Ir.H.Juanda Singaraja', '-', '085724403929', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '2011-04-28', 'BUDI HARNOWO', 'laki-laki', '-', '-', '-', '0000-00-00', 'Griya Asri II Kec. Kab. Indramayu', '-', '08156422275', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '2011-03-19', 'SUPARLAN', 'laki-laki', '-', '-', '-', '0000-00-00', 'Griya Asri II B35 Indramayu', '-', '081312412005', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '2011-03-09', 'ANDI SUSILAYADI', 'laki-laki', '-', '-', '-', '0000-00-00', 'Margalaksana', '-', '08122205348', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '2011-05-19', 'JUMAIDIN', 'laki-laki', '-', '-', '-', '0000-00-00', 'Griya Asri II Blok B no. 105', '-', '081328072627', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '2011-04-01', 'JAKA RIANSYAH T.', 'laki-laki', '-', '-', '-', '0000-00-00', 'Pasar Baru Indramayu', '-', '083890366843', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '2011-04-01', 'FUDHY TRISTIANTO', 'laki-laki', '-', '-', '-', '0000-00-00', 'Ds. Ujung Pendok Tngh RT 09/03 Wdsr', '-', '081804699236', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '2011-06-04', 'MUDJIONO', 'laki-laki', '-', '-', '-', '0000-00-00', 'Ds. Rawadalem Rt. 08/03 Kec. Balongan ', '-', '081395710740', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '2011-06-15', 'MOH. RASTAKA', 'laki-laki', '-', '-', '-', '0000-00-00', 'Ds. Rambatan Kulon RT 13/02 Lohbener', '-', '081911414568', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '2011-07-08', 'HERU DWI', 'laki-laki', '-', '-', '-', '0000-00-00', 'Komplek Bumi Patra Indramayu', '-', '085648665856', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '2011-07-08', 'RUSFI FAUZI', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Rambutan No.1 Lemah Mekar', '-', '081548182833', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '2011-08-01', 'CATUR PURNOMO', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Cilacap II / 151 Indramayu', '-', '08562960996', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '2012-06-01', 'DINO HERMAWAN', 'laki-laki', '-', '-', '-', '0000-00-00', 'JL. Yos Sudarso 33 Margadadi - Indramayu', '-', '08997392907', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '2012-07-26', 'TAKDONI', 'laki-laki', '-', '-', '-', '0000-00-00', 'Desa Sukaurip - Balongan - Indramayu', '-', '087828672153', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '2012-07-27', 'M. SAAD', 'laki-laki', '-', '-', '-', '0000-00-00', 'Bumi Patra - Indramayu', '-', '085721023981', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '2012-12-20', 'HARSONO', 'laki-laki', '-', '-', '-', '0000-00-00', 'TUGU SLIYEG - INDRAMAYU', '-', '085217366744', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '2013-03-07', 'BURHANUDIN', 'laki-laki', '-', '-', '-', '0000-00-00', 'Desa Pekandangan - Indramayu', '-', '085724477700', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '2018-06-22', 'TOMI DELSA', 'laki-laki', '-', '-', '-', '0000-00-00', '-', '-', '0', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '2013-07-21', 'NASIROH. Ny.', 'laki-laki', '-', '-', '-', '0000-00-00', 'Bangkir', '-', '089667081082', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '2013-08-27', 'SUKRISNA', 'laki-laki', '-', '-', '-', '0000-00-00', 'BLOK KIMANGKU DS TGLKARANG KEC.PALIMANAN', '-', '087727131166', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '2017-12-13', 'JAMALI', 'laki-laki', '-', '-', '-', '0000-00-00', 'INDRAMAYU', '-', '082118916060', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '2018-05-19', 'SYAHRONI HERI PURWONO', 'laki-laki', '-', '-', '-', '0000-00-00', 'Desa Terusan RT 05 RW 02 Sindang Im', '-', '087727915754', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '2014-01-27', 'NURITO', 'laki-laki', '-', '-', '-', '0000-00-00', 'TUGU SLIYEG - INDRAMAYU', '-', '087828666517', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '2014-02-10', 'IBU KAMISA', 'laki-laki', '-', '-', '-', '0000-00-00', 'KALIMATI - JATIBARANG', '-', '0', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '2014-07-11', 'ROSSY YULIA SARI', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. MERAH DELIMA E-8', '-', '082127127133', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '2014-09-03', 'YANUAR ESVERANZA', 'laki-laki', '-', '-', '-', '0000-00-00', 'JL. R SUDIBYO NO.30', '-', '081213607081', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '2014-12-12', 'RONI SAPUTRA', 'laki-laki', '-', '-', '-', '0000-00-00', 'Blok Karang Anyar 008/004', '-', '082318881870', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '2014-12-31', 'AGUS SALIM', 'laki-laki', '-', '-', '-', '0000-00-00', 'Blok Karang baru blok bumi patra', '-', '081322326975', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '2015-01-29', 'RUSIDIN', 'laki-laki', '-', '-', '-', '0000-00-00', 'BLOK KETOK II', '-', '08974984767', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, '2018-06-22', 'FAHMI KHAERUL', 'laki-laki', '-', '-', '-', '0000-00-00', '-', '-', '0', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, '2015-02-18', 'TARSONO', 'laki-laki', '-', '-', '-', '0000-00-00', 'DUSUN II SUKADEDEL GG KIBUBAT', '-', '087718821963', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, '2015-02-20', 'SUMITRO', 'laki-laki', '-', '-', '-', '0000-00-00', '-', '-', '0', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, '2015-04-21', 'HARIS CANDRASYAH', 'laki-laki', '-', '-', '-', '0000-00-00', 'BLOK KEPOLO', '-', '0', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, '2015-06-11', 'H. EDI R', 'laki-laki', '-', '-', '-', '0000-00-00', 'TUGU - SLIYEG', '-', '082306766687', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, '2015-07-05', 'IWAN SOSIAWAN', 'laki-laki', '-', '-', '-', '0000-00-00', 'TERUSAN -SINDANG', '-', '085224819421', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, '2015-11-09', 'FEBI ANDRIAN', 'laki-laki', '-', '-', '-', '0000-00-00', 'TOKO MAS VINA', '-', '081222266604', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, '2015-11-09', 'ITA', 'laki-laki', '-', '-', '-', '0000-00-00', 'TOKO MAS VINA', '-', '081222266604', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, '2017-02-21', 'ADANG RONAYANTO', 'laki-laki', '-', '-', '-', '0000-00-00', 'DS. DERMAYU RT 03/01', '-', '085315551999', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '2017-05-19', 'NAZARUDDIN', 'laki-laki', '-', '-', '-', '0000-00-00', 'PERUM JANGKAR MAS BLOK E NO 34', '-', '085321890972', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '2015-04-22', 'MAKMURI', 'laki-laki', '-', '-', '-', '0000-00-00', 'BLOK KEPOLO', '-', '0', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, '2018-10-24', 'DANINGSIH', 'laki-laki', '-', '-', '-', '0000-00-00', 'JL. Yos Sudarso 8B PAOMAN', '-', '087828791418', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, '2018-12-06', 'KAMAL', 'laki-laki', '-', '-', '-', '0000-00-00', 'INDRAMYU', '-', '087828644417', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, '2018-12-06', 'ENDANG RUMIYANTI', 'laki-laki', '-', '-', '-', '0000-00-00', 'JL. MT Haryono 003/001 Dermayu', '-', '087717959090', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, '2019-01-01', 'AWALUDIN', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. IR JUANDA Simpang Tiga Singaraja', '-', '087727722110', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, '2019-01-01', 'KUNTORINI', 'laki-laki', '-', '-', '-', '0000-00-00', 'JL. Alamanda Biru C.01', '-', '085321210006', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, '2019-01-21', 'MOHAMMAD ABDAN SYAKURO', 'laki-laki', '-', '-', '-', '0000-00-00', '0', '-', '089661104570', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, '2019-01-19', 'HERYANA RINALDI HIDAYAT', 'laki-laki', '-', '-', '-', '0000-00-00', 'Grand Royal Resident No. B-1 Indramayu', '-', '081325151533', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, '2011-10-29', 'MAMAN SUKARMAN', 'laki-laki', '-', '-', '-', '0000-00-00', 'Ds. Rambatan Kulon RT 13/02 Lohbener', '-', '085317210202', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, '2017-02-21', 'CASTRA MIHARJA', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Krg Sawah 1 No. 2 RT03/04 Margadadi', '-', '0', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, '2019-01-29', 'WARNO', 'laki-laki', '-', '-', '-', '0000-00-00', 'JL. Letnan Sutejo No. 6/C Margadadi', '-', '081912417122', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, '2019-02-01', 'ZULFIKAR AMRI', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl.Bontang I no 42 Bumi Patra', '-', '087718852369', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, '2019-02-20', 'IMAS KOMALASARI', 'laki-laki', '-', '-', '-', '0000-00-00', 'JL. Cengkir V No. 15 GAU Singajaya ', '-', '082218611002', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, '2019-02-28', 'SADI RISWANTO', 'laki-laki', '-', '-', '-', '0000-00-00', 'Blok KETAPANG', '-', '08974984767', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, '2019-03-05', 'ACHMAD RIFA\'I', 'laki-laki', '-', '-', '-', '0000-00-00', 'Blok Pasar Pabean Girang Kandang Haur', '-', '081510377990', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, '2019-03-05', 'DIDIET PURWODADI DARSONO', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Mayor Dasuki 56 Penganjang Sindang', '-', '087878117773', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, '2019-03-12', 'MOHAMMAD RIZKI RACHMAN', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Manunggal RT 015/RW 001 Deramayu Sindang', '-', '082115917470', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, '2019-03-16', 'MAMAN NUROHMAN', 'laki-laki', '-', '-', '-', '0000-00-00', 'JL. Perjuangan RT 003/RW 001 Bojong Sari', '-', '081911147478', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, '2019-04-11', 'SAEPUDIN', 'laki-laki', '-', '-', '-', '0000-00-00', 'KP GARUNGGANG RT 004 RW 003', '-', '0', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, '2019-04-11', 'WARYO SUWIRYO', 'laki-laki', '-', '-', '-', '0000-00-00', 'Blok C RT 027/RW007 Rambatan Wetan', '-', '08382347387', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, '2019-04-11', 'QOULAN SADIDAN', 'laki-laki', '-', '-', '-', '0000-00-00', 'Ds. Karang Malang - Indramayu', '-', '0', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, '2019-04-15', 'ITA ROSYITA SARI', 'laki-laki', '-', '-', '-', '0000-00-00', 'Komp. Bima Garden A20 Kalikoa Kedawung ', '-', '081802121998', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, '2019-05-02', 'CASDIMAN', 'laki-laki', '-', '-', '-', '0000-00-00', 'BLOK SUKA TANI BANGO DUA RT008/RW004', '-', '0', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, '2019-05-20', 'MASHURI', 'laki-laki', '-', '-', '-', '0000-00-00', 'PERUM BALONGAN PRATAMA B5 No. 8', '-', '085295577079', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, '2019-05-20', 'ENDRI', 'laki-laki', '-', '-', '-', '0000-00-00', 'BLOK KARANG BARU TIMUR DS LOBENER RT 02 RW 01', '-', '0816527577', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, '2019-05-21', 'ABDURACHMAN SATE BAROKAH', 'laki-laki', '-', '-', '-', '0000-00-00', 'JL. Letjend Soeprapto Gg 39', '-', '087737282321', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, '2019-05-22', 'ERIC ROZALINO', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Cengkir VIII No. 29 Griya Ayu Utama', '-', '083824305101', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, '2019-05-23', 'MAMAT ABDUL SOMAD', 'laki-laki', '-', '-', '-', '0000-00-00', 'jl. Manalagi I B2 No 2 Griya Ayu Utama', '-', '087718693872', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, '2019-05-24', 'NURSYAMSIAH', 'laki-laki', '-', '-', '-', '0000-00-00', 'JL> Pasarean RT 008/RW003 Karang Malang', '-', '087712340820', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, '2019-09-24', 'GIDMIR', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Kapten Arya No. 82', '-', '0', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, '2019-11-14', 'SUHENDRI', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Kapten Arya No. 32', '-', '085323039672', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, '2019-12-23', 'MUAMAR KHADAFI', 'laki-laki', '-', '-', '-', '0000-00-00', 'JL. Babar Layar 035/002 Terusan Sindang', '-', '082237135043', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, '2019-12-23', 'SUTISNO', 'laki-laki', '-', '-', '-', '0000-00-00', 'Larangan Jambe Kertasmaya', '-', '081905429217', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, '2020-04-09', 'YAMAN SAFIKRI', 'laki-laki', '-', '-', '-', '0000-00-00', 'PERUM Sindang Citra Blok A No. 54', '-', '087851366393', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, '2020-04-10', 'GUSTI DWI MAULANA', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. P. Dharma Kusuma No 04 Sindang', '-', '085220227907', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, '2020-05-26', 'RATNA JUITA', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Letjen Suprapto Belakang Masjid Annur ', '-', '081214929464', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, '2020-06-08', 'JHODY APSYA RIZKIANA', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Siapem III No. 12 RT 02/05 ', '-', '085224601050', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, '2020-05-24', 'TITING SUHARTINI', 'laki-laki', '-', '-', '-', '0000-00-00', 'MARGA MEKAR JL G. BROMO', '-', '081223362426', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, '2020-07-06', 'PIPIT FITRIYAH ', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Manunggal RT012 RW 003', '-', '085224601050', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, '2020-08-16', 'MAHRUS MA\'SUM. SAg.', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Raya Pekandangan RT 003/002', '-', '081320759028', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, '2020-11-02', 'DIYAN', 'laki-laki', '-', '-', '-', '0000-00-00', 'JAGANG KIDUL 004/003 SALAM MAGELANG', '-', '089505230367', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, '2011-04-30', 'M. IQBAL F.', 'laki-laki', '-', '-', '-', '0000-00-00', 'Griya Asri II Blok B no. 105', '-', '08562280370', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, '2011-06-15', 'RUSTONO', 'laki-laki', '-', '-', '-', '0000-00-00', 'Ds. Rambatan Kulon RT 13/02 Lohbener', '-', '087727818203', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, '2015-02-19', 'SYARIF HIDAYATULLAH', 'laki-laki', '-', '-', '-', '0000-00-00', '0', '-', '0', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, '2011-06-04', 'FUAD HARIS', 'laki-laki', '-', '-', '-', '0000-00-00', 'Jl. Letjen Soeprapto No. 39 Gg 35 Krgmlng  Indramayu', '-', '0811202353', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, '2011-04-25', 'TABRONI', 'laki-laki', '-', '-', '-', '0000-00-00', 'Desa Pekandangan RT 04/05 No. 5 Pkndgn', '-', '085224060258', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, '2015-02-08', 'FIRMAN', 'laki-laki', '-', '-', '-', '0000-00-00', 'JL. IR JUANDA No. 6', '-', '081912952897', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, '2013-02-21', 'SAPI\'IH', 'laki-laki', '-', '-', '-', '0000-00-00', 'BTN LAMA - KOMPLEK ASRAMA PUTRI YATIM', '-', '087828506639', '-', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, '2020-11-25', 'test', 'Laki-Laki', 'test', 'Kawin', 'test', '2020-11-12', 'test', 'tetst', '4545', 'Anggota', '2020-11-24 23:43:16', '2020-11-24 23:43:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_17_074453_create_anggota_table', 1),
(5, '2020_11_25_040843_create_simpanan_table', 1),
(6, '2020_12_08_074353_add_jenis_transaksi_to_simpanan_table', 2),
(7, '2020_12_08_075352_add_jenis_transaksi_to_simpanan_table', 3),
(8, '2020_12_08_075719_add_jenis_transaksi_to_simpanan_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan`
--

CREATE TABLE `simpanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `jenis_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_simpanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_yangdisetor` int(11) NOT NULL DEFAULT 0,
  `jumlah_yangditarik` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `simpanan`
--

INSERT INTO `simpanan` (`id`, `anggota_id`, `jenis_transaksi`, `jenis_simpanan`, `jumlah_yangdisetor`, `jumlah_yangditarik`, `created_at`, `updated_at`) VALUES
(12, 1, 'Simpanan', 'Modal Pokok', 20000, 0, '2020-12-10 21:16:08', '2020-12-10 21:16:08'),
(15, 1, 'Simpanan', 'Simpanan Sukarela (akad Qord)', 70000, 0, '2020-12-10 21:20:25', '2020-12-10 21:20:25'),
(16, 1, 'Simpanan', 'Modal Wajib', 60000, 0, '2020-12-10 21:21:54', '2020-12-10 21:21:54'),
(17, 1, 'Simpanan', 'Simpanan Sukarela (akad Qord)', 10000, 0, '2020-12-10 21:25:04', '2020-12-10 21:25:04'),
(24, 4, 'Simpanan', 'Simpanan Sukarela (akad Qord)', 70000, 0, '2020-12-11 02:07:24', '2020-12-11 02:07:24'),
(26, 4, 'Penarikan', 'Modal Wajib', 0, 70000, '2020-12-11 02:11:02', '2020-12-11 02:11:02'),
(27, 4, 'Simpanan', 'Modal Pokok', 50000, 0, '2020-12-11 02:20:31', '2020-12-11 02:20:31'),
(28, 1, 'Penarikan', 'Modal Wajib', 0, 20000, '2020-12-14 20:43:47', '2020-12-14 20:43:47'),
(29, 1, 'Penarikan', 'Simpanan Sukarela (akad Qord)', 0, 100000, '2020-12-14 20:44:17', '2020-12-14 20:44:17'),
(30, 2, 'Simpanan', 'Modal Pokok', 100000, 0, '2020-12-14 21:26:51', '2020-12-14 21:26:51'),
(32, 2, 'Simpanan', 'Modal Pokok', 70000, 0, '2020-12-15 00:46:09', '2020-12-15 00:46:09'),
(33, 1, 'Simpanan', 'Modal Wajib', 50000, 0, '2020-12-16 01:39:11', '2020-12-16 01:39:11'),
(34, 1, 'Simpanan', 'Modal Wajib', 50000, 0, '2020-12-16 01:39:12', '2020-12-16 01:39:12'),
(35, 1, 'Penarikan', 'Modal Wajib', 0, 50000, '2020-12-16 01:39:41', '2020-12-16 01:39:41'),
(36, 1, 'Simpanan', 'Modal Pokok', 1000000, 0, '2020-12-18 00:33:42', '2020-12-18 00:33:42'),
(37, 1, 'Penarikan', '>Modal Pokok', 0, 500000, '2020-12-18 00:34:05', '2020-12-18 00:34:05'),
(38, 1, 'Simpanan', 'Modal Pokok', 0, 0, '2020-12-18 00:35:09', '2020-12-18 00:35:09'),
(39, 1, 'Simpanan', 'Modal Pokok', 10000, 0, '2020-12-18 00:35:46', '2020-12-18 00:35:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `anggota_id`, `username`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@gmail.com', '$2y$10$DVJS80GpCOrlfR627gHK8OxVnz/vAE4ZnRhRj2lzNUoVqZThYXxia', 'admin', 'ZC3H5gDZJmSmS0E6zwbQeVHPMTEQspKIX8ZAaz0Akgk3M3ZVKeMU8rF5SK7t', '2020-11-24 23:06:11', '2020-11-24 23:06:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
