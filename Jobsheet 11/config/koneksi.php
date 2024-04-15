<!-- Praktikum 1. Struktur Folder dan File Paling Atas
Berikutnya buat folder baru yaitu config dan file baru yaitu koneksi.php dan ketikan kode di bawah ini.
-->


<?php
date_default_timezone_set("Asia/Jakarta");
$koneksi = mysqli_connect("localhost","root","", "prakwebdb");
if (mysqli_connect_errno()) {
    die("koneksi database gagal: ". mysqli_connect_error());
}    
?>