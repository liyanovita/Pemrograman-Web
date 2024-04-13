<!-- Praktikum 6. Tampilan CRUD dengan Ajax
Buat file auth.php untuk membuat otentifikasinya dan untuk keamananya. Isikan dengan kode dibawah -->

<?php
//Membuat Token Keamanan Ajax Request (Csrf Token)
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>