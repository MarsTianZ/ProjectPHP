-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 05:50 AM
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
-- Database: `peminjamanbuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` varchar(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `tahunTerbit` date DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `cover` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `penerbit`, `tahunTerbit`, `deskripsi`, `cover`) VALUES
('1', 'Harry Potter and the Philosopher\'s Stone', 'J.K. Rowling', 'Bloomsbury', '1997-06-26', 'Harry Potter and the Philosopher\'s Stone adalah novel pertama dalam seri Harry Potter yang ditulis oleh J.K. Rowling. Cerita ini mengikuti petualangan seorang anak yatim piatu bernama Harry Potter, yang pada ulang tahun kesebelasnya mengetahui bahwa ia adalah seorang penyihir. Dia menerima surat undangan dari Sekolah Sihir Hogwarts dan memulai perjalanan magisnya di dunia sihir. Di Hogwarts, Harry bertemu dengan teman-teman barunya, Ron Weasley dan Hermione Granger, serta menghadapi tantangan dan bahaya yang mengerikan. Mereka harus mengungkap misteri Batu Bertuah yang dicuri, yang memiliki kekuatan tak terbatas, sebelum jatuh ke tangan yang salah. Dalam perjalanan ini, Harry belajar tentang persahabatan, keberanian, dan arti sejati dari keluarga.', 'https://upload.wikimedia.org/wikipedia/id/b/bf/Harry_Potter_and_the_Sorcerer%27s_Stone.jpg'),
('2', 'To Kill a Mockingbird', 'Harper Lee', 'J.B. Lippincott & Co.', '1960-07-11', 'To Kill a Mockingbird adalah sebuah novel klasik yang ditulis oleh Harper Lee. Cerita ini mengambil latar belakang di sebuah kota kecil bernama Maycomb, Alabama, pada tahun 1930-an. Naratornya adalah Jean Louise \"Scout\" Finch, seorang gadis kecil yang cerdas dan penuh semangat. Scout bersama dengan kakaknya, Jem, dan teman mereka, Dill, terlibat dalam petualangan yang mengubah hidup mereka ketika ayah mereka, Atticus Finch, seorang pengacara yang penuh integritas, ditunjuk untuk membela seorang pria kulit hitam yang dituduh melakukan pemerkosaan.\r\n\r\nCerita ini mengangkat tema-tema penting seperti rasisme, keadilan, dan pembentukan karakter. Melalui sudut pandang Scout yang naif, pembaca diajak melihat ketidakadilan yang terjadi di masyarakat Maycomb, serta keberanian Atticus dalam berdiri untuk kebenaran meskipun menghadapi prasangka dan kebencian. Novel ini juga menggambarkan hubungan antara Scout, Jem, dan tetangga mereka, Boo Radley, yang selama bertahun-tahun menjadi objek spekulasi dan ketakutan masyarakat. Dalam perjalanan cerita, Scout dan Jem belajar mengenai kebaikan hati, empati, dan pentingnya memahami perspektif orang lain. To Kill a Mockingbird menawarkan pesan yang kuat tentang pentingnya melawan ketidakadilan dan mempertahankan nilai-nilai kemanusiaan, serta membangun masyarakat yang lebih adil.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/To_Kill_a_Mockingbird_%28first_edition_cover%29.jpg/1200px-To_Kill_a_Mockingbird_%28first_edition_cover%29.jpg'),
('3', '1984', 'George Orwell', 'Secker & Warburg', '1949-06-08', 'Sebuah novel distopia yang menggambarkan kehidupan di bawah rezim otoriter.', 'https://i0.wp.com/www.printmag.com/wp-content/uploads/2017/01/2a34d8_a6741e88335241308890543d203ad89dmv2.jpg?resize=500%2C815&ssl=1'),
('4', 'Pride and Prejudice', 'Jane Austen', 'T. Egerton, Whitehall', '1813-01-28', 'Sebuah kisah romantis tentang perjuangan dan kesalahpahaman dalam mencari cinta sejati.', 'https://m.media-amazon.com/images/I/71Q1tPupKjL._AC_UF1000,1000_QL80_.jpg'),
('5', 'The Great Gatsby', 'F. Scott Fitzgerald', 'Charles Scribner\'s Sons', '1925-04-10', 'Novel yang menggambarkan kehidupan mewah dan ambisi di era Roaring Twenties di Amerika Serikat.', 'https://upload.wikimedia.org/wikipedia/commons/7/7a/The_Great_Gatsby_Cover_1925_Retouched.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idpeminjaman` varchar(20) NOT NULL,
  `idbuku` varchar(20) NOT NULL,
  `judulbuku` varchar(50) NOT NULL,
  `namapeminjam` varchar(30) NOT NULL,
  `alamatpeminjam` varchar(50) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idpeminjaman`, `idbuku`, `judulbuku`, `namapeminjam`, `alamatpeminjam`, `tglpinjam`, `tglkembali`) VALUES
('202307102139', '5', 'The Great Gatsby', 'Marsa', 'Surabaya', '2023-07-11', '2023-07-31'),
('202307102158', '2', 'To Kill a Mockingbird', 'qwe', 'qwe', '2023-07-11', '2023-07-13'),
('202307110129', '4', 'Pride and Prejudice', 'Haris', 'Sidoarjo', '2023-07-13', '2023-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `Password`) VALUES
(5, 'qwe', 'qwe', '123'),
(6, 'asd', 'asd', '321'),
(7, 'Egalingga', 'ehling@gmail.com', 'asd123'),
(8, 'Marsa Kristian', 'Marsa@gmail.com', '12345'),
(9, 'qwe', 'asd', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idpeminjaman`),
  ADD KEY `idbuku` (`idbuku`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
