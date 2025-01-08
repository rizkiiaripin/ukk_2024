-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2024 at 09:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk2024_perpus_mrizkixiirpl1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` varchar(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` enum('aktif','tidak aktif') NOT NULL,
  `password` varchar(500) NOT NULL,
  `nm_anggota` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat_anggota` text NOT NULL,
  `telp_anggota` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `username`, `status`, `password`, `nm_anggota`, `jk`, `alamat_anggota`, `telp_anggota`) VALUES
('099', 'siti', 'aktif', 'sari123', 'rs', 'L', 'w', 34),
('AG008', 'rizki', 'aktif', 'rizki123', 'rizki', 'P', 'yy', 8888),
('AG009', 'rizki', 'aktif', 'rizki123', 'ds', 'P', 'n', 766),
('AG010', 'rizki', 'aktif', 'rizki123', 'rizki', 'P', 'wqw', 32),
('AG011', 'asep', 'aktif', 'rizki123', 'asep ako', 'L', 'cihurip', 34345);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` varchar(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `thn_terbit` int(4) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `isbn` varchar(15) NOT NULL,
  `id_kategori` varchar(5) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `id_penerbit` varchar(5) NOT NULL,
  `foto_sampul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_beli` int(10) NOT NULL,
  `lokasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `judul`, `thn_terbit`, `jumlah`, `isbn`, `id_kategori`, `pengarang`, `id_penerbit`, `foto_sampul`, `deskripsi`, `harga_beli`, `lokasi`) VALUES
('0025', 'Biografi syekh Nawawi', 2024, 5, '9786231892652', 'k005', 'Ishmatul Maula dan Qoriroh', 'P003', 'efektifbicara.jpg', 'Buku ini mengupas tuntas biografi agung Syekh Nawawi al-Bantani, seorang ulama Indonesia yang mengharumkan nama bangsa di dunia internasional. Ia adalah seorang ulama multitalenta. Seorang ulama dari Nusantara yang menjadi guru dan imam besar di Masjidil Haram, serta seorang penulis brilian yang telah banyak menulis karya dari berbagai disiplin ilmu keislaman. Ia adalah ulama Indonesia paling produktif pada abad ke-19. Karya-karyanya menyebar ke belahan dunia Islam, khususnya Timur Tengah dan Asia Tenggara hingga sekarang.', 54, 'rak 02'),
('B002', 'Home Sweet Loan', 2020, 4, '3213-8575-9678', 'k002', 'Almira Bastari', 'P005', 'Home_Sweet_Loan_cov.jpg', 'Deskripsi Produk\r\n\r\nNovel Home Sweet Loan ditulis oleh Almira Bastari, seorang penulis muda yang namanya sudah populer di Indonesia. Novel Home Sweet Loan baru saja diterbitkan oleh Gramedia Pustaka Utama pada tahun 2022.\r\n\r\nNovel Home Sweet Loan mengangkat genre yang sama dengan karya Almira sebelumnya yang berjudul “Ganjil Genap”, yaitu metropop. Namun, novel Home Sweet Loan ini akan menyajikan cerita yang ditulis menjadi lebih serius.\r\n\r\nLayaknya novel-novel karya Almira sebelumnya, Home Sweet Loan menggunakan latar cerita di Kota Jakarta. Namun, cerita kali ini lebih menyoroti kaum menengah dengan mengisahkan perjuangan dari sudut pandang mereka.\r\n\r\nSinopsis\r\n\r\nEmpat orang yang berteman sejak SMA bekerja di perusahaan yang sama meski beda nasib. Di usia 31 tahun, mereka berburu rumah idaman yang minimal nyerempet Jakarta. Kaluna, pegawai Bagian Umum, yang gajinya tak pernah menyentuh dua digit. Gadis ini bekerja sampingan sebagai model bibir, bermimpi membeli rumah demi keluar dari situasi tiga kepala keluarga yang bertumpuk di bawah satu atap. Di tengah perjuangannya menabung, Kaluna dirongrong oleh kekasihnya untuk pesta pernikahan mewah.\r\n\r\nSelain itu, ada juga masalah hutang keluarganya. Masalah-masalah ini menjadikan Kaluna merasa menjadi rakyat jelata saja tidak cukup membuat kepalanya mumet luar biasa. Tanisha, ibu satu anak yang menjalani Long Distance Marriage, mencari rumah murah dekat MRT yang juga bisa menampung mertuanya.\r\n\r\nKamamiya, yang berambisi menjadi selebgram, mencari apartemen cantik untuk diunggah ke media sosial demi memenuhi gengsinya agar bisa menikah dengan pria kaya. Danan, anak tunggal tanpa beban yang akhirnya berpikir untuk berhenti hura-hura, dan membeli aset agar bisa pensiun dengan tenang. Apakah keempat sahabat ini berhasil menemukan rumah yang mampu mereka cicil? Dan apakah Kaluna bisa membentuk keluarga yang ia impikan?\r\n\r\nJenis Cover : Soft Cover', 50, 'rak-01'),
('B003', 'Membangun Generasi Aktif Literasi', 2023, 5, ' 9786235690209', 'k001', 'Malahayati Dan Peng Kheng Sun', 'P005', 'juypr9vaavdb3aenxxmmwk.jpg', 'Membaca apalagi menulis, terkesan menjemukan bagi Kebanyakan orang. Itulah sebabnya tidak banyak orang yang bisa menikmatinya. Membaca dan menulis walaupun dilakukan, biasanya dengan terpaksa, misal untuk memenuhi tugas akademis atau tugas administrasi. Padahal, umumnya orang percaya bahwa membaca dan menulis itu sangat penting. Ini berarti terjadi suatu gap, yakni di satu sisi membaca dan menulis itu menjadi beban yang berat, tetapi di sisi lain sangat penting. Buku Membangun Generasi Aktif Literasi ini mencoba menjembatani gap itu agar aktivitas membaca dan menulis bisa dinikmati oleh siapa saja.\r\n\r\nBanyak orang merasa prihatin terhadap minat baca-tulis yang rendah baik di kalangan pelajar maupun masyarakat. Namun, selama membaca dan menulis hanya terasa sebagai beban tanpa memiliki manfaat yang nyata atau bisa dinikmati, maka wajar saja mayoritas orang bakal memilih tidak mau membaca dan menulis. Membaca dan menulis hanya akan menjadi pilihan banyak orang jika memang bermanfaat nyata serta mengasyikkan. Dengan terbitnya buku Membangun Generasi Aktif Literasi ini diharapkan bisa memberikan wawasan kepada masyarakat bahwa membaca dan menulis itu sebenarnya adalah aktivitas yang mengasyikkan.\r\n\r\nSecara umum, orang mengakui aktivitas membaca dan menulis (baca: literasi) itu sangat penting. Namun, mengapa hanya sedikit orang yang mau melakukan aktivitas membaca dan menulis secara rutin? Penyebab utamanya adalah aktivitas membaca dan menulis cenderung dipandang sebagai beban yang berat untuk dilakukan, sedangkan manfaatnya tidak terasa signifikan. Selain itu, aktivitas membaca dan menulis juga kurang bisa dinikmati seperti halnya orang menonton televisi atau browsing internet. Buku Membangun Generasi Aktif Literasi ini bertujuan untuk menjembatani kesenjangan tersebut agar aktivitas membaca dan menulis selain benar benar bermanfaat, juga bisa dinikmati oleh siapa saja. Buku ini juga memperkenalkan berbagai inovasi di bidang literasi seperti Book Game, Cerpen-gram Box, Metode Korita, Reading Record, Kartu Catatan Kontemporer, dan sebagainya. Semua inovasi ini akan mendukung aktivitas baca-tulis sehingga menghasilkan manfaat yang optimal. Karena itu, buku ini sesuai dengan judulnya, sangat penting dibaca oleh siapa saja yang antusias dan serius untuk membangun generasi aktif literasi dalam berbagai skala seperti dalam skala pribadi, keluarga, sekolah, masyarakat, dan bahkan dalam skala bangsa.', 55, 'rak-05'),
('B004', 'Implementasi Kurikulum Merdeka', 2023, 6, '9786233286770', 'k001', 'Prof. Dr. H. E. Mulyasa, M.Pd.', 'P003', 'oferymu3htrnvjhesahu4y.jpg', 'Perubahan kurikulum kali ini diharapkan mampu mendorong terciptanya pendidikan yang berkualitas dan dapat menghasilkan sumber daya manusia pembangunan yang beretos kerja tinggi untuk menyiapkan Indonesia Emas tahun 2045. Hal ini penting, terutama dalam memasuki era digitalisasi yang sarat dengan kualitas dan penuh persaingan. Dalam konteks tersebut, semoga buku ini dapat membantu saudara menerapkan kurikulum secara tepat waktu dan tepat sasaran. Buku ini berupaya memformulasikan suatu cara praktis dalam implementasi Kurikulum Merdeka sehingga dapat dijadikan panduan oleh para pelaksana di lapangan. Buku ini juga menyajikan contoh kurikulum operasional yang harus dikembangkan oleh guru dan kepala sekolah di sekolah masing-masing.\r\nBuku ini mencakup penjelasan mengenai Paradigma Baru Kurikulum Merdeka, Strategi Implementasi Kurikulum Merdeka, Rencana Pembelajaran dalam Implementasi Kurikulum Merdeka, Pelaksanaan Pembelajaran dalam Implementasi Kurikulum Merdeka, Strategi dan Pendekatan Pembelajaran dalam Implementasi Kurikulum Merdeka, Melatih Kemampuan Berpikir Tingkat Tinggi dalam Implementasi Kurikulum Merdeka, dan Menciptakan Iklim Sekolah Pendukung Implementasi Kurikulum Merdeka\r\n\r\nTentang Penulis\r\nProf Dr. H. E Mulyasa, M.Pd. Penulis merupakan Guru Besar Universitas Langlangbuana (Unla) Bandung, sebagai dosen DPK dari Kopertis Wilayah IV. Pendidikan dasar dan menengah ditempuh di kota angin Majalengka jawa Barat. Gelar sarjana (1986), magister (1997), dan doktor (2002) dengan predikat CumLaude dari IKIP/UPI Bandung. Pengabdiannya dimulai sejak l985 menjadi guru pada beberapa sekolah menengah di Bandung dan Asisten Dosen di FIP IKIP Bandung, Pada tahun 1988-2005 menjadi dosen Universitas Negeri Malang. Dari 2005 menjadi dosen Kopertis menjadi DPK pada Pascasarjana uninus Bandung. Guru Besar Manajemen Pendidikan dan Pengembangan Kurikulum dikukuhkan tahun 2007. Dari 2008--2016 menjadi Ketua Program S2 Magister Manajemen Pendidikan dan Ketua Lembaga Penjaminan Mutu Uninus. I Tahun 200S menjadi Tim Penilai angka kredit dosen di lingkungan Kopertis IV Jawa Barat dan Banten. Mulai 2020 alih tugas DPK ke Universitas Langlangbuana (Unla) Bandung.', 80, 'rak-01'),
('B005', 'Jago Memengaruhi Orang di Mana Pun & Kapan Pun', 2024, 5, '9786231649799', 'k002', 'Ipnu R. Nugroho', 'P005', 'nmcaanen3.jpg', 'Jago Memengaruhi Orang Di Mana Pun & Kapan Pun : Menjadi Pribadi Terbuka, Berempati, Pandai dalam Memperlakukan Lawan Bicara\r\n\r\nBagaimana menciptakan karisma kepribadian yang baik? Bagaimana menciptakan kesan yang baik pada diri kita? Bagaimana orang-orang bisa menyukai kita? Bagaimana menjaga komunikasi yang baik dengan orang lain?\r\n\r\nDari pertanyaan-pertanyaan di atas, kita memahami bahwa kecenderungan manusia untuk menyukai sesuatu dapat bervariasi antara satu individu dengan yang lainnya. Namun, kita juga menyadari bahwa daya tarik seseorang tidak semata-mata bergantung pada penampilan fisik. Faktor-faktor seperti kedewasaan dan kepribadian juga dapat membuat seseorang terlihat menarik.\r\n\r\nOleh karena itu, sebagai individu, kita dapat menarik perhatian orang lain dengan menjadi seseorang yang berkarisma dan memberikan aura positif kepada orang di sekitar kita. Hal ini akan membuat kita diperhatikan oleh lawan bicara kita dan menciptakan hubungan yang lebih baik. Sebagai tambahan, memiliki kemampuan mendengarkan dengan baik juga merupakan ciri dari orang yang berkarisma.', 48, 'rak-02'),
('B006', 'Cepat dan Mudah Berbicara Secara Efektif', 2024, 5, '9786235151342', 'k001', 'M. Heri Susilo', 'P003', 'efektifbicara.jpg', '\r\nApakah Anda sering merasa gugup atau kurang percaya diri saat berbicara di depan umum? Ingin tahu rahasia sukses para public speaker yang mampu memukau audiens dengan kata-kata mereka? Jika jawaban Anda adalah ya maka buku ini adalah solusi yang Anda cari!\r\n\r\nPublic speaking memang bukan hal yang mudah, terutama ketika Anda harus berhadapan dengan banyak orang. Namun, dengan keterampilan dan strategi yang tepat, Anda bisa tampil percaya diri dan meyakinkan.\r\n\r\nDi dalam buku ini, Anda akan menemukan metode EFT (Emotional Freedom Techniques) yang terbukti efektif untuk mengatasi grogi, ketakutan, dan kurangnya kepercayaan diri. Metode ini akan membimbing Anda untuk berkomunikasi dengan bahasa yang lugas dan penuh keyakinan.\r\n\r\nTahun Terbit : Cetakan Pertama, September 2024\r\n\r\nPernahkah Anda terpikir betapa menariknya dunia yang terbuka lebar lewat lembaran buku? Membaca bukan hanya kegiatan rutin, tetapi juga petualangan tak terbatas ke dalam imajinasi dan pengetahuan. Membaca mengasah pikiran, membuka wawasan, dan memperkaya kosakata. Ini adalah pintu menuju dunia di luar kita yang tak terbatas. Tetapkan waktu khusus untuk membaca setiap hari.\r\n\r\nDari membaca sebelum tidur hingga menyempatkan waktu di pagi hari, kebiasaan membaca dapat dibentuk dengan konsistensi. Pilih buku sesuai minat dan level literasi. Mulailah dengan buku yang sesuai dengan keinginan dan kemampuan membaca. Temukan tempat yang tenang dan nyaman untuk membaca. Lampu yang cukup, kursi yang nyaman, dan sedikit musik pelataran bisa menciptakan pengalaman membaca yang lebih baik. Bergabunglah dalam kelompok membaca atau forum literasi. Diskusikan buku yang Anda baca dan dapatkan rekomendasi dari sesama pembaca. Buat catatan atau jurnal tentang buku yang telah Anda baca.\r\n\r\nTuliskan pemikiran, kesan, dan pelajaran yang Anda dapatkan. Libatkan keluarga dalam kegiatan membaca. Bacakan cerita untuk anak-anak atau ajak mereka membaca bersama. Ini menciptakan ikatan keluarga yang erat melalui kegiatan positif. Jangan ragu untuk menjelajahi genre baru. Terkadang, kejutan terbaik datang dari buku yang tidak pernah Anda bayangkan akan Anda nikmati. Manfaatkan teknologi dengan membaca buku digital atau bergabung dalam komunitas literasi online. Ini membuka peluang untuk terhubung dengan pembaca dari seluruh dunia.', 54, 'rak-03\r\n'),
('B007', 'Komik Next G Vol. 585: Mal Kosong', 2024, 5, '9786231500847', 'k003', 'Muhammad Rifqi Ansari, dkk', 'P001', 'komik.jpg', 'Sepulang bermain, Arun, Lisa, dan Desi melewati sebuah gedung mal besar yang sudah lama tutup. Menurut cerita yang beredar, banyak sekali kejadian menyeramkan di mal itu. Namun, mereka tidak mau percaya sebelum membuktikan sendiri kebenarannya. Dan sepertinya, ini misteri yang harus mereka selidiki! Kira-kira, apa yang mereka temukan di dalam mal kosong itu?\r\n', 50, 'rak 04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_kembali`
--

CREATE TABLE `tbl_detail_kembali` (
  `no` int(10) NOT NULL,
  `id_kembali` varchar(5) DEFAULT NULL,
  `id_buku` varchar(5) DEFAULT NULL,
  `jumlah` int(5) NOT NULL,
  `jumlah_kembali` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `denda_buku` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_detail_kembali`
--

INSERT INTO `tbl_detail_kembali` (`no`, `id_kembali`, `id_buku`, `jumlah`, `jumlah_kembali`, `keterangan`, `denda_buku`) VALUES
(1, 'K001', 'B001', 0, 0, '', 0),
(2, 'P002', 'B002', 1, 1, 'Sesuai', 0),
(3, 'P002', 'B002', 1, 1, 'Sesuai', 0),
(4, 'P002', 'B002', 1, 1, '', 0),
(5, 'P003', 'B003', 5, 4, 'Denda', 55);

--
-- Triggers `tbl_detail_kembali`
--
DELIMITER $$
CREATE TRIGGER `tambah_buku` AFTER INSERT ON `tbl_detail_kembali` FOR EACH ROW BEGIN 
UPDATE tbl_buku SET jumlah = jumlah + new.jumlah
WHERE id_buku = new.id_buku;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_pinjam`
--

CREATE TABLE `tbl_detail_pinjam` (
  `no` int(10) NOT NULL,
  `id_pinjam` varchar(5) NOT NULL,
  `id_buku` varchar(5) NOT NULL,
  `jumlah` int(30) NOT NULL,
  `status` enum('Diterima','Ditolak') NOT NULL,
  `alasan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_detail_pinjam`
--

INSERT INTO `tbl_detail_pinjam` (`no`, `id_pinjam`, `id_buku`, `jumlah`, `status`, `alasan`) VALUES
(1, 'P002', 'B002', 1, 'Diterima', 'NULL'),
(2, 'P003', 'B003', 5, 'Diterima', 'NULL'),
(3, 'P003', 'B002', 1, 'Diterima', 'hai');

--
-- Triggers `tbl_detail_pinjam`
--
DELIMITER $$
CREATE TRIGGER `kurangi_buku` AFTER INSERT ON `tbl_detail_pinjam` FOR EACH ROW BEGIN 
UPDATE tbl_buku SET jumlah = jumlah - new.jumlah
WHERE id_buku = new.id_buku;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` varchar(5) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nm_kategori`) VALUES
('k001', 'Pendidikan'),
('k002', 'Novel'),
('k003', 'komik'),
('k004', 'Science\r\n'),
('k005', 'Biografi\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kembali`
--

CREATE TABLE `tbl_kembali` (
  `id_kembali` varchar(5) NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `denda` int(10) DEFAULT NULL,
  `id_pinjam` varchar(5) DEFAULT NULL,
  `id_anggota` varchar(5) DEFAULT NULL,
  `id_petugas` varchar(5) DEFAULT NULL,
  `status_kembali` enum('Proses','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kembali`
--

INSERT INTO `tbl_kembali` (`id_kembali`, `tgl_kembali`, `denda`, `id_pinjam`, `id_anggota`, `id_petugas`, `status_kembali`) VALUES
('K001', '2024-12-22', 2000, 'P002', 'AG002', 'PE001', 'Proses'),
('P002', '2024-11-23', 0, 'P002', 'AG005', 'PE001', 'Selesai'),
('P003', '2024-11-23', 55, 'P003', 'AG005', 'PE002', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penerbit`
--

CREATE TABLE `tbl_penerbit` (
  `id_penerbit` varchar(5) NOT NULL,
  `nm_penerbit` varchar(100) NOT NULL,
  `alamat_penerbit` text NOT NULL,
  `telp_penerbit` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_penerbit`
--

INSERT INTO `tbl_penerbit` (`id_penerbit`, `nm_penerbit`, `alamat_penerbit`, `telp_penerbit`) VALUES
('P001', 'deepublish', ' Jl. Rajawali Gg. Elang 6 No.3, Drono, Sardonoharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta.', 87526348),
('P002', 'Bukunesia ', ' di Gedung Kompas Gramedia Lantai 5, Jl. Palmerah Barat 29-37. Jakarta 10270. ', 87346362),
('P003', 'Gramedia Pustaka Utama', 'di Gedung Kompas Gramedia Lantai 5, Jl. Palmerah Barat 29-37. Jakarta 10270', 878674654),
('P004', 'Dr.Agus supraman S.H ', 'Madura', 857436431),
('P005', 'Dr.Juanda S.Kom', 'Tasikmalaya', 858437522);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_petugas` varchar(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `status` varchar(30) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `password` varchar(25) NOT NULL,
  `nm_petugas` varchar(100) NOT NULL,
  `telp_petugas` int(15) NOT NULL,
  `alamat_petugas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `username`, `status`, `jk`, `password`, `nm_petugas`, `telp_petugas`, `alamat_petugas`) VALUES
('PE001', 'dama1', 'admin', 'L', '12345', 'Dama Putra', 87434733, 'lewihdahu'),
('PE002', 'M.Brahma', 'admin', 'L', '12345', 'malim Brahmanakasih', 875645439, 'cihurip');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `id_pinjam` varchar(5) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status_peminjaman` enum('Proses','Dipinjam','Batal','Dikembalikan') NOT NULL,
  `id_anggota` varchar(5) NOT NULL,
  `id_petugas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pinjam`
--

INSERT INTO `tbl_pinjam` (`id_pinjam`, `tgl_pinjam`, `tgl_kembali`, `status_peminjaman`, `id_anggota`, `id_petugas`) VALUES
('P003', '2024-11-21', '2024-12-21', 'Dipinjam', 'AG005', 'PE002'),
('P004', '2024-11-01', '2024-11-25', 'Proses', 'AG001', 'PE001');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_detail_peminjaman`
-- (See below for the actual view)
--
CREATE TABLE `view_detail_peminjaman` (
`id_pinjam` varchar(5)
,`id_buku` varchar(5)
,`judul` varchar(100)
,`harga_beli` int(10)
,`jumlah` int(30)
,`status` enum('Diterima','Ditolak')
,`alasan` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_peminjaman`
-- (See below for the actual view)
--
CREATE TABLE `view_peminjaman` (
`id_pinjam` varchar(5)
,`tgl_pinjam` date
,`tgl_kembali` date
,`id_anggota` varchar(5)
,`nm_anggota` varchar(100)
,`id_petugas` varchar(5)
,`nm_petugas` varchar(100)
,`status_peminjaman` enum('Proses','Dipinjam','Batal','Dikembalikan')
);

-- --------------------------------------------------------

--
-- Structure for view `view_detail_peminjaman`
--
DROP TABLE IF EXISTS `view_detail_peminjaman`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_detail_peminjaman`  AS SELECT `tbl_detail_pinjam`.`id_pinjam` AS `id_pinjam`, `tbl_buku`.`id_buku` AS `id_buku`, `tbl_buku`.`judul` AS `judul`, `tbl_buku`.`harga_beli` AS `harga_beli`, `tbl_detail_pinjam`.`jumlah` AS `jumlah`, `tbl_detail_pinjam`.`status` AS `status`, `tbl_detail_pinjam`.`alasan` AS `alasan` FROM (`tbl_buku` join `tbl_detail_pinjam`) WHERE `tbl_detail_pinjam`.`id_buku` = `tbl_buku`.`id_buku``id_buku`  ;

-- --------------------------------------------------------

--
-- Structure for view `view_peminjaman`
--
DROP TABLE IF EXISTS `view_peminjaman`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_peminjaman`  AS SELECT `tbl_pinjam`.`id_pinjam` AS `id_pinjam`, `tbl_pinjam`.`tgl_pinjam` AS `tgl_pinjam`, `tbl_pinjam`.`tgl_kembali` AS `tgl_kembali`, `tbl_pinjam`.`id_anggota` AS `id_anggota`, `tbl_anggota`.`nm_anggota` AS `nm_anggota`, `tbl_pinjam`.`id_petugas` AS `id_petugas`, `tbl_petugas`.`nm_petugas` AS `nm_petugas`, `tbl_pinjam`.`status_peminjaman` AS `status_peminjaman` FROM ((`tbl_pinjam` join `tbl_anggota`) join `tbl_petugas`) WHERE `tbl_pinjam`.`id_anggota` = `tbl_anggota`.`id_anggota` AND `tbl_pinjam`.`id_petugas` = `tbl_petugas`.`id_petugas``id_petugas`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbl_detail_kembali`
--
ALTER TABLE `tbl_detail_kembali`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_detail_pinjam`
--
ALTER TABLE `tbl_detail_pinjam`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_kembali`
--
ALTER TABLE `tbl_kembali`
  ADD PRIMARY KEY (`id_kembali`);

--
-- Indexes for table `tbl_penerbit`
--
ALTER TABLE `tbl_penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_kembali`
--
ALTER TABLE `tbl_detail_kembali`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_detail_pinjam`
--
ALTER TABLE `tbl_detail_pinjam`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
