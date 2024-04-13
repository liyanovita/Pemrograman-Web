<!-- JOBSHEET 10(2)
Praktikum 1. CRUD Bagian Read
Ketikkan ke dalam file koneksi.php tersebut kode di bawah ini.-->


<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "praktikumdb");

// Periksa koneksi
if(mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>