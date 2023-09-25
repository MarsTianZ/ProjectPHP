
--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kodebr`);

--
-- Indeks untuk tabel `detailpermintaan`
--
ALTER TABLE `detailpermintaan`
  ADD PRIMARY KEY (`kodeper`,`kodebr`);

--
-- Indeks untuk tabel `masterpermintaan`
--
ALTER TABLE `masterpermintaan`
  ADD PRIMARY KEY (`kodeper`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
