-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 04:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buahnaga`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_penyakit`
--

CREATE TABLE `tb_detail_penyakit` (
  `id_detail_penyakit` int(11) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `penjelasan` text NOT NULL,
  `pencegahan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_penyakit`
--

INSERT INTO `tb_detail_penyakit` (`id_detail_penyakit`, `kode_penyakit`, `penjelasan`, `pencegahan`) VALUES
(1, 'BP1', 'Penyakit busuk batang pada buah naga merupakan salah satu faktor penghambat produksi karena dapat menyebabkan tanaman menjadi tidak produktif, sehingga perlu dilakukan upaya pengendalian. Pada umumnya penyakit busuk batang menyerang pada awal penanaman buah naga. Beberapa cendawan patogen penyebab penyakit busuk batang kuning adalah Bipolaris cactivora, Fusarium proliferatum dan Fusarium Solani. Gejala serangan yang ditemukan cukup bervariasi seperti, busuk batang pada bagian bawah/pangkal batang dengan warna kuning atau coklat, busuk lunak pada pinggir/tepi batang dengan warna coklat dan kuning, busuk lunak pada cabang produktif atau ujung batang, busuk batang dengan bercak kuning dan hitam mirip serangan antraknose. Penyakit busuk batang ini diperparah dengan adanya serangan hama kutu sisik.', 'Melakukan monitoring secara ketat dan pengendalian dilakukan sedini mungkin dengan cara membuang bagian batang yang busuk\nAplikasi Bubur Bordo, dibuat dengan cara mencampurkan CuSO4, kapur dan air dengan perbandingan 1:1:100\nAplikasi fungisida karena busuk batang pada buah naga banyak disebabkan oleh jamur, dengan cara dioleskan pada bagian batang.'),
(2, 'BP2', 'Gejala seperti tanaman tampak layu, kusam, terdapat lendir putih kekuningan pada tanaman yang mengalami pembusukan. \nPenyebab: penyakit ini disebabkan oleh bakteri Pseudomonas sp. ', 'Dengan mencabut tanaman yang sakit, kemudian pada lubang tanam diberi Basamid dengan dosis 0,5-1 gram dalam bentuk serbuk kemudian pada lubang tanam tersebut ditanam bibit baru.'),
(3, 'BP3', 'Jamur Fusarium oxysporium Schl. Jamur ini menyerang karena tanah atau media tanamnya tidak bisa membuang air dengan lancar.\nGejala: cabang tanaman berkerut, layu, dan busuk berwarna coklat. ', 'Dengan menyemprotkan Benlate T 20 WP atau Derosal 60 WP dengan dosis 2g/liter air dalam seminggu 1-2 kali penyemprotan pada bagian batang dan cabang yang terserang penyakit.'),
(4, 'BP4', 'Adanya sisik yang terletak pada kelopak bunga dan buah adalah salah satu tanda bahwa buah naga sudah terkena kutu daun.\n\nBiasanya lama kelamaan akan menjadi kuning sehingga menyebabkan buah semakin mengecit dan kering serta menjadikan hama lain datang seperti semut. Hama ini dapat menular ke buah naga lainnya maka harus di basmi dengan cepat.', 'Cara pengendalian dapat dilakukan dengan melakukan penyemprotan pestisida nabati 3 -4 hari sekali, seperti nimba, tagetes, eceng gondok, atau rumput laut.\n\nSedang untuk pemulihan anda bisa menggunakan nutrisi tanaman organik, baik melalui akar, dengan cara dikocor, maupun melalui tubuh tanaman, dengan cara disemprot.'),
(5, 'BP5', 'Penyakit antraknosa pada buah naga disebabkan oleh jamur Colletotrichum sp. Gejala Antraknosa dapat dilihat dengan adanya bercak cokelat kehitaman yang biasanya berbentuk bulat agak cekung.', 'Pengendalian alami dapat dilakukan dengan memusnahkan sumber penyakit dengan membuang buah yang sudah terserang dengan cara dibakar.\n\nSedangkan jika terserang banyak, maka dapat dilakukan penyemprotan fungisida dengan bahan aktif azoksistrobin, propineb, dimetomorf, tembaga hidroksida, kaptan, metil tiofanat, klorotalonil, benomil, mankozeb, dan metalaksil.'),
(6, 'BP6', 'Serangan kutu kebul pada tanaman buah naga dapat menimbulkan bercak nekrotik akibat rusaknya sel-sel dan jaringan tanaman pada batang atau cabang yang terserang. Selain kerusakan pada tanaman, kutu kebul juga hama yang berbahaya karena berperan sebagai vektor penular virus tanaman.', 'Untuk menguatkan kondisi tanaman agar mampu bertahan dari inveksi hama yang ditularkan, maka lakukan penyemprotan dengan nutrisi organik secara rutin dan interval 7hari sekali.\n\nSelain itu, untuk mengurangi populasi hama anda bisa lakukan pemasangan alat perangkap yellow trap sebanyak 40 buah/ha. Pengendalian hayati dapat dilakukan dengan memanfaatkan musuh alami kutu kebul, seperti: kumbang predator Menochilus sexmaculatus dan parasitoid Encarcia formosa.'),
(7, 'BP7', 'Tungau memiliki ukuran tubuh sangat kecil dengan bentuk menyerupai laba-laba dan bersifat polyfag, yaitu menyerang hampir segala jenis tanaman.\n\nTungau menyerang dengan cara menghisap cairan batang dan cabang tanaman buah naga. Akibat hama ini dapat menimbulkan permukaan kulit batang dan cabang muncul bintik-bintik kuning atau cokelat. Sedangkan pada serangan yang berat dapat menyebabkan tanaman buah naga tumbuh tidak normal.', 'Cara pengendalian hama tungau dapat dilakukan dengan cara penyemprotan pestisida nabati 3-4 hari sekali, seperti nimba, tagetes, eceng gondok, atau rumput laut.\n\nSedangkan untuk pemulihan bisa anda lakukan dengan cara memberikan nutrisi tanaman organik, baik melalui akar, dengan cara dikocor, maupun melalui tubuh tanaman, dengan cara disemprot. Secara kimia dilakukan penyemprotan Omite dengan dosis 1-2 gr/ltr air yang dilakukan 2-3 kali seminggu.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL,
  `nama_gejala` varchar(50) NOT NULL,
  `kode_penyakit` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kode_gejala`, `nama_gejala`, `kode_penyakit`) VALUES
(3, 'G01', 'Busuk pada pangkal batang berbatas dengan tanah', '0'),
(4, 'G02', 'Busuk kering dibagian tepi batang', '0'),
(5, 'G03', 'Busuk basah batang muncul bercak kuning', '0'),
(6, 'G04', 'Busuk basah bagian ujung batang', '0'),
(7, 'G05', 'Terdapat bulu putih bagian pangkal batang', '0'),
(9, 'G06', 'Tanaman layu', ''),
(10, 'G07', 'Tanaman berwarna kuning kusam', ''),
(11, 'G08', 'Terdapat lendir putih kekuningan', ''),
(12, 'G09', 'Tanaman tampak basah', ''),
(13, 'G10', 'Cabang tanaman mengkerut', ''),
(14, 'G11', 'Cabang tanaman busuk berwarna coklat', ''),
(15, 'G12', 'Cabang tanaman layu', ''),
(16, 'G13', 'Buah mengecil', ''),
(17, 'G14', 'Pucuk daun mengkerut', ''),
(18, 'G15', 'Pucuk daun Kering', ''),
(19, 'G16', 'Pembusukan bunga', ''),
(20, 'G17', 'Buah Membusuk', ''),
(21, 'G18', 'Terdapat bercak jinggan pada buah', '0'),
(22, 'G19', 'Kusam pada sulur', '0'),
(23, 'G20', 'Luka konsentris berwarna merah coklat pada batang', '0'),
(24, 'G21', 'Terdapat bercak nekrotik', '0'),
(25, 'G22', 'Muncul belang-belang berwarna kuning', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemeriksaan`
--

CREATE TABLE `tb_pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `input_gejala` varchar(50) NOT NULL,
  `penyakit_utama` varchar(50) NOT NULL,
  `penyakit_lain` varchar(100) NOT NULL,
  `tgl_periksa` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemeriksaan`
--

INSERT INTO `tb_pemeriksaan` (`id_pemeriksaan`, `id_user`, `nama_pasien`, `input_gejala`, `penyakit_utama`, `penyakit_lain`, `tgl_periksa`) VALUES
(13, 2, 'Sari', 'G01,G05,G07,G09', 'Busuk Bakteri', '{\"BP2\":\"1\",\"BP5\":\"0.8\",\"BP1\":\"0.6\",\"BP3\":\"0.6\",\"BP4\":\"0.6\",\"BP7\":\"0.6\",\"BP6\":\"0.4\"}', '2021-07-23 22:30:58'),
(14, 2, 'siti', 'G01,G02,G03,G06,G07,G08', 'Busuk Bakteri', '{\"BP2\":\"1.6\",\"BP1\":\"1.4\",\"BP3\":\"1\",\"BP5\":\"0.6\",\"BP4\":\"0.4\",\"BP6\":\"0.4\",\"BP7\":\"0.4\"}', '2021-09-27 11:10:59'),
(15, 2, 'siti', 'G01,G02,G03,G05,G07', 'Busuk Pangkal Batang', '{\"BP1\":\"1.6\",\"BP2\":\"0.8\",\"BP6\":\"0.8\",\"BP5\":\"0.6\",\"BP7\":\"0.4\",\"BP3\":\"0.2\",\"BP4\":\"0\"}', '2021-09-27 11:11:15'),
(16, 2, 'Giyanto', 'G07,G10,G12,G14,G17,G19', 'Fussarium', '{\"BP3\":\"0.8\",\"BP5\":\"0.6\",\"BP7\":\"0.6\",\"BP2\":\"0.4\",\"BP4\":\"0.4\",\"BP6\":\"0.4\",\"BP1\":\"0\"}', '2021-10-26 16:21:45'),
(17, 2, '', 'G02,G04,G05,G07,G09', 'Busuk Pangkal Batang', '{\"BP1\":\"0.8\",\"BP6\":\"0.8\",\"BP2\":\"0.6\",\"BP7\":\"0.4\",\"BP3\":\"0.2\",\"BP4\":\"0\",\"BP5\":\"0\"}', '2021-10-26 23:09:37'),
(18, 2, '', 'G01,G03,G05,G07,G09', 'Busuk Pangkal Batang', '{\"BP1\":\"1.2\",\"BP2\":\"1\",\"BP6\":\"0.8\",\"BP5\":\"0.6\",\"BP7\":\"0.4\",\"BP3\":\"0.2\",\"BP4\":\"0\"}', '2021-10-26 23:12:17'),
(19, 2, 'Ryan', 'G01,G03,G05,G07,G09', 'Busuk Pangkal Batang', '{\"BP1\":\"1.2\",\"BP2\":\"1\",\"BP6\":\"0.8\",\"BP5\":\"0.6\",\"BP7\":\"0.4\",\"BP3\":\"0.2\",\"BP4\":\"0\"}', '2021-10-26 23:14:13'),
(20, 2, 'Ryan', 'G01,G03,G07,G08,G18', 'Busuk Bakteri', '{\"BP2\":\"1.2\",\"BP1\":\"1\",\"BP5\":\"1\",\"BP3\":\"0.8\",\"BP6\":\"0.4\",\"BP7\":\"0.4\",\"BP4\":\"0\"}', '2021-10-26 23:15:29'),
(21, 2, 'mukidan', 'G01,G03,G07,G08,G18', 'Busuk Bakteri', '{\"BP2\":\"1.2\",\"BP1\":\"1\",\"BP5\":\"1\",\"BP3\":\"0.8\",\"BP6\":\"0.4\",\"BP7\":\"0.4\",\"BP4\":\"0\"}', '2021-11-01 22:48:45'),
(22, 2, 'mukidan', 'G01,G03,G07,G08,G18', 'Busuk Bakteri', '{\"BP2\":\"1.2\",\"BP1\":\"1\",\"BP5\":\"1\",\"BP3\":\"0.8\",\"BP6\":\"0.4\",\"BP7\":\"0.4\",\"BP4\":\"0\"}', '2021-11-01 23:04:55'),
(23, 2, 'mukidan', 'G01,G03,G07,G08,G18', 'Busuk Bakteri', '{\"BP2\":\"1.2\",\"BP1\":\"1\",\"BP5\":\"1\",\"BP3\":\"0.8\",\"BP6\":\"0.4\",\"BP7\":\"0.4\",\"BP4\":\"0\"}', '2021-11-01 23:08:43'),
(24, 2, 'mukidan', 'G01,G03,G07,G08,G18', 'Busuk Bakteri', '{\"BP2\":\"1.2\",\"BP1\":\"1\",\"BP5\":\"1\",\"BP3\":\"0.8\",\"BP6\":\"0.4\",\"BP7\":\"0.4\",\"BP4\":\"0\"}', '2021-11-01 23:14:06'),
(31, 2, 'mukidan', 'G01,G03,G07,G08,G18', 'Busuk Bakteri', '{\"BP2\":\"1.2\",\"BP1\":\"1\",\"BP5\":\"1\",\"BP3\":\"0.8\",\"BP6\":\"0.4\",\"BP7\":\"0.4\",\"BP4\":\"0\"}', '2021-11-01 23:28:57'),
(32, 2, 'mukidan', 'G01,G03,G07,G08,G18', 'Busuk Bakteri', '{\"BP2\":\"1.2\",\"BP1\":\"1\",\"BP5\":\"1\",\"BP3\":\"0.8\",\"BP6\":\"0.4\",\"BP7\":\"0.4\",\"BP4\":\"0\"}', '2021-11-01 23:38:27'),
(33, 2, 'mukidan', 'G01,G03,G07,G08,G18', 'Busuk Bakteri', '{\"BP2\":\"1.2\",\"BP1\":\"1\",\"BP5\":\"1\",\"BP3\":\"0.8\",\"BP6\":\"0.4\",\"BP7\":\"0.4\",\"BP4\":\"0\"}', '2021-11-01 23:46:11'),
(34, 2, 'Siti', 'G01,G03,G07,G19,G21', 'Busuk Pangkal Batang', '{\"BP1\":\"1\",\"BP2\":\"0.8\",\"BP5\":\"0.6\",\"BP6\":\"0.6\",\"BP7\":\"0.6\",\"BP3\":\"0.2\",\"BP4\":\"0\"}', '2022-01-10 11:52:27'),
(35, 2, 'ada', 'G01,G03,G05,G07,G09,G21,G22', 'Busuk Pangkal Batang', '{\"BP1\":\"1.2\",\"BP2\":\"1\",\"BP6\":\"1\",\"BP7\":\"1\",\"BP5\":\"0.6\",\"BP3\":\"0.2\",\"BP4\":\"0\"}', '2022-01-14 16:49:48'),
(36, 2, 'ada', 'G01,G03,G05,G07,G09,G19,G20,G21,G22', 'Penyakit Hama Tungau', '{\"BP7\":\"1.2\",\"BP1\":\"1.2\",\"BP2\":\"1\",\"BP6\":\"1\",\"BP5\":\"0.6\",\"BP3\":\"0.2\",\"BP4\":\"0.2\"}', '2022-01-14 17:33:21'),
(37, 2, 'ada', 'G01,G03,G05,G07,G09,G19,G20,G21,G22', 'Penyakit Hama Tungau', '{\"BP7\":\"1.2\",\"BP1\":\"1.2\",\"BP2\":\"1\",\"BP6\":\"1\",\"BP5\":\"0.6\",\"BP3\":\"0.2\",\"BP4\":\"0.2\"}', '2022-01-14 17:34:31'),
(38, 2, '', 'G01,G03,G05,G07,G08,G16,G19', 'Busuk Pangkal Batang', '{\"BP1\":\"1.2\",\"BP2\":\"1.2\",\"BP3\":\"0.8\",\"BP5\":\"0.8\",\"BP6\":\"0.8\",\"BP7\":\"0.6\",\"BP4\":\"0\"}', '2022-01-14 18:02:48'),
(39, 2, '', 'G01,G03,G05,G07,G08,G16,G19', 'Busuk Pangkal Batang', '{\"BP1\":\"1.2\",\"BP2\":\"1.2\",\"BP3\":\"0.8\",\"BP5\":\"0.8\",\"BP6\":\"0.8\",\"BP7\":\"0.6\",\"BP4\":\"0\"}', '2022-01-14 18:11:31'),
(40, 2, 'sasa', 'G01,G03,G07,G08,G18', 'Fussarium', '{\"BP3\":\"0.85\",\"BP2\":\"0.69\",\"BP1\":\"0.64\",\"BP5\":\"0.59\",\"BP6\":\"0.4\",\"BP7\":\"0.37\",\"BP4\":\"0\"}', '2022-01-14 20:36:13'),
(41, 2, 'Giman Naga', 'G01,G03,G07,G08,G18', 'Busuk Bakteri', '{\"BP2\":\"0.69\",\"BP3\":\"0.69\",\"BP1\":\"0.64\",\"BP5\":\"0.59\",\"BP6\":\"0.4\",\"BP7\":\"0.37\",\"BP4\":\"0\"}', '2022-01-14 21:08:55'),
(42, 2, 'Giman Naga', 'G01,G03,G07,G08,G18', 'Busuk Bakteri', '{\"BP2\":\"0.69\",\"BP3\":\"0.69\",\"BP1\":\"0.64\",\"BP5\":\"0.59\",\"BP6\":\"0.4\",\"BP7\":\"0.37\",\"BP4\":\"0\"}', '2022-01-14 21:19:50'),
(43, 2, 'Giman Naga', 'G01,G03,G07,G08,G18', 'Busuk Bakteri', '{\"BP2\":\"0.69\",\"BP3\":\"0.69\",\"BP1\":\"0.64\",\"BP5\":\"0.59\",\"BP6\":\"0.4\",\"BP7\":\"0.37\",\"BP4\":\"0\"}', '2022-01-14 21:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `nama_penyakit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `kode_penyakit`, `nama_penyakit`) VALUES
(1, 'BP1', 'Busuk Pangkal Batang'),
(2, 'BP2', 'Busuk Bakteri'),
(3, 'BP3', 'Fussarium'),
(4, 'BP4', 'Penyakit Hama Kutu Daun'),
(5, 'BP5', 'Penyakit Antraknosa'),
(6, 'BP6', 'Penyakit Hama Kutu Kebul'),
(7, 'BP7', 'Penyakit Hama Tungau');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `hasil_diagnosa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `level`, `nama`, `pass`, `alamat`, `hasil_diagnosa`) VALUES
(1, 1, 'admin', 'admin1', 'jember', ''),
(2, 0, 'sari', 'tem', 'jbr', ''),
(3, 0, 'Febri', 'asd', 'JL. SYAMANHUDI', ''),
(4, 0, 'Febri', 'abc', 'JL. SYAMANHUDI', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_penyakit`
--
ALTER TABLE `tb_detail_penyakit`
  ADD PRIMARY KEY (`id_detail_penyakit`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_penyakit`
--
ALTER TABLE `tb_detail_penyakit`
  MODIFY `id_detail_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
