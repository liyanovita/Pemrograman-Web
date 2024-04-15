<!-- Praktikum 1. Struktur Folder dan File Paling Atas
Berikutnya buat file baru yaitu logout.php dan ketikan kode di bawah ini. 
-->

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    session_destroy();
    header('location: index.php');
}
?>