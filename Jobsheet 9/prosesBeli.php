<!-- Praktikum Bagian 7. Penerapan Cookies pada Fitur Keranjang Belanja
Buat file baru dengan nama prosesBeli.php di dalam direktori praktik_php, kemudian ketikkan kode berikut:-->

<?php
if (isset($_POST["beliNovel"]) && isset($_POST["beliBuku"])) {
    setcookie("beliNovel", $_POST["beliNovel"]);
    setcookie("beliBuku", $_POST["beliBuku"]);
    header("Location: keranjangBelanja.php");
}
?>
