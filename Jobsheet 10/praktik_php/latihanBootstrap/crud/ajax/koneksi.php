<!-- Praktikum 6. Tampilan CRUD dengan Ajax
Buat file baru di dalam direktori dasarWeb/crud/ajax, dengan nama koneksi.php.
Ketikkan ke dalam file koneksi.php tersebut kode di bawah ini.
-->

<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS','');
define('DB1', 'praktikumdb');

// Buat Koneksinya
$db1 = new mysqli (HOST, USER, PASS, DB1);