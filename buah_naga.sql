-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2021 pada 17.36
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buah_naga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_penyakit`
--

CREATE TABLE `tb_detail_penyakit` (
  `id_detail_penyakit` int(11) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `penjelasan` text NOT NULL,
  `pencegahan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_penyakit`
--

INSERT INTO `tb_detail_penyakit` (`id_detail_penyakit`, `kode_penyakit`, `penjelasan`, `pencegahan`) VALUES
(1, 'BP1', 'Gastritis merupakan peradangan yang mengenai mukosa lambung. Peradangan ini dapat menyebabkan pembengkakan lambung sampai terlepasnya epitel mukosa suferpisial yang menjadi penyebab terpenting dalam gangguan saluran pencernaan', 'Pemeliharaan yang efisien antara lain  pemupukan tepat\r\ndosis, tepat waktu dan tepat sesuai dengan anjuran.\r\n'),
(2, 'BP2', 'Dispepsia berasal dari bahasa Yunani, yaitu dys (buruk) dan peptein (pencernaan). Istilah dispepsia mulai gencar dikemukakan sejak akhir tahun 1980- an, yang menggambar keluhan atau kumpulan gejala (sindrom) yang terdiri dari nyeri atau rasa tidak nyaman di epigastrum, mual, muntah, kembung, cepat kenyang, rasa penuh, sendawa, regurgitasi, dan rasa panas yang menjalar di dada. Sindrom atau keluhan ini dapat disebabkan atau didasari oleh berbagai penyakit, termasuk juga didalamnya penyakit yang mengenai lambung atau yang dikenal sebagai penyakit maag ', 'Penggunaan pestisida dengan bahan aktif tembaga hidroksida digunakan untuk\r\nmenegndalikan penyakit inidi Philipina. Aplikasinya dilakukan dengan penyemprotan keseluruh bagian tanaman dan pengocoran pada pangkal batang.\r\n'),
(3, 'BP3', 'Kanker lambung jarang menimbulkan gejala spesifik pada stadium awal. Gejalanya dapat berupa perut kembung atau nyeri ulu hati, dan sering kali hanya dianggap sebagai keluhan sakit maag. Kondisi tersebut membuat kanker lambung sulit untuk didiagnosis secara dini, dan umumnya baru terdiagnosis  setelah  masuk stadium akhir. Hal ini tentunya akan mempengaruhi peluang kesembuhan. Tumor ganas lambung/kanker lambung adalah tumordi lambung yang bersifat ganas. ', 'Pengendalian secara teknis\r\ndilakukan dengan melakukan\r\npergiliran tanaman yang\r\nlebih tahan terhadap serangan\r\ncendawan fusarium\r\noxysporum. Pengolahan\r\nlahan dengan membajak atau\r\nmencangkul. Pemberian\r\nkapur pertanian sebelum\r\npenanaman. Membuat\r\nbedengan dengan tujuan\r\nmenghindari genangan air.\r\n'),
(4, 'BP4', 'GERD adalah suatu gangguan berupa isi lambung mengalami refluks berulang ke dalam esofagus, menyebabkan gejala dan atau komplikasi yang mengganggu (Monica DS, Widi B 2017). GERD adalah suatu keadaan patologis akibat refluks kandungan lambung ke dalam esofagus dengan berbagai gejala akibat keterlibatan esofagus, faring, laring dan saluran napas. Sedangkan menurut American College of Gastroenterology, GERD is a physical condition in which acid from the stomach flows backward up into the esofagus. Jadi, GERD adalah suatu keadaan patologis di mana cairan asam lambung mengalami refluks sehingga masuk ke dalam esofagus dan menyebabkan gejala.', 'Menjaga kebersihan kebun,\r\nhama kutu daun bersifat polifag\r\nyaitu memiliki banyak\r\ntanaman inang termasuk\r\ngulma atau rumput liar,\r\n'),
(5, 'BP5', 'Gastroenteritis didefinisikan sebagai peningkatan frekuensi, volume, dan kandungan fluida dari tinja. Propulsi yang cepat dari isi usus melalui hasil usus kecil diare dan dapat menyebabkan defisit volume cairan serius. Penyebab umum adalah infeksi, sindrom malabsorpsi, obat, alergi, dan penyakit sistemik. (Black Joyce, Hawks Jane, 2010) Jadi dapat disimpulkan gastroenteritis adalah buang air besar dengan frekuensi tidak normal dan konsistensi tinja yang lebih lembek atau cair, dengan kandungan air pada feses lebih banyak dari biasanya yaitu lebih dari 200 gram atau 200 ml/24 jam.', 'Pemberian fungisida secara\r\nberkala untuk mencegah\r\nserangan jamur terhadap\r\ntanaman.\r\n'),
(6, 'BP6', 'Gastroparesis adalah suatu kondisi yang memengaruhi pergerakan spontan otot-otot (motilitas) di perut. Normalnya setelah menelan makanan, otot-otot dalam dinding perut akan menggiling makanan menjadi bentuk yang lebih kecil dan mendorong masuk ke dalam usus halus. Pada gastroparesis, motilitas perut akan melambat atau tidak berfungsi sama sekali, mencegah pengosongan perut yang benar, sehingga menyebabkan pengosongan lambung memakan waktu yang lama. (Barucha AE. 2015)', 'penyemprotan pestisida nabati seperti nimba, tagetes, eceng gondok, atau rumput laut harus dilakukan secara rutin dengan interval 3-4 hari sekali.'),
(7, 'BP7', 'Tukak Lambung didefinisikan sebagai sebuah kerusakan integritas mukosa lambung   dan/atau   duodenum   yang  menyebabkann            terjadinya   inflamasi  lokal (Valle, 2005). Disebut tukak apabila robekan mukosa berdiameter ? 5 mm kedalaman sampai submukosa dan muskularis mukosa atau secara klinis tukak adalah hilangnya epitel superfisial atau lapisan lebih dalam dengan diameter ? 5 mm yang dapat diamati secara endoskopis atau  radiologis. Robekan  mukosan     < 5 mm disebut erosi dimana nekrosis tidak sampai ke muskularis mukosa dan submukosa. Tukak peptik merujuk kepada penyakit di salur pencernaan bagian atas yang disebabkan oleh asam dan pepsin. Spektum penyakit tukak peptik adalah luas meliputi kerusakan mukosa, eritema, erosi mukosa dan ulkus.', 'menyemprotkan Omite dengan dosis 1-2 gr/ltr air yang dilakukan 2-3 kali seminggu.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL,
  `nama_gejala` varchar(50) NOT NULL,
  `kode_penyakit` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gejala`
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
-- Struktur dari tabel `tb_pemeriksaan`
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
-- Dumping data untuk tabel `tb_pemeriksaan`
--

INSERT INTO `tb_pemeriksaan` (`id_pemeriksaan`, `id_user`, `nama_pasien`, `input_gejala`, `penyakit_utama`, `penyakit_lain`, `tgl_periksa`) VALUES
(13, 2, 'Sari', 'G01,G05,G07,G09', 'Busuk Bakteri', '{\"BP2\":\"1\",\"BP5\":\"0.8\",\"BP1\":\"0.6\",\"BP3\":\"0.6\",\"BP4\":\"0.6\",\"BP7\":\"0.6\",\"BP6\":\"0.4\"}', '2021-07-23 22:30:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `kode_penyakit` varchar(5) NOT NULL,
  `nama_penyakit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penyakit`
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
-- Struktur dari tabel `tb_user`
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
-- Dumping data untuk tabel `tb_user`
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
-- Indeks untuk tabel `tb_detail_penyakit`
--
ALTER TABLE `tb_detail_penyakit`
  ADD PRIMARY KEY (`id_detail_penyakit`);

--
-- Indeks untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indeks untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_detail_penyakit`
--
ALTER TABLE `tb_detail_penyakit`
  MODIFY `id_detail_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
