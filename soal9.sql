-- Buat database
CREATE DATABASE IF NOT EXISTS perusahaan;

-- Pilih database yang akan digunakan
USE perusahaan;

-- Buat tabel departemen
CREATE TABLE IF NOT EXISTS departemen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_departemen VARCHAR(255)
);

-- Sisipkan data ke dalam tabel departemen
INSERT INTO departemen (nama_departemen) VALUES
('Sales'),
('Purchasing'),
('HR');

-- Buat tabel karyawan
CREATE TABLE IF NOT EXISTS karyawan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_karyawan VARCHAR(255),
    id_departemen INT,
    FOREIGN KEY (id_departemen) REFERENCES departemen(id)
);

-- Sisipkan data ke dalam tabel karyawan
INSERT INTO karyawan (nama_karyawan, id_departemen) VALUES
('Andi', 1),
('Adi', 1),
('Bryan', 1),
('Aan', 2),
('Arjuna', 2),
('Amir', 3),
('Budi', 3),
('Bashar', 3);

-- Update nama_karyawan sesuai dengan relasi antara tabel karyawan dan tabel departemen
UPDATE karyawan
SET nama_karyawan = CONCAT(nama_karyawan, '_', (SELECT nama_departemen FROM departemen WHERE departemen.id = karyawan.id_departemen));

-- Tampilkan hasil update
SELECT * FROM karyawan;
