<!-- Soal 1 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid #333;
        }

        th,
        td {
            border: 2px solid #333;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <title>Table Example</title>
</head>

<body>
    <center>
        <h2>Soal 1</h2>
    </center>

    <table>
        <tr>
            <th>Title 1</th>
            <th>Title 2</th>
        </tr>
        <tr>
            <td>Value 1.1</td>
            <td>Value 1.2</td>
        </tr>
        <tr>
            <td>Value 2.1</td>
            <td>Value 2.2</td>
        </tr>
    </table>

</body>

</html>

<!-- Soal 2 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .box {
            width: 250px;
            height: 120px;
            margin: 20px;
            display: inline-block;
        }

        .box1 {
            background-color: #3498db;
            /* Warna biru */
        }

        .box2 {
            background-color: #e74c3c;
            /* Warna merah */
        }
    </style>

</head>

<body>
    <center>
        <h2>Soal 2</h2>
    </center>
    <center>
        <div class="box box1"></div>
        <div class="box box2"></div>
    </center>
</body>

</html>

<!-- Soal 3 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <center>
        <h2>Soal 3</h2>
    </center>

    <center><?php

            $number = 6;

            if ($number % 2 === 0) {
                echo $number . ' "Even"';
            } elseif ($number % 2 !== 0) {
                echo $number . ' "Odds"';
            } else {
                echo $number . ' Masukan Angka';
            }

            ?></center>
</body>

</html>


<!-- soal 4 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <center>
        <h2>Soal 4</h2>
    </center>

    <center><?php
            $nomorHari = 0;
            switch ($nomorHari) {
                case 0:
                    $hari = "Sunday";
                    break;
                case 1:
                    $hari = "Monday";
                    break;
                case 2:
                    $hari = "Tuesday";
                    break;
                case 3:
                    $hari = "Wednesday";
                    break;
                case 4:
                    $hari = "Thursday ";
                    break;
                case 5:
                    $hari = "Friday ";
                    break;
                case 6:
                    $hari = "Saturday ";
                    break;
                default:
                    $hari = "Hari tidak valid";
            }

            echo "Nomor Hari: $nomorHari<br>";
            echo "Nama Hari: $hari";

            ?></center>

</body>

</html>

<!-- Soal 5 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <center>
        <h2> Soal 5</h2>
    </center>

    <center><?php

            for ($i = 1; $i <= 10; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo '* ';
                }
                echo "<br>";
            }
            ?></center>
</body>

</html>

<!-- Soal 6 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <center>
        <h2> Soal 6</h2>
    </center>
    <center> <?php

                function isPrime($number)
                {
                    if ($number < 2) {
                        return false;
                    }


                    for ($i = 2; $i <= sqrt($number); $i++) {
                        if ($number % $i == 0) {
                            return false;
                        }
                    }

                    return true;
                }

                function generatePrimes($limit)
                {
                    $primes = array();

                    for ($i = 2; $i <= $limit; $i++) {
                        if (isPrime($i)) {
                            $primes[] = $i;
                        }
                    }

                    return $primes;
                }


                $prima = 300;
                $bilanganPrima = generatePrimes($prima);

                echo "Bilangan prima antara 1 dan $prima adalah: " . implode(', ', $bilanganPrima);

                ?></center>

</body>

</html>

<!-- Soal 7 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <center>
        <h2>Soal 7</h2>
    </center><br>
    <center> <?php


                class Bentuk
                {

                    protected $ukuran;


                    public function __construct($ukuran)
                    {
                        $this->ukuran = $ukuran;
                    }


                    public function segitiga()
                    {
                        for ($i = 1; $i <= $this->ukuran; $i++) {
                            for ($j = 1; $j <= $i; $j++) {
                                echo "* ";
                            }
                            echo "<br>";
                        }
                    }
                }


                class BentukDua extends Bentuk
                {

                    public function kotak()
                    {
                        for ($i = 1; $i <= $this->ukuran; $i++) {
                            for ($j = 1; $j <= $this->ukuran; $j++) {
                                echo "* ";
                            }
                            echo "<br>";
                        }
                    }
                }


                $ukuranSegitiga = 5;
                $bentukSegitiga = new Bentuk($ukuranSegitiga);
                echo "Segitiga:<br>";
                $bentukSegitiga->segitiga();

                echo "<br>";

                $ukuranKotak = 5;
                $bentukKotak = new BentukDua($ukuranKotak);
                echo "Kotak:<br>";
                $bentukKotak->kotak();
                ?></center>

    <!-- Soal 8 -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            /* Menambahkan gaya CSS untuk tata letak */
            .container {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            /* Menambahkan margin agar tidak terlalu rapat */
            img {
                margin-right: 40px;
            }
        </style>
    </head>

    <body>
        <h2> soal 8</h2>
        <div class="container">
            <!-- Gambar di sebelah kiri -->
            <img src="foto/soal 8.png" alt="Deskripsi gambar">

            <!-- Keterangan di sebelah kanan -->
            <div>

                <p>
                    -- Buat databasebr  <br>
                    CREATE DATABASE IF NOT EXISTS perusahaan;<br>

                    -- Pilih database yang akan digunakan<br>
                    USE perusahaan;<br>

                    -- Buat tabel karyawan<br>
                    CREATE TABLE IF NOT EXISTS karyawan (<br>
                    id INT AUTO_INCREMENT PRIMARY KEY,<br>
                    nama_karyawan VARCHAR(255),<br>
                    nama_departemen VARCHAR(255)<br>
                    );<br>

                    -- Sisipkan data ke dalam tabel karyawan<br>
                    INSERT INTO karyawan (nama_karyawan, nama_departemen) VALUES<br>
                    ('Andi', 'Sales'),<br>
                    ('Adi', 'Sales'),<br>
                    ('Bryan', 'Sales'),<br>
                    ('Aan', 'Purchasing'),<br>
                    ('Arjuna', 'Purchasing'),<br>
                    ('Amir', 'HR'),<br>
                    ('Budi', 'HR'),<br>
                    ('Bashar', 'HR');


                </p>
            </div>
        </div>

    </body>

    </html>

    <!-- Soal 9 -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            /* Menambahkan gaya CSS untuk tata letak */
            .container {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            /* Menambahkan margin agar tidak terlalu rapat */
            img {
                margin-right: 40px;
            }
        </style>
    </head>

    <body>
        <h2> soal 9</h2>
        <div class="container">
            <!-- Gambar di sebelah kiri -->
            <img src="foto/soal 9.png" alt="Deskripsi gambar">

            <!-- Keterangan di sebelah kanan -->
            <div>

                <p>
                    -- Buat database <br>
                    CREATE DATABASE IF NOT EXISTS perusahaan;<br>

                    -- Pilih database yang akan digunakan<br>
                    USE perusahaan;<br>

                    -- Buat tabel departemen<br>
                    CREATE TABLE IF NOT EXISTS departemen (<br>
                    id INT AUTO_INCREMENT PRIMARY KEY,<br>
                    nama_departemen VARCHAR(255)<br>
                    );<br>

                    -- Sisipkan data ke dalam tabel departemen<br>
                    INSERT INTO departemen (nama_departemen) VALUES<br>
                    ('Sales'),<br>
                    ('Purchasing'),<br>
                    ('HR');<br>

                    -- Buat tabel karyawan<br>
                    CREATE TABLE IF NOT EXISTS karyawan (<br>
                    id INT AUTO_INCREMENT PRIMARY KEY,<br>
                    nama_karyawan VARCHAR(255),<br>
                    id_departemen INT,<br>
                    FOREIGN KEY (id_departemen) REFERENCES departemen(id)<br>
                    );<br>

                    -- Sisipkan data ke dalam tabel karyawan<br>
                    INSERT INTO karyawan (nama_karyawan, id_departemen) VALUES<br>
                    ('Andi', 1),<br>
                    ('Adi', 1),<br>
                    ('Bryan', 1),<br>
                    ('Aan', 2),<br>
                    ('Arjuna', 2),<br>
                    ('Amir', 3),<br>
                    ('Budi', 3),<br>
                    ('Bashar', 3);<br>

                    -- Update nama_karyawan sesuai dengan relasi antara tabel karyawan dan tabel departemen<br>
                    UPDATE karyawan<br>
                    SET nama_karyawan = CONCAT(nama_karyawan, '_', (SELECT nama_departemen FROM departemen WHERE departemen.id = karyawan.id_departemen));<br>

                    -- Tampilkan hasil update<br>
                    SELECT * FROM karyawan;

                </p>
            </div>
        </div>

    </body>

    </html>

    <!-- Soal 10 -->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            /* Menambahkan gaya CSS untuk tata letak */
            .container {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            /* Menambahkan margin agar tidak terlalu rapat */
            img {
                margin-right: 40px;
            }
        </style>
    </head>

    <body>
        <h2> soal 10</h2>
        <div class="container">
            <!-- Gambar di sebelah kiri -->
            <img src="foto/soal 10.png" alt="Deskripsi gambar">

            <!-- Keterangan di sebelah kanan -->
            <div>

                <p>
                    CREATE TABLE `departemen` ( <br>
                    `id` int(11) NOT NULL,<br>
                    `nama_departemen` varchar(255) DEFAULT NULL,<br>
                    `jumlah_karyawan` int(11) NOT NULL<br>
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;<br>


                    INSERT INTO `departemen` (`id`, `nama_departemen`, `jumlah_karyawan`) VALUES<br>
                    (1, 'Sales', 3),<br>
                    (2, 'Purchasing', 2),<br>
                    (3, 'HR', 3);<br>


                    ALTER TABLE `departemen`<br>
                    ADD PRIMARY KEY (`id`);<br>


                    ALTER TABLE `departemen`<br>
                    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;<br>
                    COMMIT;<br>
                </p>
            </div>
        </div>

    </body>

    </html>