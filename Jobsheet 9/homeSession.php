<!-- Praktikum Bagian 10. Penerapan Session pada Fitur Login
Buat file baru dengan nama homeSession.php di dalam direktori praktik_php, kemudian ketikkan kode berikut:-->

<html>
<head>
</head>
<body>
<?php
session_start();

if ($_SESSION['status'] == 'login') {
    echo "Selamat datang " . $_SESSION['username'];
    ?>
    <br> <a href="sessionLogout.php">Log Out</a>
    <?php
} else {
    echo "Anda belum login. Silahkan ";
    ?>
    <a href="sessionLoginForm.html">Log In</a>
    <?php
}
?>
</body>
</html>
