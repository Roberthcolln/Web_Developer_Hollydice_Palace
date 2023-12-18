
CREATE TABLE `departemen` (
  `id` int(11) NOT NULL,
  `nama_departemen` varchar(255) DEFAULT NULL,
  `jumlah_karyawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `departemen` (`id`, `nama_departemen`, `jumlah_karyawan`) VALUES
(1, 'Sales', 3),
(2, 'Purchasing', 2),
(3, 'HR', 3);


ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `departemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
