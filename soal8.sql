-- Buat database
CREATE DATABASE IF NOT EXISTS perusahaan;

-- Pilih database yang akan digunakan
USE perusahaan;

-- Buat tabel karyawan
CREATE TABLE IF NOT EXISTS karyawan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_karyawan VARCHAR(255),
    nama_departemen VARCHAR(255)
);

-- Sisipkan data ke dalam tabel karyawan
INSERT INTO karyawan (nama_karyawan, nama_departemen) VALUES
('Andi', 'Sales'),
('Adi', 'Sales'),
('Bryan', 'Sales'),
('Aan', 'Purchasing'),
('Arjuna', 'Purchasing'),
('Amir', 'HR'),
('Budi', 'HR'),
('Bashar', 'HR');
