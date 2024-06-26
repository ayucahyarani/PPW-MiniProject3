-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2024 pada 14.29
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weberita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `penulis_berita` varchar(255) NOT NULL,
  `tgl_berita` date NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul_berita`, `penulis_berita`, `tgl_berita`, `isi_berita`, `gambar_berita`) VALUES
(10, 1, 'Musdalub dan Pelantikan DPD AMPI Kaltim 2024, Seruan Dukungan terhadap Rudy Mas’ud Maju sebagai Calon Gubernur Menggema', 'Agus Susanto', '2024-04-05', 'Musyawarah daerah luar biasa (Musdalub)  Angkatan Muda Pembaharuan Indonesia (AMPI) Kalimantan Timur 2024 dilaksanakan di Hotel Mercure Samarinda, Jumat (22/3/2024). Acara ini digelar sekaligus pelantikan pengurus DPD AMPI provinsi Kalimantan Timur dan ditutup dengan acara buka puasa bersama.\r\n\r\nRudy Mas’ud sebagai Ketua Partai Golkar Kalimantan Timur turut hadir dalam acara pelantikan pengurus DPD AMPI Kalimantan Timur. Seruan dukungan untuk Rudy Mas’ud menjadi gubernur pun terdengar dalam ruangan pelantikan tersebut.\r\n\r\nSebelumnya, Sekretaris Jenderal AMPI, Ahmad Andi Bahri dalam sambutannya mengatakan bahwa pihaknya akan mendukung secara penuh kader Golkar yang akan maju dalam pemilihan gubernur Kalimantan Timur.\r\n\r\n“Bang Rudy akan maju. Saya menunjuk Arie, anggota dewan, untuk memenangkan Bang Rudy. Jika Bang Rudy kalah, kalian bertanggung jawab. Jika ketua AMPI yang akan ditetapkan nanti memiliki jumlah suara dari Pileg 21.000, maka ketua harus menyumbang 63.000 suara untuk Bang Rudy. Arie Wibowo 5.000 maka kali 3 menjadi 15.000,” ujarnya. Besar kemungkinan Rudy Mas’ud dapat menjadi calon gubernur Kalimantan Timur pada November 2024 nanti. Namun untuk itu, AMPI Kalimantan Timur berfokus kepada pengkaderan yang sebelumnya sempat mengalami pelambatan.\r\n\r\n“Yang mendaftar hanya satu, Pak Apansyah, yang juga baru saja terpilih sebagai anggota DPRD Kaltim. Meskipun AMPI selama ini masih berjalan tanpa ketua, diharapkan dengan adanya ketua yang baru, AMPI akan semakin progresif,” ujar Andi Ahmad Bahri.\r\n\r\nHarapan pada pelantikan ketua baru AMPI Kalimantan Timur merupakan langkah pertama AMPI untuk menentukan arah ke depan. Apalagi dengan target pemilihan Gubernur Kalimantan Timur nantinya.\r\n\r\nSelain itu, ketika Media Kaltim mewawancarai Rudy Mas’ud tentang kans dirinya naik menjadi calon Gubernur Kalimantan Timur pada November nanti, ia tertawa dan mengaku bahwa keputusan masih di tangan partai.\r\n\r\n“Saya menunggu keputusan dari partai. Kita liat saja nanti,” jawabnya.\r\n\r\nPewarta : Khoirul Umam\r\nEditor : Nicha R', 'politik1.jpg'),
(11, 1, 'Golkar Kembali Dapat Jatah Ketua DPRD Kaltim, Rudy Mas’ud Sebut Penunjukannya Wewenang DPP', 'Agus Susansto', '2024-03-14', 'Partai Golkar dipastikan menjadi pemenang di Pileg 2024 Anggota DPRD Kaltim dengan 159.394 jumlah suara sah. Bila dihitung perolehan kursinya, partai berlambang beringin ini akan mendapat 15 kursi dan berhak mendapatkan posisi Ketua DPRD Kaltim.\r\n\r\nDPD I Golkar Kaltim Rudy Mas’ud menyebut penunjukan Ketua DPRD merupakan hak dari DPP Golkar. Ia menjelaskan bahwa mekanisme penunjukan pimpinan Ketua DPRD Kaltim adalah dengan sistem pembobotan. DPD Golkat sebutnya, hanya berwenang memberikan rekomendasi 2-3 nama dari hasil pembobotan.\r\n\r\n“Kursi ketua DPRD mekanisme pembobotan di hitung PDLT (Prestasi, Dedikasi, Loyalitas dan Tanpa Celah). Kita hanya membawa rekomendasi dua sampai tiga nama,” jelasnya via telepon, Rabu kemarin (13/3/2024).\r\n\r\nIa merangkan lebih lanjut, bahwa raihan suara pada pileg merupakan salah satu bentuk prestasi. Sehingga menjadi salah satu faktor untuk menentukan siapa yang menjadi rekomendasi Ketua DPRD ke DPP Golkar.\r\n\r\nPartai Golkar pada periode 2019-2024 mendaptkan 12 kursi, sementara pada periode 2024-2029 diprediksi Golkar akan mendapat 15 kursi. Bila berkaca ada jumlah raihan suara ada periode 2019-2024, Makmur HAPK didapuk menjadi Ketua DPRD Kaltim dengan perolehan suara 38 ribu lebih. Saat itu Makmur merupakan politisi senior Golkar yang menjabat Ketua Harian DPD I Golkar Kaltim. Namun dipertengahan jabatannya ia harus digantikan Hasanuddin Mas’ud karena konflik internal partai. Sementara pada periode 2024-2029, Abdullah merupakan caleg Golkar dengan suara terbanyak sebesar 48.180 suara sah di daerah pemilihan (dapil) 2, Balikpapan. Ia merupakan Ketua DPRD Balikpapan, yang maju di Pileg 2024 DPRD Kaltim. Dibawahnya, ada Hasanuddin Mas’ud dengan raihan 42.885 suara yang tak lain merupakan petahana dan Ketua DPRD Kaltim periode ini.(Eky)\r\n\r\nPenulis: Andi Desky', 'politik2.jpg'),
(12, 2, 'Sinergi dan Inovasi TPID Dalam Mendukung Pengendalian Inflasi pangan melalui GNPIP wilayah Kalimantan 2024', 'Boy Saputra', '2024-03-27', 'KBRN, Samarinda : Menghadapi tantangan pengendalian inflasi pada tahun 2024 antara lain produksi pangan domestik yang terbatas dan harga pangan global yang meningkat, sinergi dan akselerasi penguatan pasokan dan efisiensi rantai pasok perlu terus dilanjutkan. Upaya ini dilanjutkan melalui Gerakan Nasional Penguatan Inflasi Pangan (GNPIP) tahun 2024 dengan 7 Program Unggulan yang dilaksanakan pada kegiatan GNPIP Wilayah Kalimantan 2024 hari ini (27/3/2024) di Samarinda, dengan tema \"Sinergi dan Inovasi untuk Mendorong Penguatan Pasokan dan Efisiensi Rantai Pasok Untuk Mendukung Stabilisasi Harga dan Ketahanan Pangan Kalimantan\".\r\n\r\nTujuh program unggulan tersebut meliputi penguatan ketahanan komoditas pangan strategis, penguatan kapasitas budidaya pangan mandiri, optimalisasi Kerjasama Antar Daerah (KAD), dukungan fasilitasi distribusi pangan, penguatan digitalisasi dan data pangan, dukungan optimalisasi operasi pasar/pasar murah/SPHP/GPM serta penguatan koordinasi dan komunikasi.\r\n\r\nDeputi Gubernur Bank Indonesia, Doni P. Joewono menekankan pentingnya extra effort dalam mengawal inflasi pangan di tahun 2024, termasuk di periode Hari Besar Keagamaan nasional (HBKN). Beberapa tantangan perlu diantisipasi seperti kondisi curah hujan yang tinggi, fluktuasi produksi antar waktu dan antar daerah, hingga pemenuhan komoditas pangan impor. Secara khusus di Kalimantan, sejalan dengan potensi peningkatan permintaan sebagai dampak masifnya pembangunan proyek strategis nasional, termasuk Ibu Kota Nusantara (IKN), upaya penguatan pasokan dan efisiensi rantai pasok menjadi krusial untuk memastikan stabilitas harga dan ketahanan pangan di wilayah Kalimantan.\r\n\r\n“Oleh karenanya diperlukan sinergi erat Tim Pengendalian Inflasi Pusat dan Daerah (TPIP-TPID) melalui GNPIP di berbagai daerah. Program GNPIP tahun 2024 diperkuat dengan mengusung 7 (tujuh) program dan 12 sub program, dengan fokus komoditas yaitu beras, aneka cabai, dan bawang merah, serta komoditas lainnya yang sesuai dengan karakteristik dan kondisi di masing-masing wilayah”ucapnya.\r\n\r\nSejalan dengan itu, Deputi Bidang Koordinasi Ekonomi Makro dan Keuangan, Kementerian Koordinator Bidang Perekonomian RI, Ferry Irawan menyampaikan tantangan ketersediaan pasokan merupakan tantangan antar wilayah dan antar waktu. Ditengah terkendalinya inflasi, perkembangan inflasi pangan terus dipantau, terutama komoditas beras. Sejumlah kebijakan yang dilakukan untuk meredam kenaikan harga beras antara lain menjaga stok cadangan dan mempercepat penyaluran SPHP di pasar tradisional, pengalihan CBP ke komersil untuk mengendalikan harga beras premium, penyaluran bantuan pangan beras kepada 22 jt KPM dan penetapan relaksasi harga eceran tertinggi. Di sisi lain, kebijakan ini perlu didukung dengan peningkatan produksi pertanian melalui pemanfaatan teknologi dan digitalisasi, pemerataan akses dan informasi, pelatihan dan pendampingan SDM yang terlatih dan pembiayaan.', 'bisnis1.jpeg'),
(13, 5, 'Jurnalis Samarinda Ikuti Pelatihan Bantuan Hidup Dasar', 'Redaksi', '2024-02-23', 'Dinas Kesehatan (Dinkes) Kota Samarinda menggelar pelatihan bantuan hidup dasar (BHD) kepada jurnalis Samarinda, yang berlangsung di kantor Dinkes Kota Samarinda, pada Jumat (23/2/2024). Pelatihan ini bertujuan untuk meningkatkan keterampilan dan pengetahuan para anggota dalam memberikan pertolongan pertama pada korban kecelakaan atau bencana.\r\n\r\nKepala Dinas Kesehatan Kota Samarinda, Ismid Kusasih, mengatakan, pelatihan BHD ini sangat penting mengingat anggota jurnalis sering menjadi garda terdepan dalam menangani situasi gawat darurat di masyarakat.\r\n\r\n“Dengan pelatihan ini, kami harapkan anggota Satpol PP dapat memberikan bantuan hidup dasar yang tepat dan benar kepada korban, sehingga dapat mencegah kematian atau kerusakan organ yang lebih parah,” ujarnya.\r\n\r\nBantuan hidup dasar adalah serangkaian tindakan yang dilakukan untuk mempertahankan fungsi pernapasan dan sirkulasi darah pada korban yang mengalami henti napas atau henti jantung. Tindakan ini meliputi pemeriksaan respon, membuka jalan napas, memberikan napas buatan, melakukan resusitasi jantung paru (RJP), dan menggunakan defibrilator otomatis eksternal (AED) jika tersedia1.\r\n\r\nMenurutnya, pelatihan BHD ini juga sejalan dengan program pemerintah pusat untuk meningkatkan kesiapsiagaan masyarakat dalam menghadapi bencana.\r\n\r\n“Kami berharap, dengan adanya pelatihan ini, dapat menjadi agen perubahan yang dapat mengajarkan dan mensosialisasikan BHD kepada masyarakat luas, sehingga dapat membentuk budaya siaga bencana di Samarinda,” katanya.\r\n\r\nMateri pelatihan meliputi pengenalan awal dan penanganan pertama korban, airway management, bantuan pernafasan, bantuan sirkulasi, stabilisasi dan transportasi, penanganan syok, perdarahan, dan henti jantung.\r\n\r\nPeserta pelatihan tampak antusias mengikuti materi dan praktek yang diberikan oleh narasumber.\r\n\r\n“Saya merasa mendapat ilmu yang bermanfaat, yang bisa saya terapkan di lapangan maupun di rumah. Saya juga ingin mengajak teman-teman dan keluarga saya untuk belajar BHD, karena kita tidak pernah tahu kapan kita akan menghadapi situasi gawat darurat,” pungkasnya. #\r\n\r\nReporter: Sandi | Editor: wong', 'kesehatan1.jpeg'),
(14, 5, 'BPJS Kesehatan Samarinda Apresiasi Rumah Sakit Haji Darjad Lolos Syarat Program JKN', 'Claudius Vico', '2023-11-10', 'Pelaksana Harian (Plh) Badan Penyelenggara Jaminan Sosial (BPJS) Kesehatan Cabang Samarinda, Citra Jaya mengapresiasi upaya Rumah Sakit Haji Darjad (RSHD) yang berada di bawah naungan PT Medical Etam telah memenuhi syarat layanan BPJS Kesehatan sehingga kini fasilitas kesehatan itu siap menerima pasien peserta BPJS Kesehatan untuk dirawat.\r\n\r\nBPJS Kesehatan Samarinda juga mengapresiasi jajaran manajemen RSHD Samarinda yang telah berhasil memenuhi syarat hingga lolos dalam program Jaminan Kesehatan Nasional (JKN) tersebut. Pihaknya tentu menyambut baik upaya yang telah dilakukan oleh RSHD.  \"Tentu kami menyambut baik dari pihak RSHD bisa memenuhi syarat program JKN, sehingga sudah bisa menerima pasien peserta BPJS,\" ucap Citra Jaya, Rabu (15/11/2023).\r\n\r\nIa berharap peningkaatn pelayanan dari RSHD dapat bermanfaat bagi seluruh masyarakat yang membutuhkan pelayanan di bidang kesehatan. Ia juga menjelaskan bahwa sementara ini beberapa administrasi tinggal menunggu persetujuan dari Kementerian Kesehatan.  \"Menunggu persetujuan, kemungkinan dalam kurun waktu kurang lebih dua minggu,\" ujarnya.\r\n\r\nSelain itu tenaga kesehatan di RSHD saat ini tengah menjalani pelatihan di BPJS Kesehatan. Ia mengungkapkan pelatihan itu dilakukan berguna untuk tenaga kesehatan di RSHD mampu mengoperasikan sistem BPJS Kesehatan di rumah sakit tersebut. \"Karena kan melalui sistem nantinya, jadi pelatihan itu dilakukan supaya tenaga kesehatan mampu mengoperasikannya,\" tutupnya.\r\n\r\nSebelumnya diwartakan Direktur Utama PT Medical Etam, Iliansyah selaku pemilik RSHD Samarinda mengatakan, saat ini fasilitas kesehatan tersebut telah memiliki pelayanan BPJS Kesehatan, sehingga untuk pasien peserta BPJS yang hendak dirujuk ke RSHD tak perlu cemas tak mendapatkan layanan sosial itu.\r\n\r\nIliansyah menegaskan hingga saat ini pihaknya terus berkomitmen untuk dapat berkontribusi bagi seluruh masyarakat Kaltim yang membutuhkan pelayanan dari bidang kesehatan, maka dari itu pihaknya selalu mengupayakan pelayanan terbaik bagi para pasien yang hendak dirawat di RSHD.\r\n\r\nSementara itu Direktur RSHD dr Andreas Anang menjelaskan, RSHD sudah berupaya sejak 2022 lalu untuk dapat memenuhi syarat yang ditentukan oleh BPJS agar rumah sakit itu dapat menerima layanan pasien peserta BPJS, namun upaya itu kini telah membuahkan hasil sehingga RSHD dinyatakan memenuhi syarat.\r\n\r\nEditor: Maruly Zainuddin', 'kesehatan2.jpeg'),
(15, 3, 'Ketum KONI Tinjau Venue PON Aceh-Sumut, Stadion Utama Ditarget Rampung Juli 2024', 'Ainur Rofiah', '2024-04-03', 'Ketua Umum (Ketum) KONI Pusat, Marciano Norman dan jajarannya telah meninjau beberapa venue Pekan Olahraga Nasional (PON) XXI tahun 2024 di Sumatera Utara (Sumut) pada Selasa (2/4/2024) lalu setelah sebelumnya pada 26-27 Maret 2024, rombongan juga meninjau venue di wilayah Aceh. \r\n\r\nDidampingi Ketua Harian Panitia Besar (PB) PON XXI wilayah Sumut, Afifi Lubis dan Kepala Dinas Pemuda dan Olahraga (Dispora) Sumut, Baharuddin Siagian beserta jajarannya, rombongan mengawali tinjauan ke Sumut Sport Center di Desa Sena, Kabupaten Deli Serdang dan diakhiri di Gedung Bowling Disporasu. “Venue yang kami lihat tadi progresnya 90 persen,” terang Marciano.\r\n\r\nPertama ditinjau adalah Stadion Madya Atletik Sumut Sport Center. Secara keseluruhan venue sudah dalam kondisi baik dan kualitas pembangunannya bagus. Termasuk Martial Arts Arena di mana venue megah tersebut akan dapat digunakan untuk berbagai keperluan beberapa cabang olahraga. \r\n\r\nTerakhir di Sumut Sport Center, rombongan melihat Stadion Utama Sumatera Utara yang akan dijadwalkan menjadi lokasi Wapres RI, Ma’ruf Amin menutup PON XXI Aceh-Sumut pada 20 September 2024. \r\n\r\nStadion kebanggaan Sumut itu merupakan dukungan dari pemerintah pusat melalui Kementerian Pekerjaan Umum dan Perumahan Rakyat (PUPR). Kapasitasnya mampu menampung 25.750 penonton dengan Royal Lounge untuk VVIP dan sudah menggunakan teknologi ramah lingkungan, yakni solar panel. \r\n\r\nTeknologi hijau itu mampu memberikan dampak efisiensi listrik 7 persen per tahun.  “Stadion Utama yang dibangun oleh PUPR memang tahapannya hari ini baru 26 persen, tetapi ada kemajuan 7 persen sehingga capaiannya 33 persen,” terangnya.\r\n\r\n“Perkiraan Stadion Utama itu akan selesai nanti pada bulan Agustus, tetapi diharapkan akhir Juli sudah selesai sehingga bisa dipakai untuk persiapan-persiapan lainnya,” sambungnya merujuk pada test event. \r\n\r\nPada Juli 2024, tepatnya pertengahan bulan merupakan target yang juga ditetapkan oleh Menteri Koordinator Pembangunan Manusia dan Kebudayaan (Menko PMK) RI Prof Muhadjir Effendy, kala meninjau Aceh pada 27 Maret 2024.\r\n\r\nUsai melihat stadion utama, rombongan menuju Gedung Bowling Disporasu. Percobaan memainkan bowling pun dilakukan rombongan dan terbukti venue sudah siap.  “Saya optimis Sumut bisa menepati waktu untuk penyelesaian venue-venuenya,” tambahnya.  “Sekarang KONI Pusat dengan  PB PON XXI wilayah Sumut, kita melaksanakan rapat koordinasi tentang teknis penyelenggraan PON XXI/2024,” jelasnya.\r\n\r\nAtas seluruh kerja keras yang dilakukan, Ketum KONI Pusat berterima kasih, mengapresiasi dan memberikan penghormatan yang setinggi-tingginya kepada Ketua PB PON XXI wilayah Sumut yang mana juga Pj Gubernur Sumut Hassanudin dan jajarannya serta masyarakat Sumut.\r\n\r\nDiketahui, Sumut akan mempertandingkan 34 cabang olahraga yang melibatkan 5.817 atlet, 2.910 ofisial, 4.763 panitia pelaksana. Pertandingan digelar antara lain di Kota Binjai, Kota Medan, Kabupaten Langkat, Kabupaten Deli Serdang, Kabupaten Serdang Bedagai, Kota Pematang Siantar, Kabupaten Toba, Kabupaten Simalungun, dan Kabupaten Karo.\r\n\r\nEditor: Maruly Z', 'olahraga1.jpeg'),
(16, 4, 'Kue Bingka Kentang Abah Riri, Warisan Kuliner Banjar Yang Bertahan Di Samarinda', 'Redaksi', '2024-03-14', 'Menjelang buka puasa di bulan Ramadan, warga Samarinda berburu takjil untuk melengkapi momen berbuka. Di antara beragam pilihan, kue bingka kentang, makanan khas suku Banjar dari Kalimantan Selatan, menjadi salah satu incaran utama.\r\n\r\nBingka Kentang Abah Riri, sebuah nama yang sudah tidak asing lagi di Samarinda, merupakan bisnis keluarga yang telah berdiri selama 40 tahun. Firman, sang pedagang, mengisahkan perjalanan bisnis keluarganya yang telah melewati generasi.\r\n\r\n“Mulanya ini bisnis keluarga, kurang lebih sudah 40 tahun yang lalu. Bahkan sebelum saya lahir,” ujar Firman pada Kamis (14/03/2024).\r\n\r\nResep bingka kentang yang dijaga keasliannya menjadi rahasia kelezatan yang turun-temurun.\r\n\r\n“Bahannya tetap sama, karena resepnya dari turun temurun,” ungkap Firman.\r\n\r\nKeunikan lain dari Bingka Kentang Abah Riri terletak pada proses produksinya yang masih setia pada metode tradisional.\r\n\r\n“Prosesnya masih menggunakan tungku, dan prosesnya masih dibakar menggunakan kayu,” jelas Firman.\r\n\r\nSelama bulan Ramadan, Firman bisa menghasilkan hingga 150 biji bingka setiap hari, dengan harga Rp 30 ribu per biji.\r\n\r\n“Biasanya buka saat Ramadhan, kalau di hari biasa tergantung dengan pesanan saja,” tambahnya.\r\n\r\nRespon masyarakat Samarinda terhadap kue bingka kentang ini sangat positif.\r\n\r\n“Untuk saat ini, kami jualnya rasa original (kentang) saja,” kata Firman.\r\n\r\nFirman juga mengajak masyarakat Kota Samarinda untuk mencicipi kue Bingka Kentang Abah Riri selama bulan Ramadan.\r\n\r\n“Lokasinya di Jalan Kesuma Bangsa, tepatnya di Samping RS Korpri. Kami buka dari siang jam 13.00 sampai sore hari menjelang buka,” tutup Firman dengan harapan. #\r\n\r\nReporter: Sandi | Editor: Wong', 'makanan1.jpeg'),
(17, 2, 'Stok Bulog Aman Masyarakat Tenang', 'Ridzki Multianatha', '2024-03-21', 'Kepala Perum Bulog Kantor Cabang Samarinda Maradona Singal memastikan stok persediaan beras mencukupi hingga bulan Mei.Bahwa stok beras yang dimiliki oleh Bulog aman dan saat ini sebagian besar beras yang tersedia adalah impor dari Thailand dan Vietnam.\r\n\r\nDalam upaya untuk menjaga stabilitas harga beras, Bulog telah bekerja sama dengan berbagai instansi, termasuk Disperindagkop Kaltim, Dinas Pangan Tanaman Pangan dan Hortikultura Kaltim, Korem, Kodim maupun organisasi masyarakat.\r\n\r\n\"Kami juga aktif mengadakan pasar murah, khususnya selama bulan Ramadan. Masyarakat tidak perlu khawatir akan ketersediaan beras, karena kami memastikan bahwa beras selalu ada di kios sigap dan pasar segiri,\" jelasnya saat menjadi pembicara pada operasi pasar murah, tepat sasaran, Rabu (20/3/2024).\r\n\r\nUntuk itu masyarakat Kaltim pada umumnya dan Samarinda khususnya tidak perlu melakukan panic buying, karena persediaan beras tercukupi.\r\n\r\nMaradona menyarankan masyarakat yang kesulitan mendapatkan beras untuk langsung mengunjungi kios SIGAP di pasar segiri, sebagai upaya untuk menstabilkan harga.\r\n\r\nDengan pasokan beras yang cukup, Bulog dapat memenuhi operasi pasar, gerakan pangan murah dan kerjasama dengan organisasi masyarakat.\r\n\r\nPihaknya juga menyalurkan bantuan pangan di enam Kabupoaten dan Kota untuk masyarakat yang terdaftar secara berkala dengan jumlah 740 ton setiap bulannya.\r\n\r\nHal ini merupakan bagian dari komitmen untuk memastikan ketersediaan beras bagi seluruh lapisan masyarakat.\r\n\r\nMaradona juga meminta kepada masyarakat Kaltim, khususnya Samarinda, untuk tidak melakukan panic buying karena persediaan beras tercukupi.\r\n\r\n“Belilah secukupnya saja, karena tidak perlu dikhawatirkan bahwa stok beras tidak ada,”ucapnya', 'bisnis2.png'),
(18, 6, 'Mengunjungi Museum Kota Samarinda di Akhir Pekan, Pengunjung Bisa Wisata Edukasi Sambil Bernostalgia', 'KoranKaltim', '2023-10-20', 'Jika Anda belum punya rencana dan tujuan untuk menghabiskan akhir pekan kali ini, mungkin jalan-jalan ke Museum Kota Samarinda bisa menjadi alternatif pilihan untuk melakukan wisata edukasi sambil bernostalgia. \r\n\r\nMuseum Samarinda yang terletak di Jalan Bhayangkara atau persisnya di Kawasan Taman Samarendah ini menjadi salah satu museum terbaru yang pernah ada di Kaltim karena baru diresmikan pada Maret 2020 lalu.\r\n\r\nDi museum ini, pengunjung akan disuguhi dengan koleksi benda-benda masa lampau yang sekarang sudah jarang ditemukan seperti Mandau Dayak Kenyah yang digunakan masyarakat suku Dayak sebagai senjata perang. \r\n\r\nKemudian ada Sapeq Karaang yang merupakan alat musik tradisional suku Dayak Bahau, sarung Samarinda dengan motif belang Hatta di mana nama ini digunakan untuk menghormati mantan Wakil Presiden pertama RI Muhammad Hatta, hingga replika prasasti yupa Muara Kaman dengan sebelas baris tulisan pahatan di bagian depan, serta tak ketinggalan foto-foto pembangunan di Samarinda sebelum masa sekarang yang kebanyakan masih berwarna hitam putih.\r\n\r\nSelain dapat melihat secara langsung barang-barang berharga peninggalan masa lampau, pengunjung juga difasilitasi komputer untuk memudahkan pengunjung mengakses informasi seperti foto-foto, dokumen dan jejak digital lainnya. Pengunjung pun tak perlu bingung dengan barang-barang yang dipajang karena pada setiap barang dilengkapi penjelasan sejarahnya.\r\n\r\nJika ingin berkunjung dan mendapatkan informasi secara rinci, pemandu wisata siap mendampingi pengunjung dengan memberikan informasi secara lebih lengkap. Museum Kota Saarinda sendiri buka mulai dari Selasa-Minggu pukul 08.30-12.00 Wita, dilanjutkan pukul 13.00-15.00 WITA. “Sementara, hari Jumat hanya dari pukul 08.30-11.00 WITA,” kata Julpan pada Kamis (19/10/2023).  Bagi wisatawan baik dari dalam maupun luar Samarinda yang ingin berkunjung dengan rombongan juga tak perlu khawatir, karena pengelola tidak menjual tiket masuk alias gratis. \r\n\r\nEditor: Maruly Zainuddin', 'edukasi1.jpeg'),
(19, 6, 'Mafindo Edukasi Masyarakat Samarinda Antisipasi Hoaks Melalui Program Cek Fakta', 'M. Rafik', '2023-09-10', 'Masyarakat Anti-Fitnah Indonesia (Mafindo) Kota Samarinda melakukan kampanye guna memberikan penyadaran kepada masyarakat terhadap bahaya hoaks atau kabar bohong di Stadion Kadrie Oening, pada Minggu (10/9/2023).\r\n\r\nSalah satu Relawan Mafindo Samarinda, Siti Suhada mengatakan, upaya ini merupakan sarana untuk mengajak masyarakat agar tidak termakan hoaks, sehingga warga yang kerap menggunakan gadget dapat berhati-hati terhadap informasi yang didapat. “Kita ingin masyarakat itu bisa berhati-hati terhadap apa informasi yang beredar, sebisa mungkin itu harus dikroscek terlebih dahulu,” ujar Siti Suhada.\r\n\r\nMenurutnya, kampanye itu tidak mesti dengan cara yang serius, melainkan dengan cara yang santai dan bermain games juga bisa meningkatkan kesadaran masyarakat dan atensinya terhadap bahaya hoaks. Bahkan, untuk menarik perhatian masyarakat, Mafindo menyediakan salah satu games cek fakta.\r\n\r\n“Kita sediakan juga games untuk mereka bermain dan kita berikan hadiah, sebenarnya untuk melakukan kampanye ini tidak harus dengan cara yang serius, tetapi yang santai seperti ini pun bisa menarik perhatian mereka semua,” ucap Siti.\r\n\r\nSementara, Project Officer Cek Fakta Mafindo, Muhammad Ansari kepada korankaltim.com mengatakan, hari ini  pihaknya mengedukasi apa itu hoaks dan bagaimana caranya cek fakta. Sebab, ada beberapa Mafindo wilayah yang gemar melakukan agenda kampanye seperti ini.\r\n\r\n“Salah satunya Samarinda yang gemar melakukan aksi kampanye seperti ini, sehingga ini juga penting bagi kami agar masyarakat bisa cerdas mengelola informasi, apalagi jelang pemilu ini,” ungkap Aan sapaan karibnya.\r\n\r\nEdukasi itu tidak melulu dengan hal serius, kata Aan melainkan juga bisa dilakukan saat dijalanan dengan berbagi pin dan stiker sebagai pengingat kepada mereka terkait isu yang sedang digaungkan. “Hari ini, kita bungkus itu dengan santai dan tapi tidak mengurangi maksud dan tujuan kami,” pungkasnya.\r\n\r\nSelain melakukan kampanye, Mafindo juga bekerja sama dengan tim medis dari Fakultas Kedokteran Universitas Mulawarman melakukan pengecekan kesehatan.\r\n\r\nEditor: Maruly Zainuddin', 'edukasi2.jpeg'),
(20, 6, 'DPRD Samarinda Soroti Munculnya Sumbangan di Dunia Pendidikan, Ketua Komisi IV: Tidak Ada Sekolah Gratis', 'M. Rafik', '2023-11-08', 'Ketua Komisi IV DPRD Samarinda, Sri Puji Astuti membeberkan, dalam dunia pendidikan terdapat 3 pilar yang mampu meningkatkan kualitas dari setiap satuan pendidikan. Diantaranya, masyarakat, dunia usaha dan pemerintah.\r\n\r\n\"Peningkatan SDM juga membutuhkan sarana dan prasarana, dan itu tidak bisa diselesaikan oleh pemerintah saja,\" ujarnya, Rabu (8/11/2023).\r\n\r\nDalam menyelesaikan persoalan pendidikan, diperlukan kerja sama yang baik antara pemerintah, masyarakat dan dunia usaha. Sebab, jika kerja sama tersebut tidak berjalan dengan baik yang akan mendapatkan beban dari dampak tersebut yakni pemerintah.\r\n\r\n\"Ini harus dibantu oleh dunia usaha dan masyarakat (orang tua murid), kalau tidak ditopang justru ini tidak akan berjalan baik dan peningkatan SDM juga akan sulit,\" bebernya.\r\n\r\nIa menambahkan, munculnya sumbangan atau iuran dikarenakan dana bantuan operasional sekolah daerah (BOSDA) tidak dapat memenuhi kebutuhan pendidikan yang cukup banyak. Dirinya juga menepis isu tentang sekolah gratis yang menjadi bahan politisasi dari para pimpinan terdahulu.\r\n\r\n\"Tidak ada yang namanya sekolah gratis, tetap semua itu dibayar, yang mendapatkan beasiswa pun juga sekolahnya dibayarin oleh pemerintah,\" ujarnya.\r\n\r\nSelain itu, ia menjelaskan dana BOSDA atau BOS Nasional (BOSNAS) itu hanya mampu membiayai per murid sebesar Rp900 ribu sampai Rp1 juta. Sedangkan kebutuhan dari setiap peserta didik mencapai Rp5 juta. Hal inilah menurutnya yang mendasari munculnya iuran dan sumbangan dari sekolah.\r\n\r\n\"Iuran itu tidak ada sanksi kalau tidak bayar juga tidak apa-apa, karena itu kan bentuknya sukarela bagi yang ikhlas,\" jelasnya.\r\n\r\nEditor: Maruly Zainuddin', 'edukasi3.jpeg'),
(21, 1, 'Hetifah Sjaifudian Klaim Golkar Raih Dua Kursi di DPR RI Dapil Kaltim', 'Agus Susanto', '2024-03-10', 'Calon anggota DPR RI dari Partai Golkar, Hetifah Sjaifudian, mengklaim dirinya dan Rudi Masud berhasil meraih dua kursi di daerah pemilihan (dapil) Kalimantan Timur. Klaim ini disampaikan dalam konferensi pers yang digelar oleh tim pemenangannya di Decafe Resto, Jalan Niaga Timur Samarinda, pada Minggu (10/3/2024).\r\n\r\nHetifah mengatakan, berdasarkan hasil perhitungan sementara, ia mendapatkan 146.023 suara, sementara Rudi Masud mendapatkan 139.456 suara. Jumlah suara ini, kata Hetifah, sudah sesuai dengan hasil pleno KPU Kaltim yang dilakukan di Hotel Mercure Samarinda pada hari yang sama.\r\n\r\n“Kami berterima kasih kepada masyarakat Kalimantan Timur yang telah memberikan kepercayaan kepada kami. Kami akan berjuang untuk mewakili aspirasi dan kepentingan daerah di Senayan,” kata Hetifah.\r\n\r\nDalam konferensi pers tersebut, turut hadir Atikah Dinartika (Campaign Manager Hetifah), Luay Ali (Ketua Tim IT & Data Center Hetifah), Andri Rifandi (Koordinator Pemenangan Samarinda), Nur Alisah (Hetifah Lovers Kaltim), Tim Hello Kaltim, dan Anggota DPR RI Hetifah Sjaifudian. Hetifah menjelaskan, perolehan kursi Partai Golkar di DPR RI dapil Kaltim menggunakan metode Sainte League, yang diatur dalam Undang-Undang Nomor 7 Tahun 2017 tentang Pemilihan Umum. Metode ini membagi suara sah partai politik dengan bilangan ganjil, mulai dari 1, 3, 5, 7, dan seterusnya.\r\n\r\n“Menurut Undang-Undang Nomor 7 Tahun 2017 tentang Pemilihan Umum, metode Sainte League digunakan untuk mengkonversi perolehan suara menjadi kursi parlemen. Pasal 415 ayat (2) menjelaskan bahwa suara sah partai politik dibagi dengan pembagi 1, diikuti bilangan ganjil 3;5;7; dan seterusnya,” ujarnya.\r\n\r\nBerdasarkan PKPU Nomor 6 Tahun 2023, DPR RI Daerah Pemilihan Kalimantan Timur memiliki alokasi 8 kursi. “Dengan metode Sainte League, Golkar berhasil meraih 2 kursi, sedangkan Rudi Masud dan Hetifah Sjaifudian,” ujarnya.\r\n\r\nHetifah juga mengucapkan selamat kepada anggota DPR RI terpilih dari dapil Kaltim dari partai politik lain. Ia berharap, mereka dapat bekerja sama untuk memajukan daerah ini. Hetifah menegaskan, ia akan terus memperjuangkan program prioritas di bidang pendidikan, pariwisata, pemuda, olahraga, kebudayaan, ekonomi kreatif, perpustakaan, dan literasi. “Kita tetap berkomitmen mengawal Ibukota Nusantara, menjadi kebanggaan bagi Kalimantan Timur,” pungkasnya. (Han)\r\n\r\nPenulis: Hanafi\r\nEditor: Andi Desky', 'politik3.jpg'),
(22, 3, 'DBON Kaltim Resmikan Akademi Olahraga, Bina 120 Atlet dengan Tujuh Cabor', 'Ainur Rofiah', '2024-04-01', 'Desain Besar Olahraga Nasional (DBON) Kalimantan Timur (Kaltim) meresmikan Akademi Olahraga di Kompleks GOR Kadrie Oening di Sempaja, Samarinda, pada Senin (1/4/2024). \r\n\r\nSesuai target semula, ada 120 atlet yang berhasil lolos menjadi siswa Akademi Olahraga dengan tujuh cabang olahraga (cabor) yang ada di dalam akademi tersebut yakni panahan, menembak, angkat besi, taekwondo, karate, pencak silat, dan balap sepeda.\r\n\r\nKepala Sekretariat DBON Kaltim, Agus Hari Kesuma mengatakan, terbentuknya Akademi Olahraga merupakan sejarah dalam pengembangan olahraga di Kaltim. “Peluncuran Akademi Cabang Olahraga ini menandai komitmen kita untuk mengembangkan bakat-bakat olahraga muda di wilayah kita serta memberikan mereka akses terbaik untuk berkembang dan meraih prestasi dalam olahraga yang mereka cintai,” ujar pria yang akrab disapa AHK itu.\r\n\r\nMeski terbilang tidak mudah, namun semangat kerja keras dan kolaborasi yang kuat antara pemerintah, federasi olahraga, pelatih dan atlet, akhirnya Akademi Olahraga bisa terwujud. “Kita dapat menciptakan lingkungan yang mendukung bagi pertumbuhan dan kemajuan olahraga di Kaltim,” tegasnya.\r\n\r\nDia berharap dengan hadirnya Akademi Olahraga ini bisa membuka pintu bagi generasi muda Kaltim, untuk mengejar impian mereka dalam dunia olahraga. “Dengan cara memberikan fasilitas terbaik, bimbingan yang berkualitas dan dukungan penuh kepada mereka untuk meraih prestasi sejati ditingkat lokal, nasional bahkan internasional,” imbuhnya.\r\n\r\nSementara itu, Ketua Pelaksana DBON Kaltim, Zairin Zain menyampaikan ada beberapa tahap yang sudah berhasil dilewati, diantaranya penjaringan atlet hingga menyiapkan venue latihan. Zairin mengaku baru ada tujuh cabang olahraga (cabor), sementara tujuh lainnya masih menunggu pembangunan venue latihan yang akan dirampungkan pada 2025 mendatang. “Kita menunggu venue latihan, yang akan dibangun di kompleks stadion ini. Mudah-mudahan di dalam pelaksanaannya setelah Lebaran ini, bisa segera terlihat hasilnya,” terangnya.\r\n\r\nSetelah beberapa saat berlatih, Zairin menegaskan pihaknya bakal mengirim para atlet muda itu ke tingkat nasional untuk mengukur hasil latihan yang telah dilakukan saat ini. Hasilnya itulah yang nantinya akan kembali dievaluasi.\r\n\r\nEditor: Maruly Z', 'olahraga2.jpeg'),
(23, 3, 'Atlet Sepatu Roda Latihan Tipis Selama Ramadan', 'Ainur Rofiah', '2024-03-25', 'Atlet-atlet sepatu roda Kalimantan Timur (Kaltim) mempersempit jadwal latihan  selama bulan Ramadan berlangsung.\r\n\r\nMenginap di Hotel Mesra dan menjalani latihan di Komplek GOR Madya Sempaja, Kepala Bidang  Pembinaan dan Prestasi Pengurus Provinsi Persatuan Sepatu Roda Seluruh Indonesia (Kabid Binpres Pengprov Porserosi) Kaltim, Romiansyah mengaku ada beberapa pola latihan.\r\n\r\nJumlah atlet yang akan bertanding di Pekan Olahraga Nasional (PON) XXI Aceh dan Sumtera Utara (Sumut) masih tetap.\r\n\r\n“Atletnya 4 putra  4 putri pelatih dua ditambah 1 ofisial, jadi ada 3,” kata Romi, Senin (25/3/2024).\r\n\r\nUntuk nomor tanding yang diikuti masih menunggu rapat kerja nasional (rakernas). Namun menurutnya, kemungkinan akan sama seperti pada PON XX di Papua.\r\n\r\nDiketahui pada PON Papua lalu, ada 25 nomor tanding. Tetapi, tetap pihaknya akan menunggu hasil keputusan dari rakernas.\r\n\r\n“Target 1 emas, 7 perak, nah peraknya ini nanti yang akan kita baca untuk bisa ke emas kah, atau malah ke perunggu,” urainya.\r\n\r\nEditor: Aspian Nur', 'olahraga3.jpeg'),
(24, 1, 'Tudingan Kecurangan Pemilu yang Disampaikan ke Bawaslu Kaltim, Ini Tanggapan Ketua Gerindra Andi Harun', 'Agus Susanto', '2024-02-25', 'Ketua DPD Gerindra Kaltim, Andi Harun, memberikan respons terhadap demonstrasi Komunitas Masyarakat Pendukung Anies Muhaimin (Kompak) Samarinda di kantor Bawaslu Kaltim Jumat (23/2) lalu.\r\n\r\nAndi Harun menilai bahwa tudingan kecurangan dalam pemilu di Kaltim yang dilontarkan oleh Kompak perlu dihadapi dengan ketenangan dan melalui koridor hukum.\r\n\r\nMenurutnya, sebagai negara hukum, setiap perselisihan, termasuk dugaan kecurangan pemilu 2024, sebaiknya diselesaikan melalui fasilitas hukum untuk menjaga kondusifitas kehidupan masyarakat di Samarinda.\r\n\r\n“Hukum kita telah mengatur sistem penyelesaian setiap dugaan perkara pemilu. Kita harus menjunjung tinggi koridor hukum dan mekanisme penyelesaian yang telah diatur. Dugaan kecurangan harus disajikan dengan fakta dan bukti, lalu diproses sesuai dengan ketentuan hukum,” ujar Andi.\r\n\r\nLebih lanjut, Andi Harun juga menyampaikan prihatin terhadap penyelenggara pemilu seperti KPPS, PTPS, Linmas, dan lain-lain. Dia menekankan perlunya menghargai upaya mereka sebagai pahlawan demokrasi yang bekerja tanpa istirahat.\r\n\r\n“Semua harus kita jaga agar tidak ada kegiatan yang mengganggu sosial ekonomi masyarakat di kota ini. Jika semua taat pada hukum, insya Allah semuanya akan berjalan baik,” tambahnya. Selaku perwakilan partai Gerindra, Andi menyampaikan terima kasih kepada seluruh warga Kaltim yang telah melaksanakan hak pilihnya dalam pemilihan 14 Februari lalu dan memilih calon presiden dan wakil presiden dari partai Gerindra, yakni Prabowo-Gibran.\r\nIa menekankan pentingnya menghormati pilihan rakyat sebagai wujud apresiasi terhadap demokrasi.\r\n\r\n“Terhadap itu semua, jangan hanya memberi apresiasi kepada penyelenggara pemilu, tapi juga berikan apresiasi kepada pilihan rakyat ini. Semua pihak harus berhati-hati agar masyarakat tidak merasa bahwa pilihan mereka dihargai rendah atau dianggap sebagai rekayasa,” ujar Ketua Gerindra.\r\n\r\nLebih lanjut, Ketua DPD Gerindra Kaltim ini menyatakan bahwa pilihan masyarakat Samarinda tersebut menjadi tanda bahwa program yang ditawarkan oleh Prabowo Gibran mendapat dukungan luas dari masyarakat.\r\n\r\n“Program yang sesuai dengan keinginan masyarakat Kaltim telah mendapatkan dukungan yang signifikan,” tambahnya.\r\n\r\nMengakhiri pernyataannya, Andi mengajak semua pihak untuk tidak mengadakan kegiatan yang dapat memicu kemarahan masyarakat. “Jangan sampai pilihan rakyat dihargai dengan cara yang bisa mengganggu keharmonisan masyarakat. Mari kita jaga suasana damai dan hormati keputusan yang telah diambil oleh warga,” pungkasnya. Penulis: Hanafi\r\nEditor: Agus S', 'politik4.jpg'),
(25, 1, 'Bola Panas Hak Angket dan Interpelasi Kecurangan Pemilu, Masing-Masing Kubu Saling Menunggu', 'Agus Susanto', '2024-02-23', 'Capres Ganjar Pranowo mendorong PDIP dan PPP menggulirkan hak angket di DPR atas dugaan kecurangan Pemilu 2024. Jika DPR tidak siap dengan hak angket, Ganjar mendorong penggunaan hak interpelasi atau rapat kerja.\r\n\r\nUsulan ini, diklaimnya bukan saja karena kepentingan pribadinya saja tapi juga bagian dari menyuarakan keresahan para relawan dan masyarakat yang kerap mengirimkan sejumlah foto, dokumen serta video temuan kecurangan di lapangan.\r\n\r\n“Jika DPR tak siap dengan hak angket, saya mendorong penggunaan hak interpelasi DPR untuk mengkritisi kecurangan pada Pilpres 2024,” kata Ganjar dalam keterangan tertulis di Jakarta, Senin (19/2/2024).\r\n\r\nKetua Majelis Kehormatan PPP Zarkasih Nur meminta Plt Ketum PPP Muhammad Mardiono beserta jajaran pengurus dan Fraksi PPP untuk hati-hati menyikapi inisiasi hak angket sebagai langkah mengusut dugaan kecurangan pilpres. Zarkasih mengatakan langkah tersebut harus disikapi dengan teliti.\r\n\r\n“Hak Angket harus dipikirkan matang-matang, harus disikapi secara cerdas dan teliti, kami rasa tidak perlu sejauh itu, hak angket tidak harus sejauh itu, sebab kalau ada kecurangan pemilu kan sudah ada jalurnya,” kata KH Zarkasih Nur dalam keterangannya, Kamis (22/2/2024). Usulan Ganjar ini mendapatkan dukungan dari Capres nomor urut 3 Anies Baswedan. Anies menyatakan partai koalisi perubahan siap mendukung hak angket yang diusulkan Ganjar. Koalisi Perubahan terdiri dari 3 partai politik yakni NasDem, PKB dan PKS.\r\n\r\n“Saya sampaikan, ketika insiatif hak angket itu dilakukan maka tiga partai ini siap ikut,” tegasnya belum lama ini.\r\n\r\nTiga partai dalam koalisi ini sendiri yakni NasDem, PKB dan PKS telah melakukan pertemuan dan menggelar konferensi pers Jumat, (23/2/2024). Usai pertemuan itu Surya Paloh Ketua Umum NasDem mengatakan pihaknya menunggu inisiasi menggulirkan hak angket dan interpelasi ini dari PDI Perjuangan.\r\n\r\n“Itu hak berdemokrasi, dalam hal ini pendukung Anies dan Cak Imin mendukung hak tersebut. Prosesnya gimana ? Biarkan mengalir aja. Kenapa bukan kita yang menggulirkan, barangkali kita masih sayang sama PDIP, jadi kita masih menunggu.\r\n\r\nTerkait pertemuan dengan Megawati diharapkan Surya Paloh tidak dalam waktu yang lama.\r\n\r\n“Saya katakan mas Ganjar menggagas itu hak konstitisional, itu sebuah ide. Kalau itu jalan yang mau ditempuh, sayang sekali kalau kita abaikan. Kalau saya tetap landasannya konstitusional,” tandasnya. Penulis : Andi Desky', 'politik5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `judul_ulasan` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Politik'),
(2, 'Bisnis'),
(3, 'Olahraga'),
(4, 'Makanan'),
(5, 'Kesehatan'),
(6, 'Edukasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_ulasan` varchar(50) NOT NULL,
  `isi_ulasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_berita`, `id_user`, `judul_ulasan`, `isi_ulasan`) VALUES
(2, 10, 10, 'Ulasan Baru', 'test'),
(3, 10, 10, 'Ulasan Baru', 'hai'),
(4, 11, 10, 'Ulasan Baru', 'farrelsirah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `thumbnail` varchar(25) NOT NULL DEFAULT 'logo.png',
  `role` enum('admin','user','reviewer') NOT NULL DEFAULT 'user',
  `jeniskelamin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `thumbnail`, `role`, `jeniskelamin`) VALUES
(1, 'admin', 'admin@gmail.com', '123123', 'logo.png', 'admin', NULL),
(2, 'ana', 'ana@gmail.com', '456456', 'logo.png', 'user', NULL),
(3, 'reviewer', 'reviewer@gmail.com', '789789', 'logo.png', 'reviewer', NULL),
(9, '8ifarrel', '8ifarrel@gmail.com', 'mautauaja05', 'logo.png', 'user', NULL),
(10, 'farrelsirah', 'farrelsirah@gmail.com', 'mautauaja05', 'logo.png', 'reviewer', NULL),
(11, 'abc', 'abc@gmail.com', '12345678', 'logo.png', 'admin', NULL),
(14, 'abcd', 'abcd@gmail.com', 'mautauaja18', 'Screenshot 2023-08-07 052', 'admin', 'Perempuan'),
(15, 'abc', 'abc@gmail.com', 'mautauaja18', 'Disetujui.jpg', 'admin', 'Laki-Laki'),
(16, 'aaa', 'ccc@gmail.com', 'mautauaja18', 'logo.png', 'admin', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `berita_ibfk_1` (`id_kategori`);

--
-- Indeks untuk tabel `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD CONSTRAINT `contact_messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
