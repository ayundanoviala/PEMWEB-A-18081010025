-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Okt 2020 pada 15.48
-- Versi server: 5.7.26
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `Data`
--

CREATE TABLE `Data` (
  `idData` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tgl_lahir` varchar(45) DEFAULT NULL,
  `npm` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indeks untuk tabel `Data`
--
ALTER TABLE `Data`
  ADD PRIMARY KEY (`idData`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `Data`
--
ALTER TABLE `Data`
  MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
