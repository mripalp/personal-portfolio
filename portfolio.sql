-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 13 Bulan Mei 2024 pada 06.37
-- Versi server: 10.11.3-MariaDB-log
-- Versi PHP: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` int(10) NOT NULL,
  `name` char(40) NOT NULL,
  `about` text NOT NULL,
  `skills` char(255) NOT NULL,
  `phone` varchar(17) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `name`, `about`, `skills`, `phone`, `email`) VALUES
(1, 'Mohamad Ripal Perdiansyah', 'I\'m currently a 3rd-year Informatics Engineering student at Muhammadiyah University of Sukabumi who is passionate about web developer, cloud database, and networking. I am a person who really likes new things and feels challenged about it. I really enjoy exploring and seeking knowledge in the world of computers, gadgets and programming, that\'s the reason I choose to study Informatics Engineering. Therefore, I will continue to expand my portfolio and experience.', 'tesssss', '+62 813 2063 3531', 'mohamadripal001@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `description` char(255) NOT NULL,
  `filename` char(25) NOT NULL,
  `link_site` char(50) NOT NULL,
  `link_github` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `filename`, `link_site`, `link_github`) VALUES
(1, 'Radar Resto', 'Radar Resto is a website that provide data of recommended restaurant. In this website user can find recommended restaurant, add restaurant to favorite, post and see review from other user, and many more.', 'radar-resto-project', 'https://radar-resto.netlify.app/', 'https://github.com/mripalp/katalog-restoran-v1'),
(2, 'NyokLapor', 'NyokLapor is an online platform enabling users to report various community issues such as potholes, garbage piles, and other environmental concerns. Users can easily create detailed reports, including descriptions and photo evidence.', 'nyok-lapor-project', 'https://nyoklapor.netlify.app/', 'https://github.com/mripalp/nyoklapor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `tools_name` char(60) NOT NULL,
  `percentage` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `skills`
--

INSERT INTO `skills` (`id`, `tools_name`, `percentage`) VALUES
(1, 'Javascript', 100),
(2, 'HTML', 100),
(3, 'React', 70),
(4, 'PHP', 40);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
