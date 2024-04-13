<!-- Praktikum Bagian 8. Membuat Session
Buat file baru dengan nama sessionCall.php di dalam direktori praktik_php, kemudian ketikkan kode berikut:-->

<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>
<?php
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>
</body>
</html>
