<!-- Praktikum Bagian 10. Penerapan Session pada Fitur Login
Buat file baru dengan nama sessionLogout.php di dalam direktori praktik_php, kemudian ketikkan kode berikut:-->

<?php
session_start();
session_destroy();

echo "Anda berhasil logout";
?>