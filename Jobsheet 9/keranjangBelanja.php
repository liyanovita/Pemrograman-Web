<!-- Praktikum Bagian 7. Penerapan Cookies pada Fitur Keranjang Belanja
Buat file baru dengan nama keranjangBelanja.php di dalam direktori praktik_php, kemudian ketikkan kode berikut:-->
<html>
<head>
</head>
<body>
<h2> Keranjang Belanja </h2>

<?php
$beliNovel = $_COOKIE['beliNovel'];
$beliBuku = $_COOKIE['beliBuku'];

echo "Jumlah Novel: " . $beliNovel . "<br>";
echo "Jumlah Buku: " . $beliBuku;
?>
</body>
</html>
