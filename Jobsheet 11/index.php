<!-- Praktikum 1. Struktur Folder dan File Paling Atas
Buatlah beberapa folder dengan ketentuan admin, template, assets, config, dan fungsi. Kemudian buat file baru dengan nama index.php.
Ketikkan ke dalam file index.php tersebut kode di bawah ini.
-->

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!empty($_SESSION['level'])) {
    require 'config/koneksi.php';
    require 'fungsi/pesan_kilat.php';

    include 'admin/template/header.php';
    if (!empty($_GET['page'])) {
        include 'admin/module/' . $_GET['page'] . '/index.php';
    } else {
        include 'admin/template/home.php';
    }

    include 'admin/template/footer.php';
} else {
    header("Location: login.php");
}
?>

