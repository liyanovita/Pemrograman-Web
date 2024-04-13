<!-- Praktikum Bagian 6. Menghapus Nilai Cookies
Buat file baru dengan nama cookiesDel.php di dalam direktori praktik_php, kemudian ketikkan kode berikut:-->

<?php
    setcookie("user", "Polinema", time()-3600);
?>