-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 02:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manggu_media2`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'onprocess',
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `status`, `gambar`, `tanggal`, `judul`, `slug`, `body`, `kategori_id`, `penulis`, `created_at`, `updated_at`) VALUES
(1, 5, 'published', '2023-01-31-9wv7CasQYbHqMRw8rmqO.jpg', '2023-01-31', 'Bosen Persentasi Gitu-Gitu Aja? Ini Tips Agar Persentasi Menjadi Menarik', 'bosen-persentasi-gitu-gitu-aja-ini-tips-agar-persentasi-menjadi-menarik', '<p>Selain aktif didalam kelas, mengikuti diskusi dengan baik, untuk mendapatkan tambahan nilai dari dosen adalah dengan memaparkan ide/gagasan yang berkaitan dengan materi yang sedang dipelajari dengan melakukan persentasi. Dimana, persentasi sendiri tidak akan lepas dari&nbsp;<strong>Mahasiswa</strong>. Persentasi dengan pembawaan yang baik dan menarik tentu dapat menarik perhatian audiens dan menjadi&nbsp;<i>point plus</i>&nbsp;dari dosen. Namun, bagaimana cara membuat persentasi menjadi menarik?</p><p><i><strong>Siapkan Bahan Materi Tayang Semenarik Mungkin</strong></i></p><p>Di era revolusi industri 4.0 ini sudah banyak teknologi yang menunjang untuk membuat bahan tayang materi yang menarik, bisa menggunakan&nbsp;<i>power&nbsp;point</i>, canva,&nbsp;<i>slide&nbsp;player</i>, dll. Isi dari bahan materi ini adalah point-point penting yang akan dijelaskan, atau hal-hal yang perlu divisualisasikan menggunakan gambar, video, atau audio. Dalam setiap slide menggunakan kata yang tidak banyak minimal hanya&nbsp; 4-5 baris&nbsp;dengan&nbsp;ukuran font 12 dan&nbsp;menggunakan warna yang mudah dibaca disesuaikan dengan warna&nbsp;<i>template,</i>&nbsp;misalnya warna&nbsp;<i>power point</i>&nbsp;yang digunakan adalah biru maka hindari tulisan menggunakan warna biru. Perlu ditekankan, bahwa bahan materi ini adalah sebagai penunjang pembicara menjelaskan jadi tak banyak hal yang perlu dimasukan dalam setiap bahan materi yang ditayangkan.</p><p><i><strong>Gunakan Template Bahan Materi Tayang yang Menarik dan Sesuai Tema</strong></i></p><p>Gunakan&nbsp;<i>template</i>&nbsp;yang sesuai dengan&nbsp;<strong>materi</strong>&nbsp;yang akan disampaikan, misalnya&nbsp;<strong>materi&nbsp;</strong>yang akan disampaikan adalah mengenai hukum pidana, cari template yang memiliki unsur timbangan atau palu pengadilan. Bisa didownload secara gratis di&nbsp;<i>slidesgo, freepik, atau canva.</i></p><p><i><strong>Catat hal-hal yang akan disampaikan</strong></i></p><p>Sebelum memulai presentasi mencatat&nbsp;<strong>point-point&nbsp;</strong>yang akan disampaikan agar tidak lupa, bisa ditulis dikertas, di post it, atau bahan materi yang dipakaikan stabilo. Ini sangat membantu untuk mengingat materi selanjutnya yang akan dijelaskan.</p><p><i><strong>Membuka Presentasi dengan isu, fakta, dan data</strong></i></p><p>Pada umumnya mahasiswa melakukan pembukaan&nbsp;<strong>presentasi</strong>&nbsp;dengan perkenalan dan langsung menyampaikan judul materi yang akan disampaikan. Untuk membuat pembukaan presentasi yang menarik, setelah perkenalan jelaskan terlebih dahulu isu, fakta, dan data materi yang akan disampaikan. Contohnya&nbsp;, judul yang akan disampaikan adalah Jinayat (Hukum Islam), maka jelaskan terlebih dahulu isu tentang hukum Jinayat seperti di Aceh dilakukan hukum cambuk untuk orang yang melakukan perzinahan. Usahakan menjelaskan isu, fakta, atau data yang terbaru dan menarik.</p><p><i><strong>Menyebutkan Nama Audiens</strong></i></p><p>Menurut Dr. Abdullah Al-Khathir orang akan senang jika dipanggil dengan nama-nama yang mereka paling sukai. Dalam menjelaskan contoh, libatkan nama<strong>&nbsp;audiens</strong>&nbsp;agar menarik perhatian. Dan apabila&nbsp;<strong>audiens</strong>&nbsp;mengajukan penjelasan sebutlah nama terbaiknya agar mereasa senang. Seperti&nbsp;<i>terimakasih&nbsp;saudara Siti Aminah atas pertanyaannya, pertanyaan yang bagus rekan Ahmad,&nbsp;</i>dll.</p><p>Itulah beberapa&nbsp;hal yang perlu diperhatikan baik dalam persiapan ataupun proses presentasi. Selain mendapat nilai yang baik, presentasi yang dilakukan mahasiswa ini bisa menjadi latihan untuk persiapan menghadapi&nbsp;dunia kerja, melatih&nbsp;<i>public speaking</i>, dan menjadi kemampuan yang baik untuk kehidupan dasar sehari-hari.</p>', 4, 'Manggu Media', '2023-01-31 07:45:21', '2023-01-31 07:51:53'),
(2, 5, 'published', '2023-01-31-w26FiujW5oYfAAarGODN.jpg', '2023-01-31', '5 Kunci Manajemen Waktu Lebih Efektif yang Harus Kamu Coba Sebagai Mahasiswa!', '5-kunci-manajemen-waktu-lebih-efektif-yang-harus-kamu-coba-sebagai-mahasiswa', '<p>Manajemen waktu termasuk kedalam <i>skill</i> yang dapat dikembangkan oleh semua orang untuk menghadapi padatnya kegiatan, seperti mahasiswa. Sehingga mengatur waktu dengan baik harus dilakukan oleh setiap orang untuk mendukung pengembangan diri dengan cepat. Berikut ada beberapa tips yang dapat kamu lakukan agar manajemen waktumu menjadi efektif!</p><p><br>1. Mengatur Stres</p><p>Tips yang pertama harus kamu kuasai adalah mengelola stres. Setiap kegiatan yang dilakukan pasti memiliki tekanan, tetapi coba ubahlah tekanan tersebut menjadi motivasi untuk menyelesaikan suatu tugas.</p><p>Jangan sampai tekanan yang ada akan membuat kamu menjadi stres sehingga sulit untuk berpikir jernih dan mengabaikan tugas. Hal ini karena stres umumnya akan memengaruhi kegiatan yang akan kamu lakukan sehingga berpengaruh pada manajemen waktu yang telah kamu susun.</p><p><br><br>2. Mengatur fokus</p><p>Mulailah belajar untuk selalu fokus dalam mengerjakan segala sesuatu. Jika kamu memiliki banyak tugas maka kamu harus menentukan prioritas dan fokus untuk menyelesaikan satu tugas tersebut.</p><p>Dengan pikiran yang terpusat kepada satu hal&nbsp; untuk menyelesaikan satu tugas, maka kamu dapat menyelesaikan tugas tersebut dengan lebih cepat. Efektifnya,&nbsp; sebelum beralih ke tugas selanjutnya, kamu harus menyelesaikan tugas sebelumnya.</p><p><br><br>3. Membuat skala prioritas</p><p>Membuat skala prioritas berarti menentukan apa saja yang harus kamu lakukan dan apa saja yang seharusnya tidak dilakukan, mulai dari yang sangat penting sampai tidak penting. Skala prioritas yang telah disusun dapat memudahkan kamu untuk menyusun rencana kedepannya.</p><p><br><br>4. Membuat rencana</p><p>Perencanaan yang dibuat dari hasil analisis kepentingan tugas akan membuat kamu lebih mudah dalam mengerjakan tugas. Dengan adanya perencanaan, kamu sudah tau tugas aoa yang harus dikerjalan lebih dulu dan tugas apa yang harus dikerjakan selanjutnya. Perlu diingat, jika rencana tidak sesuai dengan yang terjadi maka itu adalah hal yang wajar. Sehingga berkaitan dengan point sebelumnya kamu harus bisa mengatur stres dan mengatur fokus untuk menyiapkan rencana selanjutnya.</p><p><br><br>5. Mengapresiasi diri</p><p>Terakhir, untuk mengatur waktu supaya lebih efektif adalah mengapresiasi hal baik yang sudah kamu lakukan. Sebagai contoh, apabila kamu telah selesai belajar untuk persiapan kuliah besok, maka beri dirimu hadiah dengan menggunakan sisa waktunya untuk beristirahat. Hal ini dapat menjaga kesehatan mental dan membuat kamu lebih termotivasi dalam belajar.</p>', 4, 'Manggu Media', '2023-01-31 07:46:39', '2023-01-31 07:51:58'),
(3, 5, 'published', '2023-01-31-q4xZ6hxfh9wxqBIqASdF.jpg', '2023-01-31', '4 Aktivitas Bermanfat Mengisi Libur Semester', '4-aktivitas-bermanfat-mengisi-libur-semester', '<p>Liburan semester merupakan waktunya untuk beristirahat dari rasa penat selama berkegiatan kampus. Beberapa kita mungkin menghabiskannya dengan pergi berlibur, pulang kampung atau menonton film berjam-jam di kamar.</p><p>&nbsp;</p><p>Tidak ada salahnya mencari hiburan di saat waktu liburan semester tiba. Hanya saja akan lebih baik jika kamu membarenginya dengan melakukan aktivitas-aktivitas yang bermanfaat. Nah, beberapa pilihan aktivitas bermanfaat di bawah ini bisa menjadi alternatif pilihan untuk kamu mengisi waktu liburan semester.</p><p><strong>Menjalankan Hobi</strong></p><p>Mengisi waktu libur dengan menjalankan hobi tentu merupakan hal yangmenyenangkan dan tentunya bermanfaat. Pasalnya dari hobi kita juga akan sedikit&nbsp;banyaknya dapat mengasah kemampuan tergantung jenis hobi yang kita pilih.&nbsp;Misalnya kamu yang hobi bermain bola, membaca buku, fotografi dan lainnya.</p><p><strong>Ikut Kursus Online</strong></p><p>Mengikuti kursus online juga termasuk aktivitas yang bermanfaat yang bisa kamu lakukan untuk mengisi waktu liburan semester. Umumnya kursus online hanya memerlukan waktu 2-5 jam dalam seminggu. Selebihnya kamu bisa melakukan aktivitas lain misalnya menerapkan ilmu yang kamu dapat dari kursus online. Dengan mengikuti kursus online liburan semester kalian bisa jadi lebih produktif dan pastinya bermanfaat untuk masa depan.</p><p><strong>Menghadiri Webinar</strong></p><p>Ketika libur semester kamu juga masih bisa ikut webinar untuk menamba-nambah ilmu dan wawasan. Selain itu kamu juga bisa mendapatkan sertifikat dan teman baru. Tenang meskipun musim liburan semester, acara webinar tetap akan ada kita temui baik online maupun offline.</p><p><strong>Kerja Part Time</strong></p><p>Bekerja juga merupakan pilihan yang baik untuk kamu mengisi liburan semester. Selain mendapatkan gaji kamu juga akan memperoleh manfaat lain dari bekerja. Mulai dari pengalaman, softskill, menambah relasi dan banyak lagi.</p>', 4, 'Manggu Media', '2023-01-31 07:49:13', '2023-01-31 07:52:03'),
(4, 5, 'published', '2023-01-31-RM9CS4cDtp2bKteVJwgn.jpg', '2023-01-31', 'Jangan Sia-Siakan Masa Kuliah, Inilah 4 Hal Penting Yang Harus Kamu Lakukan Selama Kuliah', 'jangan-sia-siakan-masa-kuliah-inilah-4-hal-penting-yang-harus-kamu-lakukan-selama-kuliah', '<p>Masa kuliah adalah masa-masa yang penuh dengan perjuangan. Akan tetapi tidak sedikit pula orang yang malah membuang-buang kesempatan kuliahnya untuk bersenang-senang. Padahal meraih pendidikan dan menyandang gelar mahasiswa belum tentu semua orang berkesempatan untuk mendapatkannya.<br><br>Lebih baik sebelum menyesal kemudian kamu mestinya memanfaatkan waktu kuliahmu dengan melakukan hal-hal penting dan bermanfaat. Berikut adalah rekomendasi hal-hal penting yang bisa kamu lakukan.<br><br><strong>1. Mengembangkan Diri</strong><br><br>Masa kuliah merupakan fase yang pas untuk kamu mengembangkan diri. Selain menumbuhkan IPK, akan lebih baik kamu juga mengembangkan ilmu dan potensi di dalam dirimu. Misalnya dengan mengikuti seminar, mengikuti kompetisi, banyak membaca buku dan banyak lagi.</p><p><br>&nbsp;</p><p>BACA JUGA:&nbsp;Serba-Serbi Kuliah Jurusan Ilmu Komputer<br><br><strong>2. Bangun Relasi Yang Positif</strong><br><br>Ketika kamu kuliah sebaiknya kamu jangan asal-asalan pilih teman pergaulan. Sebab hal ini akan berpengaruh pada pembentukan karaktermu kelak. Kualitas seseorang bisa diukur dari lingkungan pergaulannya. Oleh karena itu pilihlah teman pergaulan yang positif yang bisa menunjang masa depanmu lebih baik ke depannya.</p><p><strong>3. Cari Pengalaman</strong><br><br>Pengalaman adalah guru terbaik yang ada di dalam kehidupan. Begitu kurang lebih kata-kata bijak yang sudah sering kita dengar ini. Kamu yang masih berkuliah wajib banget mencari pengalaman sebanyak-banyaknya.<br><br>Bisa dari kegiatan dalam dan luar kampus, ikut magang, jadi relawan dan banyak lagi lainnya. Hanya saja kamu juga harus pandai dalam memilih organisasi sebab bisa jadi karena tidak cocok kamu malah mendapatkan lebih banyak dampak negatifnya dari positifnya.</p><p><strong>4. Tentukan Tujuanmu Lebih Spesifik</strong><br><br>Setiap orang tentu menginginkan sesuatu dari kuliah yang mereka jalani termasuk kamu. Ada yang ingin membahagiakan orang tua, mendapatkan pekerjaan impian dan sebagainya. Untuk lebih mudah menggapai apa yang menjadi tujuanmu sangat baik bagi kamu untuk menentukan perincian setiap langkah-langkahmu. Misalnya kapan kamu harus menyelesaikan <strong>program sarjana</strong>, <i>skill </i>apa saja yang harus kamu kuasai dan di mana kamu mendapatkannya.<br>&nbsp;</p>', 4, 'Manggu Media', '2023-01-31 07:51:12', '2023-01-31 07:52:07'),
(5, 5, 'published', '2023-01-31-9UiJlq7AdXDUq3kivcba.png', '2023-01-31', 'Zahara Farhan, Penulis Buku Patofisiologi Keperawatan yang Prihatin dengan Tragedi Persepakbolaan Nasional', 'zahara-farhan-penulis-buku-patofisiologi-keperawatan-yang-prihatin-dengan-tragedi-persepakbolaan-nasional', '<p>Zahara Farhan, sebagai seorang akademisi di kampus kesehatan yang sehari-hari mengajar mahasiswa di kelas ternyata tidak hanya memerhatikan soalan pendidikan saja, ia pun turut memerhatikan kondisi sosial masyarakat. Terutama soal persepakbolaan nasional.</p><p>&nbsp;</p><p>Masih ingat dengan tragedi kanjuruhan Malang, kan? Atau masih ingat dengan pertikaian antar <i>supporter</i> klub bola beberapa bulan lalu? Tragedi akibat fanatisme para penikmat bola tersebut turut menjadi perhatian seorang dosen kelahiran Kota Ciamis ini.</p><p>Bagaimana tidak, kita dapat melihat salah satu status media sosial facebook dengan nama <a href=\"https://www.facebook.com/zahara.farhan\">Zahara Farhan</a> itu jelas keprihatinannya terhadap berbagai macam tragedi persepakbolaan di Indonesia.</p><p>Berikut adalah status facebook yang Ia tulis.</p><blockquote><p><i>Klo memang sepakbola di negara ini hanya menjadi sebuah peperangan antar bangsa sendiri bahkan sampai terjadi pertumpahan darah, buat apa ada kompetisi sepakbola.? Bukankah kompetisi itu diselenggarakan sebagai media pemersatu bangsa.?</i></p><p><i>Saudarakuuuu, ingatlah para pendahulu kita, bangsa ini kuat dan hebat karena persatuan, janganlah tercerai berai. Janganlah fanatisme diri membuat kita buta dgn makna olahraga, jadikanlah setiap kompetisi olahraga sebagai pemersatu bangsa, bukan sebaliknya.</i></p><p><i>Innalilahi wa Inna ilaihi Raji\'un, semoga para korban diampuni segala dosanya, diterima segala amal ibadahnya dan ditempatkan disisi Alloh SWT, Tuhan yg Maha Esa. Amin ya rabbal alamin.</i></p></blockquote><p>Jika kita cermati, Penulis buku <a href=\"https://www.tokopedia.com/manggustore/patofisiologi-keperawatan?extParam=whid%3D7094957\"><strong>Patofisiologi Keperawatan</strong></a>&nbsp;yang diterbitkan oleh <a href=\"http://www.penerbitmanggu.co.id/\"><strong>Penerbit Manggu</strong></a> tersebut sedang resah dengan kompetisi sepakbola Indonesia yang penyelenggaraannya justeru membikin pertikaian bahkan pertumpahan darah.&nbsp;</p><p>Zahara Farhan yang suka makan&nbsp;<i>galendo</i>&nbsp;ini juga menghimbau kita semua sebagai bangsa Indonesia dengan mengajak seluruh masyarakat untuk menjadikan kompetisi sepakbola sebagai momentum untuk mempersatukan bangsa, bukan malah sebaliknya.</p><p><br>&nbsp;</p>', 5, 'Manggu Media', '2023-01-31 08:04:46', '2023-01-31 08:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE `components` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_komponen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `components`
--

INSERT INTO `components` (`id`, `nama_komponen`, `created_at`, `updated_at`) VALUES
(1, 'Article Headline', NULL, NULL),
(2, 'Article Terbaru', NULL, NULL),
(3, 'Article Side', NULL, NULL),
(4, 'Article Rekomendasi', NULL, NULL),
(5, 'Article Slider', NULL, NULL),
(6, 'Article Slider 2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `component_articles`
--

CREATE TABLE `component_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `component_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `component_articles`
--

INSERT INTO `component_articles` (`id`, `component_id`, `article_id`, `created_at`, `updated_at`) VALUES
(2, 1, 3, '2023-01-31 07:52:46', '2023-01-31 07:52:46'),
(5, 3, 4, '2023-01-31 07:53:14', '2023-01-31 07:53:14'),
(6, 3, 2, '2023-01-31 07:53:46', '2023-01-31 07:53:46'),
(7, 4, 1, '2023-01-31 07:53:57', '2023-01-31 07:53:57'),
(8, 4, 2, '2023-01-31 07:54:07', '2023-01-31 07:54:07'),
(9, 5, 4, '2023-01-31 07:54:27', '2023-01-31 07:54:27'),
(10, 5, 3, '2023-01-31 07:54:39', '2023-01-31 07:54:39'),
(11, 5, 2, '2023-01-31 07:54:45', '2023-01-31 07:54:45'),
(12, 5, 1, '2023-01-31 07:54:53', '2023-01-31 07:54:53'),
(13, 6, 4, '2023-01-31 07:55:06', '2023-01-31 07:55:06'),
(14, 6, 3, '2023-01-31 07:55:14', '2023-01-31 07:55:14'),
(15, 6, 2, '2023-01-31 07:55:54', '2023-01-31 07:55:54'),
(16, 6, 2, '2023-01-31 07:57:46', '2023-01-31 07:57:46'),
(18, 1, 2, '2023-01-31 07:58:21', '2023-01-31 07:58:21'),
(22, 1, 5, '2023-02-02 09:50:47', '2023-02-02 09:50:47'),
(23, 1, 4, '2023-02-02 09:51:29', '2023-02-02 09:51:29'),
(24, 2, 1, '2023-02-02 09:51:42', '2023-02-02 09:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iklans`
--

CREATE TABLE `iklans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iklan_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iklan_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iklan_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iklan_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iklan_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iklan_6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iklan_7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iklans`
--

INSERT INTO `iklans` (`id`, `iklan_1`, `iklan_2`, `iklan_3`, `iklan_4`, `iklan_5`, `iklan_6`, `iklan_7`, `created_at`, `updated_at`) VALUES
(5, '2023-01-31-U7ZEcjMxMPafcnQAeIBT.png', '2023-01-31-vXksCT7yevw7N9ClVIsh.png', '2023-01-31-7BRG2TAOezCrOIyJZaDt.png', '2023-01-31-yE11pCaA1RLHmRNvYbcQ.png', '2023-01-31-sZosQ93aLdRj258r87ri.png', '2023-01-31-UuWzsYyVzQX4T5Nji4Sg.png', '2023-01-31-rtx9EhxIgZBg9Idd4mtH.jpg', '2023-01-31 13:46:46', '2023-01-31 13:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `slug_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Gersang', 'gersang', NULL, NULL),
(4, 'Ngampus', 'ngampus', '2023-01-14 05:58:56', '2023-01-14 05:58:56'),
(5, 'Pakar', 'pakar', '2023-01-14 06:48:59', '2023-01-14 06:48:59'),
(7, 'Berita', 'berita', '2023-01-14 06:50:53', '2023-01-14 06:50:53'),
(9, 'Sastra', 'sastra', '2023-01-14 06:51:23', '2023-01-14 06:51:23'),
(12, 'Manggu', 'manggu', '2023-02-02 09:43:38', '2023-02-02 09:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `komentars`
--

CREATE TABLE `komentars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komentars`
--

INSERT INTO `komentars` (`id`, `article_id`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 10, 'keren menarik', '2023-01-29 01:21:55', '2023-01-29 01:21:55'),
(2, 10, 'aselole jos', '2023-01-29 01:28:09', '2023-01-29 01:28:09'),
(3, 10, 'asik asik josss', '2023-01-29 01:29:49', '2023-01-29 01:29:49'),
(4, 10, 'kmokmokm', '2023-01-30 04:35:26', '2023-01-30 04:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_08_110005_create_articles_table', 1),
(6, '2023_01_08_142923_create_kategoris_table', 1),
(7, '2023_01_08_143306_create_komentars_table', 1),
(10, '2023_01_28_175255_create_profiles_table', 2),
(11, '2023_01_29_025000_create_notes_table', 3),
(12, '2023_01_29_045216_create_status_articles_table', 4),
(13, '2023_01_29_094619_create_iklans_table', 5),
(14, '2023_01_29_165436_create_subscribes_table', 6),
(16, '2023_01_30_164802_create_headlines_table', 7),
(17, '2023_01_30_174732_create_components_table', 8),
(18, '2023_01_30_174759_create_component_articles_table', 8),
(19, '2023_01_31_210217_create_videos_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Buat artikel bertema teknologi maka artikelmu akan diprioritaskan oleh editor dan cepat untuk publish', '2023-01-28 20:09:13', '2023-01-28 20:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `photo`, `gender`, `description`, `job`, `url_facebook`, `url_instagram`, `url_twitter`, `created_at`, `updated_at`) VALUES
(1, 2, '2023-01-29IMG-20200114-WA0011.jpg', 'perempuan', NULL, 'mahasiswa', 'link facebook', 'link instagram', 'link twitter', '2023-01-28 10:54:12', '2023-01-29 07:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `status_articles`
--

CREATE TABLE `status_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_articles`
--

INSERT INTO `status_articles` (`id`, `article_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 4, 'Konten terlalu vulgar', '2023-01-28 23:49:31', '2023-01-28 23:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'hanggityabelajar@gmail.com', '2023-01-29 10:04:06', '2023-01-29 10:04:06'),
(3, 'user_test@gmail.com', '2023-01-29 10:54:34', '2023-01-29 10:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'penulis',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Hanggitya Raharjo', 'hanggitya86@gmail.com', NULL, '$2y$10$oPW7ZsHZCdRjf6/ftZxche7SiFo6z1UDHLjzSPFnpopeniL3iodkS', NULL, '2023-01-23 11:03:19', '2023-01-23 11:03:19'),
(2, 'penulis', 'Sri Widdyandri', 'widdyandrisri@gmail.com', NULL, '$2y$10$9oCRansvpkt9Oe8IxPpnM.ODCbnGVwWjWTM8sDSAGDT3WOdn5JyDq', NULL, '2023-01-24 04:59:14', '2023-01-29 07:53:38'),
(3, 'admin', 'Admin', 'admin@gmail.com', NULL, '$2y$10$kSBap5hf888dXcNA8zr6ce.MgnEjvRGwwqh0Yd8dtU.CPZo.NAHLi', NULL, '2023-01-24 05:00:05', '2023-01-24 05:00:05'),
(4, 'penulis', 'Penerbit Manggu', 'penerbitmanggu@gmail.com', NULL, '$2y$10$RGgu6Svv0hOm5/djxAnL2OE.8VQOvgUDqWSSxQk1GQNZAMOfcKIee', NULL, '2023-01-29 11:52:51', '2023-01-29 11:52:51'),
(5, 'penulis', 'Manggu Media', 'manggumedia@gmail.com', NULL, '$2y$10$DTxUU6RFdlIM7WSzdcqQA.QWLf63hlF2WMaKMBVfec5Inh86fGbLG', NULL, '2023-01-31 07:41:10', '2023-01-31 07:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_articles`
--
ALTER TABLE `component_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `iklans`
--
ALTER TABLE `iklans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentars`
--
ALTER TABLE `komentars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_articles`
--
ALTER TABLE `status_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `component_articles`
--
ALTER TABLE `component_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iklans`
--
ALTER TABLE `iklans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `komentars`
--
ALTER TABLE `komentars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_articles`
--
ALTER TABLE `status_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
