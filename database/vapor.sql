-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 07. Desember 2018 jam 06:50
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vapor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `meta` text NOT NULL,
  `publish` varchar(50) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `cuplikan` text NOT NULL,
  `keyword` text NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `meta`, `publish`, `gambar`, `tanggal`, `kategori`, `cuplikan`, `keyword`) VALUES
(4, 'Tips Cara Perawatan Laptop atau Netbook', '<p>1Dalam perkembangan teknologi yang semakin pesat kebutuhan memiliki komputer jinjing/laptop bukanlah hal yang langka lagi,hampir setiap orang menginginkan kemudahan dalam pekerjaan mereka dalam menggunakan teknologi komputer. Akan tetapi seiring jalannya perkembangan teknologi dan sedikit pula orang yang minim pengetahuan tentang teknologi tersebut tak sedikit yang mengalami masalah dalam hal perawatan barang tersebut.Seperti laptop banyak yang sudah menggunakan di masyarakat kita.<br /> Membawa sebuah laptop juga perlu perawatan agar barang tersebut awet dan tahan lama,jika laptop tersebut setelah masa garansi habis.berikut adalah tips-tips agar laptop yang kita bawa bisa awet dan mengurangi resiko kerusakan.<br /> <br /> 1. Usahakan saat menggunakan laptop anda bawahnya dikasih alas yang bersifat keras.seperti diatas meja.jangan memakai laptop di atas kasur atau bantal dan sejenisnya.hal ini bertujuan agar panas laptop yang di keluarkan dari lubang sirkulasi bisa keluar dan tidak tersumbat debu.</p>\r\n<p><br /> 2. Untuk ketahanan batre laptop anda dan meminimalisir batre drop,jangan membiasakan melepas kemudian memasang batre laptop anda.jika batre habis silahkan di charger.dan perlu di ingat jika batre sudah full 100% segeralah melepas charger tersebut.karna jika tidak dilepas dan dibiarkan akan menyebabkan batre cepat drop.</p>\r\n<p><br /> 3.Jika anda melakukan pelepasan batre ketika sedang menggunakan laptop anda dengan tujuan batre anda awet jangan coba anda langsung menancapkan charger laptop anda langsung ke sumber arus listrik,gunakan stabilizer jika tidak menggunakan batre.hal ini bertujuan mencegah kerusakan motherboard dan keyboard laptop.<br /> <br /> 4.Seperti halnya manusia laptop juga perlu istirahat selama digunakan,jangan sering menggunakan laptop anda secara berlebihan/over time dan jika harus digunakan selama 24 jam untuk menyelesaikan pekerjaan,usahakan beri waktu 1-2 jam untuk mengistrahatkan laptop anda.kecuali anda memakai PC dekstop ketahanannya lebih lama dari laptop.<br /> <br /> 5. Seringlah membersihkan fan pada laptop anda dan bagian besi pendingin dibagian sirkulasi udara laptop anda dengan menyemprotkan angin kompresor ke arahnya,dengan begitu debu yang tersangkut akan keluar.</p>\r\n<p><br /> 6. Usahakan laptop anda tidak terkena benturan baik itu ringan maupun keras,karena jika sering terbentur akan menyebabkan kerusakan pada harddisk anda istilahnya terkena badsector pada harddisk anda.<br /> <br /> 7.Fungsikan laptop anda sebagaimana fungsinya,laptop hanyalah alat bantu untuk pekerjaan manusia secara ringan,jangan biasakan laptop anda difungsikan dengan pekerjaan berat,seperti buat ngegame,editing dll.<br /> meski anda membeli laptop yang speknya support buat ngegame/editing.akan tetapi laptop tidak akan tahan jika di pergunakan secara permanen + overtime .jika ingin begitu lebih baik anda menggunakan PC dekstop.<br /> <br /> 8.Untuk ketahanan system operasi anda agar tidak lemot/mudah terkena virus,usahakan jangan menginstal aplikasi yang tidak perlu,dan pakailah antivirus yang ampuh untuk menanggulani pencegahan virus,setidaknya setiap 6 bulan sekali jika laptop anda sudah tidak dalam performa bagus laptop anda perlu di install ulang,karna system operasi lama kelamaan juga performanya akan menurun.</p>\r\n<p><br /> gimana?setidaknya anda akan lebih tau dengan membaca artikel ini,semoga bermanfaat bagi anda :)<br /> </p>', '', 'administrator', 'cloud-virtualization-trouble-shooting.jpg', 'Wednesday, 26 October 2016', 'Berita', '<p>1Dalam perkembangan teknologi yang semakin pesat kebutuhan memiliki komputer jinjing/laptop bukanlah hal yang langka lagi,hampir setiap orang menginginkan kemudahan dalam pekerjaan mereka dalam menggunakan teknologi komputer. Akan tetapi seiring jalannya perkembangan teknologi dan sedikit pula orang yang minim pengetahuan tentang teknologi tersebut tak sedikit yang mengalami masalah dalam hal perawatan barang tersebut.Seperti laptop banyak yang sudah menggunakan di masyarakat kita.</p>', ''),
(5, 'Cara Mengatasi Komputer yang tidak Mau Tampil di Layar Monitor', 'hello rekan-rekan kharismamedia kali ini saya akan membagikan beberapa \r\ncara untuk mengatasi komputer anda yang mengalami masalah seperi judul \r\nartikel diatas.Mungkin sebagian dari anda pernah mengalami masalah \r\ndimana komputer anda tidak mau manampilkan apa-apa dilayar monitor \r\n,padahal komputer sudah di hidupkan dan monitor juga dalam kondisi \r\nmenyala.Kondisi ini kebanyakan sering terjadi pada komputer versi lama \r\nseperti komputer pentium 4 contohnya.langsung saja saya akan membagikan \r\ncara untuk mengatasi masalah tersebut.<br><br><b>Cara Pertama : </b>coba\r\n anda buka casing PC anda terlebih dahulu,kemudian lepaslah semua memory\r\n (RAM) yang berada di PC anda,kemudian cek memory tersebut kotor atau \r\ntidak.setelah anda cek,ambil stip ( penghapus pencil ) lalu bersihkan \r\nbagian kaki kuningannya memory tersebut dengan stip tersebut.<br><br><b>Cara Kedua :</b>\r\n Jika cara pertama tidak berhasil coba anda cek juga VGA-Card anda jika \r\ndalam PC anda terdapat VGA ekternal,lakukan juga pembersihan dengan stip\r\n tadi dibagian kaki kuningan VGA tersebut.<br><br><b>Cara Ketiga :</b> \r\nJika kedua cara diatas tidak berhasil juga selanjutnya lepaslah kabel \r\ndata yang ada di harddisk anda untuk yang masih menggunakan kabel data \r\ntype ATA coba anda lebih teliti membersihkannya bisa anda bersihkan \r\ndengan kuas.jika tidak berhasil juga cobalah ganti kabel ATA tersebut \r\ndengan yang lain.untuk kabel data bertype SATA kemungkinan penyebab \r\nmasalah disitu sangat jarang ditemui,jadi cukup lepas kemudian \r\nditancpkan lagi saja.<br><br><b>Cara Keempat :</b> sampai cara ketiga \r\nbelum berhasil juga kemungkinan ada masalah dengan hardware di PC \r\nanda.Jika anda menggunakan 2 memory cobalah lepas salah satu di antara \r\nkedua memory tersebut.cobalah menukar atau memindahkah memory tersbut ke\r\n slot yang lain.karena bisa jadi slot memory anda yang mengalami masalah\r\n sehingga berdampak pada layar monitor anda.<br><br>Jika dengan keempat \r\ncara diatas masih belum membuahkan hasil bisa jadi motherboard/mainboard\r\n anda mengalami masalah dan dianogsa yang lain yaitu VGA anda baik \r\neksternal maupun internal yang mengalami kerusakan,tapi kejadian seperti\r\n itu jarang terjadi. yang perlu anda lakukan adalah mengulang keempat \r\ncara diatas sampai berhasil,karena untuk mengatasi masalah tersebut \r\nkadang perlu mengulangi sampai beberapa kali cara diatas sampai kemudian\r\n monitor mau tampil kembali.<br>Sekian tips dari saya semogaa bermanfaat bagi andaa,untuk pertanyaan bisa comment dibawah yah :)<br><br><br>', 'Cara Mengatasi Komputer yang tidak Mau Tampil di Layar Monitor , kharisma media,nova kharisma husen<br>', 'admin', 'cloud-virtualization-trouble-shooting.jpg', 'Thursday, 23 January 2014 21:12:21', '2', '', ''),
(6, 'Trik Mengecek Laptop Second yang Masih Bagus', 'Bagi anda yang ingin membeli laptop second tapi tidak tau cara mengenali\r\n barang tersebut apakan masih oke apa tidak,saya ada sedikit trik untuk \r\nmengenal bagian mana saja yang perlu anda cek biar tidak menyesal \r\nnantinya ketika sudah dibeli.setidaknya anda akan lebih waspada dalam \r\nmemilih,apalagi jika kita belinya kepada orang yang belum pernah kita \r\nkenal.hehe<br>baik langsung saja kita ke topik pembicaraan,sebelum anda \r\ningin membeli laptop/netbook bekas setidaknya tidak ada salahnya anda \r\ntau tentang gimana keadaan laptop tersebut.kalau laptop tersebut \r\nkerusakannya terlihat jelas orang awam pun bisa melihat dan mudah \r\ntau,tapi bagaimana jika keadaannya sepertinya normal akan tetapi setelah\r\n kita gunakan beberapa hari ternyata rusak?<br>Maka dari itu kita perlu tau,berikut adalah beberapa trik untuk mengecek laptop second yang mau anda beli.,<br>-\r\n Langkah pertama pastikan laptop yang ingin anda beli tersebut kalau di \r\nlihat secara sekilas masih dalam kondisi bagus&nbsp; secara fisik<br>- <b>Kondisi laptop : </b>tekanlah\r\n bagian mesin laptop baik di tekan dari bawah maupun atas laptop,dan \r\nperhatikan bunyi laptop tersebut,jika terdengan bunyi seperti baut \r\nlaptop yang kurang kencang memasangnya,itu tandanya laptop tersebut \r\npernah dibongkar (sudah tidak segel )<br><br>-<b> Mengecek LCD : </b>Bukalah\r\n LCD laptop pelan-pelan kemudian tutup kembali,lihatlah dibagian engsel \r\nlaptop apakah ada pergeseran atau tidak ketika dibuka tutup baik \r\npergeseran casing LCD maupun pergeseran besi dudukan LCD nya,hal ini \r\nuntuk mengecek bagian LCD tersebut pernah lepas atau tidak.<br>dan yang \r\npaling penting,nyalakan laptop tersebut dan ubahlah background tampilan \r\npada dekstop menjadi tampilan gelap,lihatlah dengan teliti disetiap \r\nlayar apakah ada titik putih (dot pixel) didalamnya,jika ada maka LCD \r\ntersebut kondisinya sudah tidak baik.<br><br>- <b>Mengecek keyboard : </b>coba\r\n buka notepad dan cobalah tombol keyboard satu-satu apakah masih \r\nberfungsi secara normal atau tidak.dan cobalah menekan satu-satu tombol \r\nkeyboard agak keras 3 kali ,ini bertujuan apakah setelah ditekan agak \r\nkeras keyboard tersebut masiih berfungsi atau tidak,jika tidak berarti \r\nkeyboard tersebut ada yang tidak normal.<br><br>- <b>Mengecek DVD : </b>Bawalah\r\n CD/DVD kepingan yang sudah ada isinya,saya sarankan anda membawa \r\nkepingan DVD agar bisa benar-benar mengecek DVD dari laptop yang ingin \r\nanda beli tersebut.<br><br>- <b>Mengecek batteray : </b>Untuk menecek \r\nbatre ini sangatlah mudah anda tinggal melihat indikator bateray selama \r\nanda menggunakan laptop tersebut masih kuat berapa lama.<br><br>- <b>Mengecek USB &amp; webcame : </b>Bawalah\r\n flashdisk untuk mengecek satu-satu USB yang terdapat pada laptop \r\ntersebut.dan jika laptop tersebut ada webcamenya cobalah minta sang \r\npemilik untuk menampilkan webcame tersebut apakah masih berfungsi dengan\r\n baik atau tidak.<br><br>- Mengecek sound : Untuk mengecek kualitas \r\nsuara,putar musik dan maksimalkan volume suaranya,usahakan mengecek \r\nditempat tertutup ruangan agar suaranya terdengar jelas.<br><br>- <b>Mengecek system :</b>\r\n Cek system operasi laptop tersebut apakah masih dalam kondisi performa \r\nyang baik atau tidak jika laptop dalam kondisi lemot ketika memproses \r\nsesuatu itu bisa jadi system sudah rusak dan harus di instali lagi.<br><br>- <b>Mengecek spesifikasi : </b>Cek\r\n juga spesifikasi laptop yang ditawarkan apakah betul laptop tersebut \r\ndengan spesifikasi yang benar ditawarkan kepada anda seperti \r\nRAM,Harddisk,VGA dll.,<br><br>-&nbsp; Dengarkan suara fan dan pegang bagian \r\nmesin rasakan temperatur panas laptop tersebut,jika keduanya pada \r\nkondisi yang tidak normal akan mengakibakan laptop rusak ketika \r\ndigunakan selanjutnya.<br><br>Yang paling terpenting adalah jika dalam \r\npengecekan diatas ada salah satu masalah didalam laptop dan ada keraguan\r\n dihati anda,akan tetapi masih ingin membeli mintalah garansi personal \r\ndari penjual laptop tersebut.jika tidak ada garansi lebih baik anda cari\r\n barang yang lain.yang sekiranya kondisinya normal semua untuk \r\nmenghindari resiko kerusakan kedepannya.<br>Yup itu sedikit trik dari saya,semoga bermanfaat :))<br><br>&nbsp;<br>', 'Trik Mengetahui Laptop Second yang Masih Bagus,cara membeli laptop second,tipsmengenal laptop second bagus,<br>', 'admin', 'tips-karismamedia.jpg', 'Thursday, 23 January 2014 21:11:57', '4', '', ''),
(9, 'Pengetahuan dasar untuk membuka sebuah usaha', 'Banyak orang yang ingin mempunyai sebuah usaha tapi masih ragu mau menjalankannya,baik yang sudah ada modal maupun belum,modal yang banyak di atikan orang pada umumnya yaitu pasti berupa uang,tapi saya berpendapat bahwa uang bukanlah modal utama untuk memulai sebuah bisnis.mengapa bisa begitu? yuk ikuti coretan selanjutnya.heehe.,<br>Oke,banyak orang mengansumsikan bahwa untuk memulai sebuah usaha adalah dengan mempunylai modal berupa uang,dengan uang tersebut orang bisa menjalankan usahanya,tapi apakah setelah ada modal uang, usaha akan bisa langsung anda dirikan?<br>Pasti bagi orang yang pemula ingin memulai sebuah usaha,tidak langsung berani mendirikan usaha tersebut,dalam pikiran pasti ada yang berfikir "nanti kalau rugi gimana?" . nah akhirnya usaha tidak jadi berdiri kan karena ada keraguan tersebut.berarti uang bukanlah modal utama untuk memulai sebuah usaha :)<br><br>Lalu apa modal utama yang harus dipersiapkan untuk memulai sebuah usaha? jawabannya adalah<b> MENTAL</b> :)<br>Mental andalah modal utama untuk memulai sebuah usaha/bisnis.mengapa bisa mental?bukannya uang?baiklah akan saya jelaskan pemaparannya.Seorang wirausaha haruslah bermental kuat dan tahan banting dengan resiko yang ada,sebelum membangun sebuah bisnis,bangun terlebih dahulu mental anda,jika mental sudah terbangun dan sudah kokoh tahan banting ibaratnya,ketika anda sedang berbisnis mau untung maupun rugi itu dianggap sebuah proses untuk menuju ke titik kejayaan.<br><br>Lalu bagaimana dengan mental anda bisa memulai sebuah usaha/bisnis? oke pertama setelah anda memiiki mental yang kuat bangunlah banyak relasi dengan rekan-rekan anda dan anda juga harus punya soft skill gimana anda menjaga hubungan anda dengan relasi-relasi anda tersebut agar tetap baik.<br>semakin banyak relasi anda adalah sebuah keuntungan bagi anda,tunjukan kepada mereka keahlian kusus anda dibidang apa,orang yang sudah mempunyai mental bisnis yang kuat tentunya sudah mempunyai keahlian-keahlian dibidang tertentu untuk memulai bisnisnya.,<br><br>Dengan begitu pasti ada beberapa dari rekan anda yang tertarik dengan anda,dengan mental bisnis yang kuat dan teknik keahlian anda yang anda perlihatkan kepada mereka.disitu pulalah anda bisa memulai bisnis tanpa modal uang.<br>Kebanyakan mereka yang punya banyak uang tapi tidak tau ingin di apakan dan tidak mempunyai keahlian berbisnis,pasti akan memodali anda untuk mendirikan sebuah bisnis dengan sistem bagi hasil.dari situlah anda akan bisa mengembangkan bisnis anda.yah bisnis tanpa modal tapi dengan mental berani :)<br><br>&nbsp;Mentalah yang harus anda bangun untuk memulai sebuah usaha,setelah anda punya mental yang cukup,mulailah mencari relasi dan tunjukan keahlian anda kepada mereka,dan belajarlah dari proses tersebut .<br>Oke sekian dulu ya, semoga bermanfaat bagi anda :)<br><br><br><br><br>', 'Apa yang Perlu di Persiapkan untuk Memulai Sebuah Usaha?,bisnis tanpa modal,kharismamedia,service laptop murah semarang,nova kharisma husen.cctv semarang.instalasi jaringan,teknik marketing.teknik penjualan jitu.<br>', 'kharismamedia', 'start-a-business-kharismamedia.jpg', 'Wednesday, 18 November 2015 11:33:24', '3', 'Banyak orang yang ingin mempunyai sebuah usaha tapi masih ragu mau \r\nmenjalankannya,baik yang sudah ada modal maupun belum,modal yang banyak \r\ndi atikan orang pada umumnya yaitu pasti berupa uang,tapi saya \r\nberpendapat bahwa uang bukanlah moda', ''),
(11, 'Software Penjualan Kasir Point Of Sale (POS) ', 'Kami menawarkan kepada anda software kasir untuk penjualan di toko anda \r\n,bisa di gunakan di toko kelontong ataupun mini market,support dengan \r\nbarcode,mesin laci uang dan mini printer dengan harga cukup terjangkau. \r\nBerikut adalah fitur yang kami berikan<br><br>&nbsp;fitur :\r\n<br>-stok barang\r\n<br>-barang masuk\r\n<br>-barang keluar\r\n<br>-data konsumen\r\n<br>-data supplier\r\n<br>-laporan penjualan\r\n<br>-laporan barang masuk\r\n<br>-laporan barang keluar\r\n<br>-penjualan grosir\r\n<br>-penjualan eceran\r\n<br>-shif petugas jaga\r\n<br>-support barcode<br>-support cash drawer\r\n<br>-support mini printer\r\n<br>-dll<br><br><font size="5">Harga : Rp.850.000\r\n\r\n<br><br>kelebihan +\r\n<br>+ garansi seumur hidup\r\n<br>+ sekali install untuk selamanya tidak ada biaya perpanjangan\r\n<br>+ database tidak dibatasi (bisa input data sebanyak banyaknya)\r\n\r\n</font><br><br>hanya dengan harga Rp.850.000 anda sudah dapat software \r\ntersebut,garansi seumur hidup. Jika anda berminat atau tanya jawab bisa \r\nlangsung hubungi marketing kami dibawah ini.<br><br><b>&nbsp;kontak marketing :\r\n<br>Telp/sms : 082 242 471 565<br>&nbsp;Pin BB : 2257DB61\r\n\r\n\r\n\r\n</b><br><br>catatan : \r\njika anda berada diluar kota kami,bisa di instalkan ke komputer anda via\r\n online,tidak melalui pengriman barang biar proses cepat dan tidak \r\nmenemukan kendala saat penginstalan.\r\n\r\n<br><br>Jika anda dikota semarang dan sekitarnya kami akan datang langsung ke tempat anda untuk melakukan penginstallan langsung<br><br><br>&nbsp;-Kharismamedia Group-\r\n\r\n.', 'sofware kasir<br>', 'kharismamedia', 'sofware-kasir-kharismamedia.jpg', 'Sunday, 06 December 2015', '1', 'Kami menawarkan kepada anda software kasir untuk penjualan di toko anda \r\n,bisa di gunakan di toko kelontong ataupun mini market,support dengan \r\nbarcode,mesin laci uang dan mini printer dengan harga cukup terjangkau. \r\nBerikut adalah fitur yang kami berikan', 'software kasir'),
(12, 'pariwisata semarang', '<p>Kami menawarkan kepada anda software kasir untuk penjualan di toko anda ,bisa di gunakan di toko kelontong ataupun mini market,support dengan barcode,mesin laci uang dan mini printer dengan harga cukup terjangkau. Berikut adalah fitur yang kami berikan fitur : -stok barang -barang masuk -barang keluar -data konsumen -data supplier -laporan penjualan -laporan barang masuk -laporan barang keluar -penjualan grosir -penjualan eceran -shif petugas jaga -support barcode-support cash drawer -support mini printer -dllHarga : Rp.850.000 kelebihan + + garansi seumur hidup</p>', '<p>dsds</p>', 'administrator', '285131_451008268423697_6041199796982045586_n.jpg', 'Wednesday, 26 October 2016', 'Berita', '<p>dsd</p>', 'bnbnbn');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aturan_rule`
--

CREATE TABLE IF NOT EXISTS `aturan_rule` (
  `id_rule` int(5) NOT NULL AUTO_INCREMENT,
  `id_kerusakan` varchar(5) NOT NULL,
  `id_gejala` varchar(5) NOT NULL,
  `nilai` double NOT NULL,
  PRIMARY KEY (`id_rule`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data untuk tabel `aturan_rule`
--

INSERT INTO `aturan_rule` (`id_rule`, `id_kerusakan`, `id_gejala`, `nilai`) VALUES
(1, '1', '1', 0.3),
(2, '1', '2', 0.3),
(3, '1', '3', 0.3),
(4, '1', '4', 0.3),
(5, '2', '5', 0.3),
(6, '2', '6', 0.3),
(7, '2', '7', 0.3),
(8, '2', '8', 0.3),
(9, '3', '9', 0.3),
(10, '3', '10', 0.3),
(11, '3', '11', 0.3),
(12, '3', '12', 0.3),
(13, '4', '13', 0.3),
(14, '4', '14', 0.3),
(15, '4', '15', 0.3),
(16, '4', '16', 0.3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `pertanyaan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `kode`, `nama`, `pertanyaan`) VALUES
(1, 'G1', 'Coil putus', 'Coil putus'),
(2, 'G2', 'Vape tidak bisa firing', 'Vape tidak bisa firing'),
(3, 'G3', 'Lilitan coil tidak sempurna', 'Lilitan coil tidak sempurna'),
(4, 'G4', 'Pin konektor kotor', 'Pin konektor kotor'),
(5, 'G5', 'Vape tidak menyala', 'Vape tidak menyala'),
(6, 'G6', 'Batre tidak terisi ketika di cas melalui mod', 'Batre tidak terisi ketika di cas melalui mod'),
(7, 'G7', 'Tombol power tidak berfungsi', 'Tombol power tidak berfungsi'),
(8, 'G8', 'Data MOD tidak terbaca ketika dihubungkan ke komputer', 'Data MOD tidak terbaca ketika dihubungkan ke komputer'),
(9, 'G9', 'Mod menyala tapi tidak bisa firing', 'Mod menyala tapi tidak bisa firing'),
(10, 'G10', 'Ada peringatan atomizer short', 'Ada peringatan atomizer short'),
(11, 'G11', 'Tidak bisa mengatur resistensi mod', 'Tidak bisa mengatur resistensi mod'),
(12, 'G12', 'Firing sendiri', 'Firing sendiri'),
(13, 'G13', 'Daya batre tidak terisi ketika di charge', 'Daya batre tidak terisi ketika di charge'),
(14, 'G14', 'Sering menyala sendiri', 'Sering menyala sendiri'),
(15, 'G15', 'Resisten tidak sesuai', 'Resisten tidak sesuai'),
(16, 'G16', 'Setingan resisten sering reset sendiri', 'Setingan resisten sering reset sendiri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE IF NOT EXISTS `halaman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`id`, `nama`, `isi`) VALUES
(1, 'profil', '<p>kami adalah..,.,.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawabkerusakan`
--

CREATE TABLE IF NOT EXISTS `jawabkerusakan` (
  `id_jawab` varchar(20) NOT NULL,
  `G01` varchar(30) NOT NULL,
  `G02` varchar(30) NOT NULL,
  `G03` varchar(30) NOT NULL,
  `G04` varchar(30) NOT NULL,
  `G05` varchar(30) NOT NULL,
  `G06` varchar(30) NOT NULL,
  `G07` varchar(30) NOT NULL,
  `G08` varchar(30) NOT NULL,
  `G09` varchar(30) NOT NULL,
  `G10` varchar(30) NOT NULL,
  `G11` varchar(10) NOT NULL,
  `G12` varchar(10) NOT NULL,
  `G13` varchar(10) NOT NULL,
  `G14` varchar(10) NOT NULL,
  `G15` varchar(10) NOT NULL,
  `G16` varchar(5) NOT NULL,
  `G17` varchar(5) NOT NULL,
  `G18` varchar(5) NOT NULL,
  `G19` varchar(5) NOT NULL,
  `G20` varchar(5) NOT NULL,
  PRIMARY KEY (`id_jawab`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawabkerusakan`
--

INSERT INTO `jawabkerusakan` (`id_jawab`, `G01`, `G02`, `G03`, `G04`, `G05`, `G06`, `G07`, `G08`, `G09`, `G10`, `G11`, `G12`, `G13`, `G14`, `G15`, `G16`, `G17`, `G18`, `G19`, `G20`) VALUES
('KS001', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'G11', '', '', '', '', '', '', '', '', ''),
('KS003', 'x', 'x', 'x', 'G04', 'G05', 'x', 'x', 'x', 'x', 'x', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerusakan`
--

CREATE TABLE IF NOT EXISTS `kerusakan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `solusi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `kerusakan`
--

INSERT INTO `kerusakan` (`id`, `kode`, `nama`, `solusi`) VALUES
(1, 'P01', 'Atomizer Short', ''),
(2, 'P02', 'Kerusakan pada Mod', ''),
(3, 'P03', 'Kerusakan pada RDA/RDTA', ''),
(4, 'P04', 'Kerusakan pada Chipset', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE IF NOT EXISTS `konsultasi` (
  `id_konsultasi` int(5) NOT NULL AUTO_INCREMENT,
  `id_peserta` varchar(20) NOT NULL,
  `id_gejala` varchar(5) NOT NULL,
  PRIMARY KEY (`id_konsultasi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `id_peserta`, `id_gejala`) VALUES
(1, 'KS001', '1'),
(2, 'KS001', '9'),
(3, 'KS001', '10'),
(4, 'KS001', '11'),
(5, 'KS001', '25'),
(6, 'KS001', '26'),
(7, 'KS002', '1'),
(8, 'KS002', '2'),
(9, 'KS002', '3'),
(10, 'KS002', '4'),
(11, 'KS002', '5'),
(12, 'KS003', '1'),
(13, 'KS003', '2'),
(14, 'KS003', '3'),
(15, 'KS003', '4'),
(16, 'KS003', '1'),
(17, 'KS003', '2'),
(18, 'KS003', '3'),
(19, 'KS003', '4'),
(20, 'KS005', '1'),
(21, 'KS005', '2'),
(22, 'KS005', '3'),
(23, 'KS005', '4'),
(24, 'KS006', '1'),
(25, 'KS006', '2'),
(26, 'KS006', '3'),
(27, 'KS006', '4'),
(28, 'KS007', '1'),
(29, 'KS007', '2'),
(30, 'KS007', '3'),
(31, 'KS007', '4'),
(32, 'KS008', '1'),
(33, 'KS008', '2'),
(34, 'KS008', '6'),
(35, 'KS008', '7'),
(36, 'KS009', '1'),
(37, 'KS009', '2'),
(38, 'KS009', '3'),
(39, 'KS009', '4'),
(40, 'KS009', '7'),
(41, 'KS009', '8'),
(42, 'KS010', '1'),
(43, 'KS010', '2'),
(44, 'KS010', '3'),
(45, 'KS010', '4'),
(46, 'KS011', '5'),
(47, 'KS011', '6'),
(48, 'KS011', '7'),
(49, 'KS011', '8'),
(50, 'KS012', '13'),
(51, 'KS012', '14'),
(52, 'KS012', '15'),
(53, 'KS012', '16'),
(54, 'KS012', '5'),
(55, 'KS012', '6'),
(56, 'KS012', '7'),
(57, 'KS012', '8'),
(58, 'KS013', '9'),
(59, 'KS013', '10'),
(60, 'KS013', '11'),
(61, 'KS013', '12'),
(62, 'KS014', '13'),
(63, 'KS014', '14'),
(64, 'KS014', '15'),
(65, 'KS014', '16'),
(66, 'KS015', '1'),
(67, 'KS015', '2'),
(68, 'KS015', '3'),
(69, 'KS015', '4'),
(70, 'KS016', '13'),
(71, 'KS016', '14'),
(72, 'KS016', '15'),
(73, 'KS016', '16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaikerusakan`
--

CREATE TABLE IF NOT EXISTS `nilaikerusakan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_konsultasi` varchar(20) NOT NULL,
  `gejala` varchar(30) NOT NULL,
  `NP1` double NOT NULL,
  `NP2` double NOT NULL,
  `NP3` double NOT NULL,
  `NP4` double NOT NULL,
  `NP5` double NOT NULL,
  `NP6` double NOT NULL,
  `NP7` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `nilaikerusakan`
--

INSERT INTO `nilaikerusakan` (`id`, `id_konsultasi`, `gejala`, `NP1`, `NP2`, `NP3`, `NP4`, `NP5`, `NP6`, `NP7`) VALUES
(1, 'KS001', 'G11', 0, 0, 0, 0, 1, 0, 0),
(2, 'KS003', 'G04', 0, 0.3, 0.3, 0.3, 0, 0, 0),
(3, 'KS003', 'G05', 0, 0, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `kode_konsultasi` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_konsultasi`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`kode_konsultasi`, `nama`, `email`) VALUES
('KS001', 'JEKY', 'jkymonte@gmail.com'),
('KS002', 'JEKY', 'jkymonte@gmail.com'),
('KS003', 'JEKY', 'jkymonte@gmail.com'),
('KS004', 'JEKY', 'jkymonte@gmail.com'),
('KS005', 'JEKY', 'jkymonte@gmail.com'),
('KS006', 'JEKY', 'jkymonte@gmail.com'),
('KS007', 'JEKY', 'jkymonte@gmail.com'),
('KS008', 'JEKY', 'jkymonte@gmail.com'),
('KS009', 'JEKY', 'jkymonte@gmail.com'),
('KS010', 'JEKY', 'jkymonte@gmail.com'),
('KS011', 'JEKY', 'elisawyn8@gmail.com'),
('KS012', 'JEKY', 'elisawyn8@gmail.com'),
('KS013', 'JEKY', 'elisawyn8'),
('KS014', 'JEKY', 'elisawyn8@gmail.com'),
('KS015', 'JEKY', 'jkymonte@gmail.com'),
('KS016', 'JEKY', 'elisawyn8@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rule`
--

CREATE TABLE IF NOT EXISTS `rule` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `gejala` varchar(30) NOT NULL,
  `NP1` double NOT NULL,
  `NP2` double NOT NULL,
  `NP3` double NOT NULL,
  `NP4` double NOT NULL,
  `NP5` double NOT NULL,
  `NP6` double NOT NULL,
  `NP7` double NOT NULL,
  `NP8` double NOT NULL,
  `NP9` double NOT NULL,
  `NP10` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `rule`
--

INSERT INTO `rule` (`id`, `gejala`, `NP1`, `NP2`, `NP3`, `NP4`, `NP5`, `NP6`, `NP7`, `NP8`, `NP9`, `NP10`) VALUES
(1, 'G01', 0.9, 0.3, 0.3, 0.3, 0, 0, 0, 0, 0, 0),
(2, 'G02', 0.3, 0.3, 0.3, 0.3, 0, 0, 0, 0, 0, 0),
(3, 'G03', 0.3, 0.3, 0.3, 0.3, 0, 0, 0, 0, 0, 0),
(4, 'G04', 0, 0.3, 0.3, 0.3, 0, 0, 0, 0, 0, 0),
(5, 'G05', 0, 0, 0, 0.3, 0, 0, 0, 0, 0, 0),
(6, 'G06', 0, 0, 0, 0.3, 0, 0, 0, 0, 0, 0),
(7, 'G07', 0, 0, 0.3, 0.3, 0, 0, 0, 0, 0, 0),
(8, 'G08', 0, 0, 0, 0.3, 0, 0, 0, 0, 0, 0),
(9, 'G09', 0, 0, 0.3, 0, 0, 0, 0, 0, 0, 0),
(10, 'G10', 0.3, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'G11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'G12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'G13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'G14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'G15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'G16', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_petugas` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_petugas`, `nama`, `alamat`, `notelp`, `user`, `pass`, `status`) VALUES
('PT-00001', 'nanda_db', 'semarang', '-', 'nanda_db', 'cupel', 'aktif'),
('PT-00002', 'admin', '-', '-', 'admin', 'admin1', 'aktif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
