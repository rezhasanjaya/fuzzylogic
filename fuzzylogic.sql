-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2023 pada 05.47
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuzzylogic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hdp`
--

CREATE TABLE `hdp` (
  `id_predic` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `ageDewasa` float DEFAULT NULL,
  `ageLansia` float DEFAULT NULL,
  `ageManula` float DEFAULT NULL,
  `cholesterol` int(11) NOT NULL,
  `cholesterolRendah` float DEFAULT NULL,
  `cholesterolSedang` float DEFAULT NULL,
  `cholesterolTinggi` float DEFAULT NULL,
  `st_dep` float NOT NULL,
  `stdRendah` float DEFAULT NULL,
  `stdSedang` float DEFAULT NULL,
  `stdTinggi` float DEFAULT NULL,
  `rules` text DEFAULT NULL,
  `predic_dec` float DEFAULT NULL,
  `predic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hdp`
--

INSERT INTO `hdp` (`id_predic`, `age`, `ageDewasa`, `ageLansia`, `ageManula`, `cholesterol`, `cholesterolRendah`, `cholesterolSedang`, `cholesterolTinggi`, `st_dep`, `stdRendah`, `stdSedang`, `stdTinggi`, `rules`, `predic_dec`, `predic`) VALUES
(208, 70, 0, 0.318182, 0.681818, 322, 0, 0.758621, 0.241379, 2.4, 0, 0.8, 0.2, '[{\"Rule\":14,\"Hasil\":\"absence\",\"Alpha\":0.3181818181818182,\"Z\":0.3181818181818182},{\"Rule\":15,\"Hasil\":\"presence\",\"Alpha\":0.19999999999999996,\"Z\":0.8},{\"Rule\":17,\"Hasil\":\"presence\",\"Alpha\":0.2413793103448276,\"Z\":0.7586206896551724},{\"Rule\":18,\"Hasil\":\"presence\",\"Alpha\":0.19999999999999996,\"Z\":0.8},{\"Rule\":23,\"Hasil\":\"presence\",\"Alpha\":0.6818181818181818,\"Z\":0.31818181818181823},{\"Rule\":24,\"Hasil\":\"presence\",\"Alpha\":0.19999999999999996,\"Z\":0.8},{\"Rule\":26,\"Hasil\":\"presence\",\"Alpha\":0.2413793103448276,\"Z\":0.7586206896551724},{\"Rule\":27,\"Hasil\":\"presence\",\"Alpha\":0.19999999999999996,\"Z\":0.8}]', 0.580181, 'Presence'),
(209, 67, 0, 0.454545, 0.545455, 564, 0, NULL, 1, 2, 0, 1, 0, '[{\"Rule\":17,\"Hasil\":\"presence\",\"Alpha\":0.45454545454545453,\"Z\":0.5454545454545454},{\"Rule\":26,\"Hasil\":\"presence\",\"Alpha\":0.5454545454545454,\"Z\":0.4545454545454546}]', 0.495868, 'Absence'),
(210, 57, 0, 0.909091, 0.0909091, 261, 0, 0.949843, 0.0501567, 0.3, 0.85, 0.15, 0, '[{\"Rule\":13,\"Hasil\":\"absence\",\"Alpha\":0.85,\"Z\":0.85},{\"Rule\":14,\"Hasil\":\"absence\",\"Alpha\":0.15,\"Z\":0.15},{\"Rule\":16,\"Hasil\":\"absence\",\"Alpha\":0.050156739811912224,\"Z\":0.050156739811912224},{\"Rule\":17,\"Hasil\":\"presence\",\"Alpha\":0.050156739811912224,\"Z\":0.9498432601880877},{\"Rule\":22,\"Hasil\":\"absence\",\"Alpha\":0.09090909090909091,\"Z\":0.09090909090909091},{\"Rule\":23,\"Hasil\":\"presence\",\"Alpha\":0.09090909090909091,\"Z\":0.9090909090909091},{\"Rule\":25,\"Hasil\":\"absence\",\"Alpha\":0.050156739811912224,\"Z\":0.050156739811912224},{\"Rule\":26,\"Hasil\":\"presence\",\"Alpha\":0.050156739811912224,\"Z\":0.9498432601880877}]', 0.677222, 'Presence'),
(212, 64, 0, 0.590909, 0.409091, 263, 0, 0.943574, 0.0564263, 0.2, 0.9, 0.1, 0, '[{\"Rule\":13,\"Hasil\":\"absence\",\"Alpha\":0.5909090909090909,\"Z\":0.5909090909090909},{\"Rule\":14,\"Hasil\":\"absence\",\"Alpha\":0.1,\"Z\":0.1},{\"Rule\":16,\"Hasil\":\"absence\",\"Alpha\":0.05642633228840126,\"Z\":0.05642633228840126},{\"Rule\":17,\"Hasil\":\"presence\",\"Alpha\":0.05642633228840126,\"Z\":0.9435736677115988},{\"Rule\":22,\"Hasil\":\"absence\",\"Alpha\":0.4090909090909091,\"Z\":0.4090909090909091},{\"Rule\":23,\"Hasil\":\"presence\",\"Alpha\":0.1,\"Z\":0.9},{\"Rule\":25,\"Hasil\":\"absence\",\"Alpha\":0.05642633228840126,\"Z\":0.05642633228840126},{\"Rule\":26,\"Hasil\":\"presence\",\"Alpha\":0.05642633228840126,\"Z\":0.9435736677115988}]', 0.511594, 'Presence'),
(213, 74, 0, 0.136364, 0.863636, 269, 0, 0.924765, 0.0752351, 0.2, 0.9, 0.1, 0, '[{\"Rule\":13,\"Hasil\":\"absence\",\"Alpha\":0.13636363636363635,\"Z\":0.13636363636363635},{\"Rule\":14,\"Hasil\":\"absence\",\"Alpha\":0.1,\"Z\":0.1},{\"Rule\":16,\"Hasil\":\"absence\",\"Alpha\":0.07523510971786834,\"Z\":0.07523510971786834},{\"Rule\":17,\"Hasil\":\"presence\",\"Alpha\":0.07523510971786834,\"Z\":0.9247648902821317},{\"Rule\":22,\"Hasil\":\"absence\",\"Alpha\":0.8636363636363636,\"Z\":0.8636363636363636},{\"Rule\":23,\"Hasil\":\"presence\",\"Alpha\":0.1,\"Z\":0.9},{\"Rule\":25,\"Hasil\":\"absence\",\"Alpha\":0.07523510971786834,\"Z\":0.07523510971786834},{\"Rule\":26,\"Hasil\":\"presence\",\"Alpha\":0.07523510971786834,\"Z\":0.9247648902821317}]', 0.676198, 'Presence'),
(214, 65, 0, 0.545455, 0.454545, 177, 0.571429, 0.428571, 0, 0.4, 0.8, 0.2, 0, '[{\"Rule\":10,\"Hasil\":\"absence\",\"Alpha\":0.5454545454545454,\"Z\":0.5454545454545454},{\"Rule\":11,\"Hasil\":\"absence\",\"Alpha\":0.2,\"Z\":0.2},{\"Rule\":13,\"Hasil\":\"absence\",\"Alpha\":0.42857142857142855,\"Z\":0.42857142857142855},{\"Rule\":14,\"Hasil\":\"absence\",\"Alpha\":0.2,\"Z\":0.2},{\"Rule\":19,\"Hasil\":\"absence\",\"Alpha\":0.45454545454545453,\"Z\":0.45454545454545453},{\"Rule\":20,\"Hasil\":\"absence\",\"Alpha\":0.2,\"Z\":0.2},{\"Rule\":22,\"Hasil\":\"absence\",\"Alpha\":0.42857142857142855,\"Z\":0.42857142857142855},{\"Rule\":23,\"Hasil\":\"presence\",\"Alpha\":0.2,\"Z\":0.8}]', 0.433352, 'Absence'),
(215, 56, 0, 0.954545, 0.0454545, 256, 0, 0.965517, 0.0344828, 0.6, 0.7, 0.3, 0, '[{\"Rule\":13,\"Hasil\":\"absence\",\"Alpha\":0.7,\"Z\":0.7},{\"Rule\":14,\"Hasil\":\"absence\",\"Alpha\":0.3,\"Z\":0.3},{\"Rule\":16,\"Hasil\":\"absence\",\"Alpha\":0.034482758620689655,\"Z\":0.034482758620689655},{\"Rule\":17,\"Hasil\":\"presence\",\"Alpha\":0.034482758620689655,\"Z\":0.9655172413793104},{\"Rule\":22,\"Hasil\":\"absence\",\"Alpha\":0.045454545454545456,\"Z\":0.045454545454545456},{\"Rule\":23,\"Hasil\":\"presence\",\"Alpha\":0.045454545454545456,\"Z\":0.9545454545454546},{\"Rule\":25,\"Hasil\":\"absence\",\"Alpha\":0.034482758620689655,\"Z\":0.034482758620689655},{\"Rule\":26,\"Hasil\":\"presence\",\"Alpha\":0.034482758620689655,\"Z\":0.9655172413793104}]', 0.565102, 'Presence'),
(216, 59, 0, 0.818182, 0.181818, 239, 0.0504202, 0.94958, 0, 1.2, 0.4, 0.6, 0, '[{\"Rule\":10,\"Hasil\":\"absence\",\"Alpha\":0.05042016806722689,\"Z\":0.05042016806722689},{\"Rule\":11,\"Hasil\":\"absence\",\"Alpha\":0.05042016806722689,\"Z\":0.05042016806722689},{\"Rule\":13,\"Hasil\":\"absence\",\"Alpha\":0.4,\"Z\":0.4},{\"Rule\":14,\"Hasil\":\"absence\",\"Alpha\":0.6,\"Z\":0.6},{\"Rule\":19,\"Hasil\":\"absence\",\"Alpha\":0.05042016806722689,\"Z\":0.05042016806722689},{\"Rule\":20,\"Hasil\":\"absence\",\"Alpha\":0.05042016806722689,\"Z\":0.05042016806722689},{\"Rule\":22,\"Hasil\":\"absence\",\"Alpha\":0.18181818181818182,\"Z\":0.18181818181818182},{\"Rule\":23,\"Hasil\":\"presence\",\"Alpha\":0.18181818181818182,\"Z\":0.8181818181818181}]', 0.454852, 'Absence'),
(219, 60, 0, 0.772727, 0.227273, 293, 0, 0.84953, 0.15047, 1.2, 0.4, 0.6, 0, '[{\"Rule\":13,\"Hasil\":\"absence\",\"Alpha\":0.4,\"Z\":0.4},{\"Rule\":14,\"Hasil\":\"absence\",\"Alpha\":0.6,\"Z\":0.6},{\"Rule\":16,\"Hasil\":\"absence\",\"Alpha\":0.15047021943573669,\"Z\":0.15047021943573669},{\"Rule\":17,\"Hasil\":\"presence\",\"Alpha\":0.15047021943573669,\"Z\":0.8495297805642633},{\"Rule\":22,\"Hasil\":\"absence\",\"Alpha\":0.22727272727272727,\"Z\":0.22727272727272727},{\"Rule\":23,\"Hasil\":\"presence\",\"Alpha\":0.22727272727272727,\"Z\":0.7727272727272727},{\"Rule\":25,\"Hasil\":\"absence\",\"Alpha\":0.15047021943573669,\"Z\":0.15047021943573669},{\"Rule\":26,\"Hasil\":\"presence\",\"Alpha\":0.15047021943573669,\"Z\":0.8495297805642633}]', 0.509726, 'Presence'),
(220, 63, 0, 0.636364, 0.363636, 407, 0, 0.492163, 0.507837, 4, 0, NULL, 1, '[{\"Rule\":15,\"Hasil\":\"presence\",\"Alpha\":0.49216300940438873,\"Z\":0.5078369905956113},{\"Rule\":18,\"Hasil\":\"presence\",\"Alpha\":0.5078369905956113,\"Z\":0.49216300940438873},{\"Rule\":24,\"Hasil\":\"presence\",\"Alpha\":0.36363636363636365,\"Z\":0.6363636363636364},{\"Rule\":27,\"Hasil\":\"presence\",\"Alpha\":0.36363636363636365,\"Z\":0.6363636363636364}]', 0.557345, 'Presence'),
(221, 59, 0, 0.818182, 0.181818, 234, 0.092437, 0.907563, 0, 0.5, 0.75, 0.25, 0, '[{\"Rule\":10,\"Hasil\":\"absence\",\"Alpha\":0.09243697478991597,\"Z\":0.09243697478991597},{\"Rule\":11,\"Hasil\":\"absence\",\"Alpha\":0.09243697478991597,\"Z\":0.09243697478991597},{\"Rule\":13,\"Hasil\":\"absence\",\"Alpha\":0.75,\"Z\":0.75},{\"Rule\":14,\"Hasil\":\"absence\",\"Alpha\":0.25,\"Z\":0.25},{\"Rule\":19,\"Hasil\":\"absence\",\"Alpha\":0.09243697478991597,\"Z\":0.09243697478991597},{\"Rule\":20,\"Hasil\":\"absence\",\"Alpha\":0.09243697478991597,\"Z\":0.09243697478991597},{\"Rule\":22,\"Hasil\":\"absence\",\"Alpha\":0.18181818181818182,\"Z\":0.18181818181818182},{\"Rule\":23,\"Hasil\":\"presence\",\"Alpha\":0.18181818181818182,\"Z\":0.8181818181818181}]', 0.485176, 'Absence');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hdp`
--
ALTER TABLE `hdp`
  ADD PRIMARY KEY (`id_predic`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hdp`
--
ALTER TABLE `hdp`
  MODIFY `id_predic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
