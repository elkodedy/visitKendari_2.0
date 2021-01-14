-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 04:42 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_visit_kendari`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `acc_id` int(11) NOT NULL,
  `acc_name` varchar(20) NOT NULL,
  `acc_cost` varchar(20) NOT NULL,
  `acc_photo` text NOT NULL,
  `acc_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`acc_id`, `acc_name`, `acc_cost`, `acc_photo`, `acc_info`) VALUES
(1, 'Claro', '$399', 'assets/images/claro1.jpg', 'Hotel Grand Clarion berada di tengah Kota Kendari tepatnya di Jalan Edi Sabara. Hotel bintang empat ini menawarkan lokasi yang strategis dengan fasilitas yang lengkap. \r\n<br><br>\r\n\r\nRuang kamarnya yang luas dilengkapi dengan wi-fi, AC, TV. ketel pembuat kopi dan fasilitas kamar kelas bintang empat lainnya. Yang spesial di seberang hotel terdapat taman mangrove. Saat ada waktu luang, manfaatkan untuk jalan-jalan sejenang menikmati hijaunya taman. \r\n<br><br>\r\n\r\nSelain itu, hotel bintang ini memiliki Sunachi Cuisine di mana setiap tamu bisa mencicipi kelezatan menu internasional di sana. \r\n<br><br>\r\n\r\nLokasi: Jl. Edi Sabara No 89, Kendari'),
(2, 'Same Hotel', '$299', 'assets/images/same1.jpg', 'Same Hotel Kendari memang berada di lokasi yang strategis. Dekat dengan kota dan tak begitu jauh dari pantai. Tak jauh dari hotel, terdapat taman mangrove yang menghadap ke laut. \r\n<br><br>\r\n\r\nRuang kamarnya yang kedap udara pun makin menciptakan kenyamanan bermalam di sana. Soal fasilitas kamar, hotel Kendari ini berikan fasilitas standar seperti yang diberikan hotel bintang tiga lainnya.  \r\n<br><br>\r\n\r\nKeramahan dan kesigapan para staff hotel pun luar biasa. Hanya saja, banyak tamu yang mengeluhkan minimnya variasi menu sarapan. \r\n<br><br>\r\n\r\nLokasi: Jalan Edi Sabara No.55, Mandonga, Kendari'),
(3, 'Plaza Inn', '$299', 'assets/images/plazainn1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `des_id` int(11) NOT NULL,
  `des_name` varchar(20) NOT NULL,
  `des_tag` varchar(255) NOT NULL,
  `des_cost` varchar(20) NOT NULL,
  `des_photo` varchar(100) NOT NULL,
  `des_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`des_id`, `des_name`, `des_tag`, `des_cost`, `des_photo`, `des_info`) VALUES
(1, 'Pulau Labengki', 'Sun, Beach, Sand, Sea', '$1799', 'assets/images/labengki1.jpg', 'Tempat wisata di Kendari yang pertama adalah Pulau Labengki. Pulau yang satu ini mungkin tak banyak yang pernah mendengarnya. Kalau para wisatawan lokal mungkin sudah banyak yang mendengar nama dari pulau yang satu. Namun, kebanyakan wisatawan yang berasal dari luar daerah tak begitu tau dan tak begitu mengetahui tentang pulau yang satu ini. Pulau yang satu ini bisa ditempuh dari perjalanan laut , menggunakan kapal dari Toli-Toli selama kurang lebih 2-3 jam perjalanan.\r\n<br><br>\r\nJangan liat lamanya perjalanan, karena selama perjalanan kalian akan dimanjakan dengan pemandangan laut yang cantik, serta atraksi dari lumba-lumba yang akan ikut mengiringi perjalanan kita. Ketika kita telah sampai ke Labengki, maka jangan kaget dengan pemandangan yang disajikan oleh pulau yang satu ini. Pemandangan di pulau ini sangat menarik dan cantik, bahkan tak kalah cantik jika dibandingkan dengan Raja Ampat Papua. Pulau yang satu ini memiliki warna air laut biru tosca dan hijau tosca. Kita bisa berenang dan melakukan snorkling disekitar pantai yang sangat cantik ini.\r\n<br><br>\r\n\r\nPemandangan indah dari pulau yang satu ini memang tak hanya terletak pada keindahan daratannya saja, tapi jangan ragukan keindahan bahwa laut yang juga dimilikinya. Ketika kalian melakukan snorkling maka kalian akan bisa melihat beragam biota laut yang ada di bawah perairan pulau labengki ini sangat cantik dan menarik. Pulau Labengki sendiri merupakan sebuah pulau yang terdiri dari gugusan batu-batu karang. Namun, tak semuanya hanya terdiri dari batu karang, di pulau ini kita juga bisa menikmati keindahan pasir pantai yang putih. Sebuah tempat yang sangat cocok untuk bersantai dan menghabiskan waktu. Pastikan pulau Labengki masuk kedalam daftar tempat yang akan kalian kunjungi nantinya.\r\n<br><br>\r\n\r\nTempat wisata di Kendari yang pertama adalah Pulau Labengki. Pulau yang satu ini mungkin tak banyak yang pernah mendengarnya. Kalau para wisatawan lokal mungkin sudah banyak yang mendengar nama dari pulau yang satu. Namun, kebanyakan wisatawan yang berasal dari luar daerah tak begitu tau dan tak begitu mengetahui tentang pulau yang satu ini. Pulau yang satu ini bisa ditempuh dari perjalanan laut , menggunakan kapal dari Toli-Toli selama kurang lebih 2-3 jam perjalanan.\r\n<br><br>\r\n\r\nJangan liat lamanya perjalanan, karena selama perjalanan kalian akan dimanjakan dengan pemandangan laut yang cantik, serta atraksi dari lumba-lumba yang akan ikut mengiringi perjalanan kita. Ketika kita telah sampai ke Labengki, maka jangan kaget dengan pemandangan yang disajikan oleh pulau yang satu ini. Pemandangan di pulau ini sangat menarik dan cantik, bahkan tak kalah cantik jika dibandingkan dengan Raja Ampat Papua. Pulau yang satu ini memiliki warna air laut biru tosca dan hijau tosca. Kita bisa berenang dan melakukan snorkling disekitar pantai yang sangat cantik ini.\r\n<br><br>\r\n\r\nPemandangan indah dari pulau yang satu ini memang tak hanya terletak pada keindahan daratannya saja, tapi jangan ragukan keindahan bahwa laut yang juga dimilikinya. Ketika kalian melakukan snorkling maka kalian akan bisa melihat beragam biota laut yang ada di bawah perairan pulau labengki ini sangat cantik dan menarik. Pulau Labengki sendiri merupakan sebuah pulau yang terdiri dari gugusan batu-batu karang. Namun, tak semuanya hanya terdiri dari batu karang, di pulau ini kita juga bisa menikmati keindahan pasir pantai yang putih. Sebuah tempat yang sangat cocok untuk bersantai dan menghabiskan waktu. Pastikan pulau Labengki masuk kedalam daftar tempat yang akan kalian kunjungi nantinya.'),
(2, 'Bokori', 'Sun, Beach, Sand, Sea', '$499', 'assets/images/bokori1.jpg', 'Si kecil cabe rawit, mungkin itu perumpamaan yang pas untuk ditujukan pada pulau yang satu ini. Sebagai salah satu destinasi wisata bahari di Indonesiapulau yang satu tak akan mengecewakan kalian yang berkunjung kesini. Bahkan bisa dikatakan bahwa kalian harus memasukan pulau yang satu ini kedalam daftar tempat wisata yang harus kalian datangi jika datang ke Kendari.\r\n\r\nLetak dari pulau yang satu ini bisa dikatakan tidak terlalu jauh dari Kendari. Selain itu tempat ini juga cukup terkenal dikalangan masyarakat lokal, jadi untuk mencari informasi mengenai tempat yang satu ini bisa dikatakan cukup mudah. Jika kalian ingin berkunjung dan menikmati keindahan pulau yang satu ini maka kalian dapat menyewa perahu-perahu milik penduduk yang terdapat di dermaga. Harga sewa bisa saja berbeda-beda tergantung bagiamana kalian dapat menawarnya dengan baik. Pulau yang satu ini memiliki hamparan pasir putih yang sangat cantik.\r\n\r\nSelain itu juga tempat ini bisa menjadi sebuah spot diving yang juga tak kalah menariknya. Pemandangan bawah laut di pulau ini memang sangat cantik dan menarik. soal fasilitas tak perlu diragukan, fasilitas di pulau ini sudah tergolong cukup lengkap dan memadai. Bagi mereka yang ingin menginap, kita bisa menemukan beberapa penginapan yang ada di Pulau ini. Berlibur sambil bersantai dan menikmati pemandangan indah Pulau Bokori tentunya tak akan menjadi sebuah pilihan yang buruk.'),
(3, 'Bungkutoko', 'Sun, Beach, Sand, Sea', '$399', 'assets/images/bungkutoko1.jpg', 'Tempat wisata baru di Kota Kendari yaitu Trancking Mangrove atau hutan mangrove (bakau) kini menjadi daya tarik tempat wisata alam masyarakat kota kendari dan sekitarnya. Tracking mangrove berada di Kelurahan Lahundape Kec. Kendari Barat dan Pulau Bungkutoko, Kelurahan Bungkutoko Kecamatan Abeli. Pemerintah Kota Kendari menetapkan kawasan tersebut sebagai objek wisata dan pusat penelitian.\r\n\r\nDiresmikan 28 Januari 2016 yang lalu ekowisata Mangrove ini diberi nama Tracking Mangrove Bungkutoko. Tempat wisata ini telah ramai dikunjungi bahkan dalam masa pembangunannya dan semakin menarik dengan dekorasi cat berwarna-warni\r\n\r\nTracking mangrove Bungkutoko memiliki panjang sekitar 500 meter dengan track yang memutar lengkap dengan pintu masuk, serta beberapa fasilitas penunjang diantaranya area parkir kendaraan sejumlah gazebo, toilet, pos jaga dan menara pantau. Jarak yang ditempuh menuju Tracking Mangrove bungkutoko sekitar 30 menit, dengan jarak 16 km dari MTQ Kendari.\r\n\r\nSelain letaknya yang tidak jauh dari pusat kota, ekowisata seluas 1,5 Ha ini juga adalah wisata yang murah meriah, karena hanya dikenakan Rp. 2.000 untuk biaya masuk dan Rp. 50.000 jika ingin menyewa gazebo yang tersebar di beberapa spot tracking. Untuk biaya parkir standarlah ya.. Rp. 2.000 untuk motor dan Rp.5.000 untuk mobil.\r\n\r\nKeberadaan hutan semakin rusak karena manusia ti¬dak menghormati bahkan merusak. Kondisi hutan Indonesia semakin kritis karena pembalakan. Maka dari itu perlu segera “dibangun” kembali hutan-hutan baru untuk paru-paru kota. Inilah salah satu tujuan pemba¬ngunan tracking Mangrove Bung¬kutoko.'),
(4, 'Air Terjun Moramo', 'Sun, Beach, Sand, Sea', '$899', 'assets/images/moramo1.jpg', ''),
(5, 'Danau Biru', 'Sun, Beach, Sand, Sea', '$1199', 'assets/images/danaubiru1.jpg', ''),
(6, 'Pulau Senja', 'Sun, Beach, Sand, Sea', '$899', 'assets/images/senja1.jpg', ''),
(7, 'Pulau Hari', 'Sun, Beach, Sand, Sea', '$899', 'assets/images/hari1.jpg', ''),
(8, 'Pantai Nambo', '', '$499', 'assets/images/nambo1.png', ''),
(9, 'Taman Kota', '', '$399', 'assets/images/tamkot1.jpg', ''),
(10, 'Pantai Toronipa', '', '$599', 'assets/images/toronipa1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `guide_id` int(11) NOT NULL,
  `guide_name` varchar(20) NOT NULL,
  `guide_cost` varchar(20) NOT NULL,
  `guide_phone` varchar(20) NOT NULL,
  `guide_photo` text NOT NULL,
  `guide_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`guide_id`, `guide_name`, `guide_cost`, `guide_phone`, `guide_photo`, `guide_info`) VALUES
(1, 'Elko Dedy Pratama', '$299', '082271362624', 'assets/images/pemanduelko1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'Vina Olyvia Ismail', '$189', '081234345656', 'assets/images/pemanduvina1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'Dovier Cakra Wardaya', '$199', '082323234545', 'assets/images/pemanduota1.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 'Afrilia Gita', '$219', '082234178645', 'assets/images/pemandugita1.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `des_id` int(11) NOT NULL,
  `gui_id` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tourist`
--

CREATE TABLE `tourist` (
  `tou_id` int(11) NOT NULL,
  `tou_name` varchar(20) NOT NULL,
  `tou_phone` varchar(20) NOT NULL,
  `tou_gender` varchar(20) NOT NULL,
  `tou_age` int(11) NOT NULL,
  `tou_city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`des_id`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`guide_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `des_id` (`des_id`),
  ADD KEY `gui_id` (`gui_id`),
  ADD KEY `acc_id` (`acc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `des_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `guide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
