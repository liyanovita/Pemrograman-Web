<!-- PRAKTIKUM 1 - MEMBUAT TABEL USER
Menuliskan query untuk membuat tabel user menggunakan fungsi mysqli_query()
soal no 2  -->

<?php
//soal no 3 
// Menuliskan query untuk memasukkan dan ke tabel user menggunakan fungsi mysqli_query() 

    $namaHost = "localhost";
    $username = "root";
    $password = "";
    $database = "praktikumdb";
    try {
        $connect = mysqli_connect($namaHost, $username, $password, $database);
        if ($connect) {
            echo "Koneksi dengan MySQL Berhasil <br>";
        } else {
            echo "Koneksi dengan MySQL Gagal. <br>" . mysqli_connect_error();
        }
        $sql = "INSERT INTO user(id, username, password) VALUES('1', 'admin', '123')";
        if (mysqli_query($connect, $sql)) {
            echo "Table Berhasil Ditambahkan";
        } else {
            throw new Exception("Record Gagal Ditambahkan: " . mysqli_error($connect));
        }
        mysqli_close( $connect );
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>


