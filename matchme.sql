-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 04:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matchme`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_kuis`
--

CREATE TABLE `hasil_kuis` (
  `id` int(11) NOT NULL,
  `hasil` varchar(5) DEFAULT NULL,
  `tanggal_ikut` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kuis`
--

CREATE TABLE `kuis` (
  `id` int(11) NOT NULL,
  `soal` text NOT NULL,
  `pilihan1` text NOT NULL,
  `pilihan2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuis`
--

INSERT INTO `kuis` (`id`, `soal`, `pilihan1`, `pilihan2`) VALUES
(1, 'Di sebuah pesta, sayaâ€¦', 'Berinteraksi dengan orang banyak, termasuk orang asing', 'Berinteraksi dengan sedikit orang, yang telah dikenal'),
(2, 'Saya lebihâ€¦.', 'Realistis daripada spekulatif', 'Spekulatif daripada realistis'),
(3, 'Yang lebih buruk bagi saya adalahâ€¦', 'Berkhayal dan tidak memperhatikan apa yang terjadi', 'Melakukan sesuatu yang membosankan'),
(4, 'Saya lebih terkesan denganâ€¦', 'Prinsip', 'Emosi'),
(5, 'Saya lebih tergerak denganâ€¦', 'Diyakinkan', 'Disentuh'),
(6, 'Saya lebih memilih bekerjaâ€¦', 'Sesuai dengan deadlines', 'Kapan saja'),
(7, 'Saya lebih cenderung memilihâ€¦', 'Berhati-hati', 'Menurut kata hati'),
(8, 'Di sebuah pesta, saya pulangâ€¦', 'Terlambat, dengan bertambah semangat', 'Lebih awal, dengan energi yang terkuras'),
(9, 'Saya lebih tertarik padaâ€¦', 'Orang yang bijaksana', 'Orang yang imajinatif'),
(10, 'Saya lebih tertarik padaâ€¦', 'Apa yang sesungguhnya', 'Apa yang mungkin'),
(11, 'Saat menghakimi orang lain, saya lebih berdasarkanâ€¦', 'Hukum daripada keadaan', 'Keadaan daripada hukum'),
(12, 'Dalam hal memandang orang lain, saya akan cenderungâ€¦', 'Obyektif', 'Personal'),
(13, 'Saya telah...', 'Tepat waktu', 'Tidak tergesa-gesa'),
(14, 'Saya lebih terganggu memiliki pekerjaan yangâ€¦', 'Tidak selesai', 'Selesai'),
(15, 'Di komunitas atau kelompok sosial, saya cenderungâ€¦', 'Terus mengikuti apa yang terjadi dengan anggota lainnya', 'Ketinggalan berita'),
(16, 'Saat melakukan hal sehari-hari, saya lebih sukaâ€¦', 'Melakukan dengan cara biasanya/umum', 'Melakukan dengan cara sendiri'),
(17, 'Penulis seharusnyaâ€¦', 'Mengatakan apa yang mereka maksud dan mengartikan apa yang mereka\r\nkatakan', 'Mengekspresikan sesuatu lebih menggunakan analogi'),
(18, 'Saya lebih tertarik denganâ€¦', 'Konsistensi pikiran', 'Hubungan manusia yang harmonis'),
(19, 'Saya lebih nyaman membuatâ€¦', 'Penghakiman berdasarkan logika', 'Penghakiman berdasarkan nilai-nilai/prinsip'),
(20, 'Saya ingin sesuatu...', 'Tetap dan diputuskan', 'Tidak tetap dan tidak diputuskan'),
(21, 'Saya cenderungâ€¦', 'Serius dan meyakinkan', 'Easy-going'),
(22, 'Saat menelpon, sayaâ€¦', 'Jarang bertanya-tanya apa yang akan dikatakan', 'Melatih terlebih dahulu apa yang akan dikatakan'),
(23, 'Fakta :', 'Berbicara untuk mereka sendiri', 'Mengilustrasikan prinsip'),
(24, 'Seorang pengkhayal adalahâ€¦', 'Sesuatu yang mengganggu', 'Cukup menarik'),
(25, 'Saya adalah seorang yang lebihâ€¦', 'Tenang', 'Hangat'),
(26, 'Lebih buruk jika...', 'Tidak stabil', 'Tanpa kasihan'),
(27, 'Seharusnya selalu membiarkan semua terjadiâ€¦', 'Dengan seleksi yang hati-hati', 'Secara random'),
(28, 'Saya merasa lebih baik jikaâ€¦', 'Telah dibayar', 'Mendapatkan pilihan untuk membeli'),
(29, 'Di perusahaan, sayaâ€¦', 'Mengawali pembicaraan', 'Menunggu untuk didekati'),
(30, 'Akal sehat bagi sayaâ€¦', 'Jarang dipertanyakan', 'Sering dipertanyakan'),
(31, 'Anak-anak sering tidakâ€¦', 'Membuat diri mereka cukup berguna', 'Cukup melatih fantasi mereka'),
(32, 'Saat membuat keputusan, saya lebih nyaman denganâ€¦', 'Standar yang telah ada', 'Perasaan'),
(33, 'Saya lebih...', 'Tegas daripada lembut', 'Lembut daripada tegas'),
(34, 'Saya lebih bangga padaâ€¦', 'Kemampuan mengorganisasi dan melakukan metode', 'Kemampuan beradaptasi dan membuat sesuatu'),
(35, 'Saya lebih menaruh nilai padaâ€¦', 'Tak terbatas', 'Terbuka'),
(36, 'Interaksi baru dengan orang lain akanâ€¦', 'Membuat bersemangat', 'Membebani diri'),
(37, 'Saya lebih sering...', 'Praktis', 'Aneh'),
(38, 'Saya lebih sukaâ€¦', 'Melihat bagaimana orang lain berguna', 'Melihat bagaimana orang lain melihat'),
(39, 'Saya lebih puas saatâ€¦', 'Mendiskusikan sebuah isu', 'Mencapai sebuah kesepakatan untuk sebuah isu'),
(40, 'Yang lebih mengatur saya adalahâ€¦', 'Pikiran saya', 'Hati saya'),
(41, 'Saya lebih nyaman bekerja denganâ€¦', 'Kontrak', 'Tidak tetap'),
(42, 'Saya cenderung padaâ€¦', 'Kerapian', 'Apa saja yang muncul'),
(43, 'Saya lebih memilih', 'Banyak teman dengan hubungan singkat', 'Sedikit teman dengan hubungan panjang'),
(44, 'Saya lebih pada...', 'Fakta', 'Prinsip'),
(45, 'Saya lebih tertarik denganâ€¦', 'Produksi dan distribusi', 'Desain dan riset'),
(46, 'Ini merupakan sebuah pujian bagi saya:', 'â€œOrang yang sangat logis.â€', 'â€œOrang yang sangat sentimental.â€'),
(47, 'Saya lebih menilai diri saya sebagai pribadi yangâ€¦', 'Kokoh', 'Mengabdi'),
(48, 'Saya lebih memilihâ€¦', 'Pernyataan final dan tidak dapat berubah', 'Pernyataan pendahuluan dan sementara'),
(49, 'Saya lebih nyamanâ€¦', 'Setelah sebuah keputusan', 'Sebelum sebuah keputusan'),
(50, 'Saya ituâ€¦', 'Berbicara dengan mudah dan panjang pada orang asing', 'Berbicara sedikit pada orang asing'),
(51, 'Saya lebih percaya padaâ€¦', 'Pengalaman', 'Firasat'),
(52, 'Saya merasaâ€¦', 'Lebih mempraktekkan daripada banyak akal', 'Lebih banyak akal daripada mempraktekkan'),
(53, 'Orang yang lebih pantas mendapat pujian yaitu yangâ€¦', 'Memiliki alasan jelas', 'Memiliki perasaan kuat'),
(54, 'Saya cenderung', 'Berpikir adil', 'Simpatik'),
(55, 'Saya adalah orang yangâ€¦', 'Meyakinkan bahwa semuanya telah teratur', 'Membiarkan semuanya terjadi apa adanya'),
(56, 'Pada sebuah hubungan seharusnya bisaâ€¦', 'Dinegosiasikan kembali', 'Random dan sambil lalu'),
(57, 'Saat telepon berbunyi, saya akanâ€¦', 'Cepat mengangkatnya pertama kali', 'Berharap orang lain akan menjawab'),
(58, 'Saya itu lebihâ€¦', 'Memiliki perasaan kuat terhadap kenyataan', 'Memiliki imajinasi yang hidup'),
(59, 'Saya lebih tergerak padaâ€¦', 'Fundamental', 'Tambahan'),
(60, 'Yang terlihat salah lebih besar adalahâ€¦', 'Menjadi terlalu penuh gairah', 'Menjadi terlalu obyektif'),
(61, 'Saya melihat diri saya sebenarnyaâ€¦', 'Keras kepala', 'Berhati lembut'),
(62, 'Situasi yang membuat saya lebih tertarik adalah yang lebihâ€¦', 'Terstruktur dan terjadwal', 'Tidak terstruktur dan tidak terjadwal'),
(63, 'Saya adalah orang yang lebihâ€¦', 'Rutin daripada tidak keruan', 'Tidak keruan daripada rutin'),
(64, 'Saya lebih cenderungâ€¦', 'Mudah didekati', 'Sedikit pendiam'),
(65, 'Saat menulis, saya memilihâ€¦', 'Lebih harfiah/sebenarnya', 'Lebih bersifat kiasan/perlambangan'),
(66, 'Sulit bagi saya untukâ€¦', 'Mengidentifikasikan orang lain', 'Menggunakan orang lain'),
(67, 'Saya berharap bahwa saya akan lebihâ€¦', 'Jelas dalam alasan', 'Kuat dalam berperasaan'),
(68, 'Kesalahan yang lebih besar adalahâ€¦', 'Menjadi tidak pandang bulu', 'Menjadi kritis'),
(69, 'Saya lebih memilihâ€¦', 'Acara yang direncanakan', 'Acara yang tidak terencana'),
(70, 'Saya cenderung lebihâ€¦', 'Berhati-hati daripada spontan', 'Spontan daripada berhati-hati');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(100) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `para1` text NOT NULL,
  `para2` text NOT NULL,
  `para3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `nama`, `gambar`, `gambar2`, `para1`, `para2`, `para3`) VALUES
(1, 'Bimbingan dan Konseling', '../img/jurusan/pendidikan/KONSELING_BK.jpg', '../../../img/jurusan/pendidikan/KONSELING_BK.jpg', 'Bimbingan dan Konseling, adalah salah satu ilmu pendidikan yang mempelajari bagaimana memberikan konsultasi secara perorangan maupun kelompok. Jurusan bimbingan dan konseling dipersiapkan untuk menjawab tuntutan dunia pendidikan yang membutuhkan tenaga pengajar atau guru yang memiliki kompetensi serta keahlian dalam menangani permasalahan dan pengembangan siswa, mulai dari TK, SD, SMP hingga SMA.', 'Dalam jurusan konseling, akan banyak mempelajari bagaimana cara menangani kasus atau permasalahan yang dimiliki oleh siswa, baik itu masalah yang menyangkut pribadi, sekolah maupun keluarga. Dalam jurusan bimbingan dan konseling, tidak hanya permasalahan yang akan dipelajari, melainkan bagaimana cara mengembangkan potensi serta bakat yang ada pada diri siswa akan turut menjadi fokus inti dari jurusan ini.  Beberapa keahlian yang nantinya akan dilatih dalam jurusan ini adalah interview, observasi, membuat analisa permasalahan dan cara penyelesaiannya. Keahlian ini akan kalian pelajari selama kuliah di jurusan ini, karena keahlian tersebutlah yang nantinya menjadi modal dasar kalian dalam bekerja, baik itu di dunia pendidikan maupun sosial.', 'Mata kuliah yang nantinya akan kalian pelajari antara lain adalah Pengantar Pendidikan, Bimbingan dan Konseling Perkembangan, Antropologi, Sosiologi, Psikologi Pendidikan, Dasar Bimbingan Konseling, Dasar Pemahaman Perilaku, Landasan Psikologis Pendidikan, Landasan Sosial BK, Pengantar Konseling, Kesehatan Mental, Bimbingan dan Konseling Belajar, Pribadi-sosial, dan Karir, Kesehatan Mental, Bimbingan Kelompok, Konseling Individual, Kelompok, dan Multibudaya, Analisis dan Perubahan Tingkah Laku, Asesmen Psikologis: Teknik nontes, Testing, Media Bimbingan dan Konseling, Teknologi Informasi dan Bimbingan Konseling, Keterampilan Dasar Komunikasi, Praktikum Asesmen Psikologis, Statistika Deskriptis, Statistika Inferensial, Riset Kualitatif dan Kuantitatif, Evaluasi dan Supervisi BK, Praktikum Bimbingan Kelompok dan lain sebagainya.  Prospek kerja lulusan ini tidak hanya di dunia pendidikan aja lho guys, kalian juga bisa memulai karir di berbagai perusahaan swasta, asuransi, LSM, komunitas, jurnalis dan lain sebagainya.'),
(2, 'Tata Boga', '../img/jurusan/pendidikan/Tata_Boga.jpg', '../../../img/jurusan/pendidikan/Tata_Boga.jpg', '', '', ''),
(3, 'Pendidikan Luar Sekolah', '../img/jurusan/pendidikan/PLS.jpg', '../../../img/jurusan/pendidikan/PLS.jpg', '', '', ''),
(4, 'Olahraga', '../img/jurusan/pendidikan/olahraga.jpg', '../../../img/jurusan/pendidikan/olahraga.jpg', '', '', ''),
(5, 'Pendidikan Agama Islam', '../img/jurusan/pendidikan/agama_islam.jpg', '../.../../img/jurusan/pendidikan/agama_islam.jpg', '', '', ''),
(6, 'Pendidikan Guru TK', '../img/jurusan/pendidikan/PGSD_PGTK.jpg', '../../../img/jurusan/pendidikan/PGSD_PGTK.jpg', '', '', ''),
(7, 'Pendidikan Guru SD', '../img/jurusan/pendidikan/PGSD_PGTK.jpg', '../../../img/jurusan/pendidikan/PGSD_PGTK.jpg', '', '', ''),
(8, 'Administrasi Pendidikan', '../img/jurusan/pendidikan/administrasi_pendidikan.jpg', '../../../img/jurusan/pendidikan/administrasi_pendidikan.jpg', '', '', ''),
(9, 'Teknologi Pendidikan', '../img/jurusan/pendidikan/teknologi_pendidikan.jpg', '../../../img/jurusan/pendidikan/teknologi_pendidikan.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `peternakan`
--

CREATE TABLE `peternakan` (
  `id` int(100) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `para1` text NOT NULL,
  `para2` text NOT NULL,
  `para3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peternakan`
--

INSERT INTO `peternakan` (`id`, `nama`, `gambar`, `gambar2`, `para1`, `para2`, `para3`) VALUES
(1, 'Produksi Ternak', '../img/jurusan/peternakan/produksi_ternak.jpg', '../../../img/jurusan/peternakan/produksi_ternak.jpg', 'Oke teman-teman, pembahasan ini masih tentang peternakan. Apa sih yang pertama kali muncul di pikiran kamu ketika kamu dengar kata peternakan? Hewan? Yup, so pastilah! Tapi, pernah kepikiran ga sih kalau soal hewan dan produksi ternak itu ternyata ada jurusan kuliahnya tersendiri? Namanya jurusan Produksi Ternak. Sini, matchme punya infonya buat kalian semua!', 'Jurusan Produksi Ternak ini memberikan pendidikan dan pengetahuan tentang bagaimana caranya mengembangkan hewan ternak. Hal tersebut termasuk juga mengenai perlakuan biologis secara eksternal maupun internal, serta interaksinya melalui rekayasa dan input teknologi yang diarahkan untuk tujuan produksi. Tujuan produksi? Maksudnya apa, ya? Yuhuuu, karena titik beratnya adalah mengenai produksi ternak, maka yang dimaksud dengan tujuan produksi disini adalah output yang berupa daging, susu, telur, kerja atau tenaga ternak, dan lain sebagainya.  Apa saja yang akan kamu pelajari jika berkuliah di jurusan ini? Nanti kamu akan belajar banyak hal mengenai Biokimia, Genetika, Fisika Ternak, Mikrobiologi, Ilmu Lingkungan Ternak, Kewirausahaan Peternakan, Ilmu Tanaman Pakan, Ilmu Nutrisi Ternak Dasar, Ilmu Pemulian Ternak, Produksi Ternak Unggas, Produksi Ternak Perah, Produksi Ternak Potong dan Kerja, Ilmu Nutrisi Pakan, Ilmu Kesehatan Ternak, Bidang Keteknikan, dan lain sebagainya.', 'Lalu, apa yang bisa kalian lakukan ketika sudah lulus nanti? Sebagai seorang sarjana lulusan jurusan Produksi Ternak, kamu bisa menjadi manajer farm, melakukan wirausaha secara mandiri, serta menjadi pendidik atau peneliti. Selain itu, kamu juga bisa bekerja di setting Kementerian Perindustrian, Kementerian Peternakan, media massa dan agrowisata, atau bahkan konselor peternakan di setting industri.   Selamat memilih karir di masa depan ya guys..  #SUKSESHargaMati'),
(2, 'Nutrisi & Pakan Ternak', '../img/jurusan/peternakan/nutrisi_dan_makanan.jpg', '../../../img/jurusan/peternakan/nutrisi_dan_makanan.jpg', '', '', ''),
(3, 'Teknologi Hasil Ternak', '../img/jurusan/peternakan/teknologi_hasil_ternak.jpg', '../../../img/jurusan/peternakan/teknologi_hasil_ternak.jpg', '', '', ''),
(4, 'Budidaya Perairan', '../img/jurusan/peternakan/budidaya_perairan.jpg', '../../../img/jurusan/peternakan/budidaya_perairan.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `senisastrabudaya`
--

CREATE TABLE `senisastrabudaya` (
  `id` int(100) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `gambar2` varchar(200) NOT NULL,
  `para1` text NOT NULL,
  `para2` text NOT NULL,
  `para3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senisastrabudaya`
--

INSERT INTO `senisastrabudaya` (`id`, `nama`, `gambar`, `gambar2`, `para1`, `para2`, `para3`) VALUES
(1, 'Fashion Design', '../img/jurusan/senisastrabudaya/Fashion_Design.jpg', '../../../img/jurusan/senisastrabudaya/Fashion_Design.jpg', 'Haiii.. info bagus nih buat kalian yang menyukai desain dan update fashion, jurusan ini sangat cocok buat kalian, jurusan ini mempelajari bagaimana merancang, mendesain dan mengembangkan berbagai macam pakaian maupun aksesoris baru dan orisinil. Artinya, jurusan ini akan selalu melahirkan tren-tren baru di dunia fashion baik di lingkup lokal maupun internasional. Wowww, keceee !!!  Untuk menjalani kuliah di jurusan ini, kalian harus memiliki daya imajinasi yang tinggi mengenai fashion ya guys, imajinasi itu akan muncul dengan sendirinya ketika kalian memang betul berminat dengan dunia ini, jangan memaksakan diri untuk mengambil jurusan ini jika kalian tidak berminat, kemampuan itu bisa di asah, tapi masalah minat, itu datangnya dari dalam hati guys.', 'Selain itu, kalian juga harus memiliki kemampuan dalam menggambar, karena untuk mendesain sebuah rancangan pakaian atau aksesoris, kalian akan menuangkan ide tersebut pada selembar kertas yang dibantu oleh goresan pensil, dengan sentuhan seni tentunya. Makin seru kan, dalam jurusan ini, kalian juga diajari bagaimana teknik menjahit dan memotong kain dengan benar lhoo.  Jiwa seni kalian akan ditantang dan diuji di jurusan ini, mulai dari mendesain sebuah rancangan, pemilihan warna, pemilihan jenis kain, proses cutting dan lain sebagainya. Ide-ide liar kalian akan sangat berguna di jurusan ini untuk melahirkan kreasi serta inovasi baru di dunia fashion.', 'Mata kuliah yang akan kalian pelajari di jurusan ini antara lain Pola Busana, Konsep Desain Busana, Pengetahuan Tekstil, Komputer Desain, Desain Aksesories Busana, Fashion Merchandising, Teknik Menjahit Busana, Desain Tekstil, Pengelolaan Peragaan Busana, Konsep Kreatif dan lain sebagainya.  Prospek karir lulusan Fashion Desain antara lain adalah Fashion designer, Fashion stylist, Fashion merchandisers, Fashion consultant, Membuka usaha mandiri di bidang Fashion seperti: Butik, Distro, dan Factory Outlet, dosen, guru dan lain sebagainya.'),
(2, 'Sastra Sunda', '../img/jurusan/senisastrabudaya/SASTRA_SUNDA.jpg', '../../../img/jurusan/senisastrabudaya/SASTRA_SUNDA.jpg', '', '', ''),
(3, 'Arkeologi', '../img/jurusan/senisastrabudaya/arkeologi.jpg', '../../../img/jurusan/senisastrabudaya/arkeologi.jpg', '', '', ''),
(4, 'Sastra Jawa', '../img/jurusan/senisastrabudaya/sastra_jawa.jpg', '../../../img/jurusan/senisastrabudaya/sastra_jawa.jpg', '', '', ''),
(5, 'Sastra Belanda', '../img/jurusan/senisastrabudaya/sastra_belanda.jpg', '../../../img/jurusan/senisastrabudaya/sastra_belanda.jpg', '', '', ''),
(6, 'Sastra Jerman', '../img/jurusan/senisastrabudaya/sastra_jerman.jpg', '../../../img/jurusan/senisastrabudaya/sastra_jerman.jpg', '', '', ''),
(7, 'Sastra Korea', '../img/jurusan/senisastrabudaya/sastra_korea.jpg', '../../../img/jurusan/senisastrabudaya/sastra_korea.jpg', '', '', ''),
(8, 'Sastra Arab', '../img/jurusan/senisastrabudaya/sastra_arab.jpg', '../../../img/jurusan/senisastrabudaya/sastra_arab.jpg', '', '', ''),
(9, 'Sastra Rusia', '../img/jurusan/senisastrabudaya/sastra_rusia.jpg', '../../../img/jurusan/senisastrabudaya/sastra_rusia.jpg', '', '', ''),
(10, 'Sastra Cina', '../img/jurusan/senisastrabudaya/sastra_cina.jpg', '../../../img/jurusan/senisastrabudaya/sastra_cina.jpg', '', '', ''),
(11, 'Sastra Prancis', '../img/jurusan/senisastrabudaya/sastra_prancis.jpg', '../../../img/jurusan/senisastrabudaya/sastra_prancis.jpg', '', '', ''),
(12, 'Sastra Jepang', '../img/jurusan/senisastrabudaya/sastra_jepang.jpg', '../../../img/jurusan/senisastrabudaya/sastra_jepang.jpg', '', '', ''),
(13, 'Ilmu Filsafat', '../img/jurusan/senisastrabudaya/ilmu_filsafat.jpg', '../../../img/jurusan/senisastrabudaya/ilmu_filsafat.jpg', '', '', ''),
(14, 'Ilmu Sejarah', '../img/jurusan/senisastrabudaya/sejarah.jpg', '../../../img/jurusan/senisastrabudaya/sejarah.jpg', '', '', ''),
(15, 'Sastra Indonesia', '../img/jurusan/senisastrabudaya/sastra_indonesia.jpg', '../../../img/jurusan/senisastrabudaya/sastra_indonesia.jpg', '', '', ''),
(16, 'Antropologi', '../img/jurusan/senisastrabudaya/antropologi.jpg', '../../../img/jurusan/senisastrabudaya/antropologi.jpg', '', '', ''),
(17, 'Sastra Inggris', '../img/jurusan/senisastrabudaya/sastra_inggris.jpg', '../../../img/jurusan/senisastrabudaya/sastra_inggris.jpg', '', '', ''),
(18, 'Desain Grafis', '../img/jurusan/senisastrabudaya/desain_grafis.jpg', '../../../img/jurusan/senisastrabudaya/desain_grafis.jpg', '', '', ''),
(19, 'Desain Interior', '../img/jurusan/senisastrabudaya/desain_interior.jpg', '../../../img/jurusan/senisastrabudaya/desain_interior.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sosial`
--

CREATE TABLE `sosial` (
  `id` int(100) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `gambar2` varchar(200) NOT NULL,
  `para1` text NOT NULL,
  `para2` text NOT NULL,
  `para3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sosial`
--

INSERT INTO `sosial` (`id`, `nama`, `gambar`, `gambar2`, `para1`, `para2`, `para3`) VALUES
(1, 'Ilmu Sosiatri', '../img/jurusan/sosial/ilmu_sosiatri.jpg', '../../../img/jurusan/sosial/ilmu_sosiatri.jpg', 'Ilmu Sosiatri atau saat ini dikenal sebagai jurusan Ilmu Kesejahteraan sosial, merupakan salah satu cabang dari ilmu sosial yang mempelajari hubungan antar-manusia di dalam masyarakat dalam konteks pembangunan atau pengembangan masyarakat itu sendiri.  Fokus utama kajiannya adalah pembangunan masyarakat, yakni tindakan-tindakan manusia untuk menciptakan keseimbangan hubungan antara kebutuhan (needs) dengan sumberdaya (resources) yang tersedia guna mencapai kesejahteraan baik dari segi fisik, mental maupun sosial.', 'Dalam pengembangannya, perhatian Ilmu Sosiatri tidak hanya terbatas pada upaya-upaya mengatasi kelainan sosial dalam kehidupan masyarakat, melainkan lebih jauh ke pasca penanganan masalah tersebut, yakni pembangunan masyarakat. Oleh karena itu, ada dua pendekatan utama yang digunakan Ilmu Sosiatri di dalam kajian tentang objek ilmunya, yakni pendekatan community organization (CO) dan community develompent (CD).   Apabila kedua pendekatan itu dijadikan basis penilaian, maka secara substansial Ilmu Sosiatri termasuk cukup berkembang. Ilmu ini dapat disebut sebagai embrio sekaligus pioner dalam pengembangan pendekatan-pendekatan pembangunan masyarakat yang bersifat aplikatif. Pendekatan tersebut juga diadopsi oleh Jurusan Ilmu Kesejahteraan Sosial yang lahir pada awal tahun 80-an, sebagai pendekatan utama dalam kajian-kajian tentang kesejahteraan sosial. Bahkan kurikulum yang sejak awal dikembangkan oleh Jurusan Ilmu Sosiatri juga digunakan oleh jurusan baru tersebut untuk memperkuat disiplin keilmuannya.', 'Memang secara kuantitatif perkembangan Ilmu Sosiatri relatif lambat. Hal ini tampak antara lain dari sedikitnya perguruan tinggi yang mengembangkan Jurusan Ilmu Sosiatri. Dan dari jumlah yang sedikit itu bahkan ada yang berubah nama menjadi Jurusan Ilmu Kesejahteraan Sosial. Barangkali hanya sekedar mengubah nama, tetapi substansinya tetap pada apa yang menjadi basis Ilmu Sosiatri.  Lulusan program studi ini diharapkan mampu menguasai teori kebijakan sosial dan pengembangan masyarakat, maupun memahami dan menganalisis berbagai pendekatan dalam kebijakan sosial untuk memecahkan masalah sosial, maupun menganalisis proses penyusunan strategi, implementasi, evaluasi dan monitoring kebijakan sosial dan pengembangan masyarakat.  Prospek Karir Lulusan program studi Ilmu Sosiatri dapat bekerja di lembaga-lembaga pemerintah maupun non pemerintah, selain seperti Departemen Pendidikan, Departemen Tenaga Kerja, Kementrian Percepatan Daerah Tertinggal, Departemen Sosial dan Pemerintah Daerah, lulusan juga dapat bekerja di lembaga internasional seperti UNDP, serta pada berbagai LSM yang bergerak pada bidang sosial ekonomi, lembaga-lembaga penelitian sosial ekonomi, dan dosen.'),
(2, 'Administrasi Negara', '../img/jurusan/sosial/administrasi_\r\nnegara.jpg', '../../../img/jurusan/sosial/administrasi_ negara.jpg', '', '', ''),
(3, 'Ilmu Politik', '../img/jurusan/sosial/ilmu_politik.jpg', '../../../img/jurusan/sosial/ilmu_politik.jpg', '', '', ''),
(4, 'Ilmu Komunikasi', '../img/jurusan/sosial/ilmu_komunikasi.jpg', '../../../img/jurusan/sosial/ilmu_komunikasi.jpg', '', '', ''),
(5, 'Hukum', '../img/jurusan/sosial/hukum.jpg', '../../../img/jurusan/sosial/hukum.jpg', '', '', ''),
(6, 'Kriminologi', '../img/jurusan/sosial/kriminologi.jpg', '../../../img/jurusan/sosial/kriminologi.jpg', '', '', ''),
(7, 'Psikologi', '../img/jurusan/sosial/psikologi.jpg', '../../../img/jurusan/sosial/psikologi.jpg', '', '', ''),
(8, 'Hubungan Internasional', '../img/jurusan/sosial/hubungan_internasional.jpg', '../../../img/jurusan/sosial/hubungan_internasional.jpg', '', '', ''),
(9, 'Sosiologi', '../img/jurusan/sosial/sosiologi.jpg', '../../../img/jurusan/sosial/sosiologi.jpg', '', '', ''),
(10, 'Ilmu Pemerintahan', '../img/jurusan/sosial/ilmu_pemerintahan.jpg', '../../../img/jurusan/sosial/ilmu_pemerintahan.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'SMP'),
(2, 'SD'),
(3, 'SMA'),
(4, 'UMUM');

-- --------------------------------------------------------

--
-- Table structure for table `teknik`
--

CREATE TABLE `teknik` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `gambar2` varchar(200) NOT NULL,
  `para1` text NOT NULL,
  `para2` text NOT NULL,
  `para3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teknik`
--

INSERT INTO `teknik` (`id`, `nama`, `gambar`, `gambar2`, `para1`, `para2`, `para3`) VALUES
(1, 'Teknik Nuklir', '../img/jurusan/teknik/teknik_nuklir.jpg', '../../../img/jurusan/teknik/teknik_nuklir.jpg', 'Apa yang pertama kali kamu pikirkan ketika mendengar kata nuklir? Apakah kamu akan langsung mengkaitkannya dengan bom? Oow, padahal pengertian dan pemaknaan nuklir tidak sesempit itu lho. Kata Kamus Besar Bahasa Indonesia KBBI), nuklir adalah sesuatu yang berhubungan dengan atau menggunakan inti atau energi atom. Keren gak tuh? Jurusan kuliahnya juga ada lho guys. Namanya Teknik Nuklir. Simak ulasannya yaa..\n\n', 'Sesuai dengan arti nuklir yang dijelaskan sebelumnya, Teknik Nuklr ini sebenarnya mempelajari ilmu inti atom dengan menggunakan prinsip-prinsip Fisika Nuklir dan interaksi antara radiasi dan material sebagai dasarnya. Tuh kan, berarti bukan tentang bom, kan?\r\n\r\nApakah nantinya kita hanya mempelajari Fisika? Hmm, bisa dibilang, teknik nuklir adalah turunan dari ilmu Fisika untuk bidang nuklir. Tapi, bukan berarti nanti kamu hanya mempelajari Fisika saja karena Teknik Nuklir juga mencakup tentang fisi nuklir, aplikasi radiasi pada kedokteran nuklir, perpindahan panas, efek limbah radioaktif, radioaktivitas lingkungan, dan lain sebagainya.\r\n\r\nGambaran mata kuliah yang nantinya akan kalian pelajari di jurusan ini adalah fisika atom & inti, statistika teknik, matematika teknik, metode numerik, praktik gambar teknik, termodinamika, mekanika fluida, komputasi nuklir, elektrikal pengendalian, proteksi radiasi, fisika reactor nuklir, kimia radiasi dan lain sebagainya.', 'Wow, mendengar mata kuliahnya saja sepertinya membuat kalian makin bersemangat bukan? Tentunya bagi kalian yang menyukai dunia teknik dan sains yaaaa.. bagi kalian yang minat nya ada di lingkup sosial atau ekonomi, jangan coba-coba untuk memilih jurusan ini deh, bikin repot orang banyak nantinya. Hahahaha.. untuk mengetahui minat dan kemampuan yang ada dalam diri kita, kalian bisa menggunakan program TES ONLINE di bidikmasadepan.com ya guys. Biar kalian ga salah pilih jurusan, soalnya kalo salah pilih jurusan, bisa bikin repot banyak orang, diulang lagi deh kalimat itu, abis memang bener sih, ngerepotin orang tua yang nyari biaya dan ngerepotin dosen yang membimbing kalian. Heheheee..\r\n\r\nSebagai lulusan Teknik Nuklir, kalian bisa kerja  dimana dan bagian apa? Beberapa pekerjaan yang ada di dalam negeri yang sangat membutuhkan lulusan dari jurusan teknik nuklir adalah Pertamina, PLTN, BATAN, Batantek, perusahakan perminyakan swasta, BPPT, pertambangan, Kementerian Negara terutama pada bagian Kesehatan dan Energi, Cevron, PLN, dan dosen tentunya.\r\n\r\nGimana, tertarik memelih jurusan ini?\r\n\r\nSelamat menentukan karir di masa depan ya guys.\r\n\r\n \r\n\r\n#SUKSESHargaMati'),
(2, 'Teknik Geologi', '../img/jurusan/teknik/teknik_geologi.jpg\r\n', '../../../img/jurusan/teknik/teknik_geologi.jpg\r\n', '', '', ''),
(3, 'Teknik Kelautan', '../img/jurusan/teknik/teknik_kelautan.jpg', '../../../img/jurusan/teknik/teknik_kelautan.jpg', '', '', ''),
(4, 'Teknik Geofisika', '../img/jurusan/teknik/geofisika.jpg', '../../../img/jurusan/teknik/geofisika.jpg', '', '', ''),
(5, 'Teknik Industri', '../img/jurusan/teknik/teknik_industri.jpg', '../../../img/jurusan/teknik/teknik_industri.jpg', '', '', ''),
(6, 'Teknik Perminyakan', '../img/jurusan/teknik/teknik_perminyakan.jpg', '../../../img/jurusan/teknik/teknik_perminyakan.jpg', '', '', ''),
(7, 'Teknik Mesin', '../img/jurusan/teknik/teknik_mesin.jpg', '../../../img/jurusan/teknik/teknik_mesin.jpg', '', '', ''),
(8, 'Teknik Geodesi', '../img/jurusan/teknik/teknik_geodesi.jpg', '../../../img/jurusan/teknik/teknik_geodesi.jpg', '', '', ''),
(9, 'Teknik Fisika', '../img/jurusan/teknik/teknik_fisika.jpg', '../../../img/jurusan/teknik/teknik_fisika.jpg', '', '', ''),
(10, 'Teknik Informatika', '../img/jurusan/teknik/teknik_informatika.jpg', '../../../img/jurusan/teknik/teknik_informatika.jpg', '', '', ''),
(11, 'Teknik Planologi', '../img/jurusan/teknik/planologi.jpg', '../../../img/jurusan/teknik/planologi.jpg', '', '', ''),
(12, 'Teknik Perkapalan', '../img/jurusan/teknik/teknik_perkapalan.jpg', '../../../img/jurusan/teknik/teknik_perkapalan.jpg', '', '', ''),
(13, 'Teknik Penerbangan', '../img/jurusan/teknik/teknik_penerbangan.jpg', '../../../img/jurusan/teknik/teknik_penerbangan.jpg', '', '', ''),
(14, 'Teknik Sipil', '../img/jurusan/teknik/teknik_sipil.jpg', '../../../img/jurusan/teknik/teknik_sipil.jpg', '', '', ''),
(15, 'Teknik Pertambangan', '../img/jurusan/teknik/teknik_pertambangan.jpg', '../../../img/jurusan/teknik/teknik_pertambangan.jpg', '', '', ''),
(16, 'Teknik Metalurgi', '../img/jurusan/teknik/teknik_metalurgi.jpg', '../../../img/jurusan/teknik/teknik_metalurgi.jpg', '', '', ''),
(17, 'Teknik Lingkungan', '../img/jurusan/teknik/teknik_lingkungan.jpg', '../../../img/jurusan/teknik/teknik_lingkungan.jpg', '', '', ''),
(18, 'Teknik Kimia', '../img/jurusan/teknik/teknik_kimia.jpg', '../../../img/jurusan/teknik/teknik_kimia.jpg', '', '', ''),
(19, 'Teknik Elektro', '../img/jurusan/teknik/teknik_elektro.jpg', '../../../img/jurusan/teknik/teknik_elektro.jpg', '', '', ''),
(20, 'Teknik Arsitektur', '../img/jurusan/teknik/teknik_arsitektur.jpg', '../../../img/jurusan/teknik/teknik_arsitektur.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 1),
(2, 'user', 'user', 0),
(3, 'rickytampu', 'rickytampu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_profil`
--

CREATE TABLE `user_profil` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `birthday` varchar(250) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `hasil_kuis_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_kuis`
--
ALTER TABLE `hasil_kuis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasilkuis_user` (`user_id`);

--
-- Indexes for table `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peternakan`
--
ALTER TABLE `peternakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senisastrabudaya`
--
ALTER TABLE `senisastrabudaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosial`
--
ALTER TABLE `sosial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teknik`
--
ALTER TABLE `teknik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profil`
--
ALTER TABLE `user_profil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profil_status` (`status_id`),
  ADD KEY `profil_hasil_kuis` (`hasil_kuis_id`),
  ADD KEY `profil_user` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_kuis`
--
ALTER TABLE `hasil_kuis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kuis`
--
ALTER TABLE `kuis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `peternakan`
--
ALTER TABLE `peternakan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `senisastrabudaya`
--
ALTER TABLE `senisastrabudaya`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `sosial`
--
ALTER TABLE `sosial`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `teknik`
--
ALTER TABLE `teknik`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_profil`
--
ALTER TABLE `user_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil_kuis`
--
ALTER TABLE `hasil_kuis`
  ADD CONSTRAINT `hasilkuis_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_profil`
--
ALTER TABLE `user_profil`
  ADD CONSTRAINT `profil_hasil_kuis` FOREIGN KEY (`hasil_kuis_id`) REFERENCES `hasil_kuis` (`id`),
  ADD CONSTRAINT `profil_status` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `profil_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
