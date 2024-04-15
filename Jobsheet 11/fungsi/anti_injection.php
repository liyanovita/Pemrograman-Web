<!-- Praktikum 2. Folder Fungsi
Buat satu folder baru dengan nama fungsi dan file baru bernama anti_injection.php. Ketikkan kode seperti di bawah ini.
-->

<?php
function antiinjection($koneksi, $data)
{
    $filter_sql = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
    return $filter_sql;
}
?>
