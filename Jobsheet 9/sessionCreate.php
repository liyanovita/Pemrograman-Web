<!-- Praktikum Bagian 8. Membuat Session
Buat file baru dengan nama sessionCreate.php di dalam direktori praktik_php, kemudian ketikkan kode berikut:-->

<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";
            echo "Session variables are set.";
        ?>
    </body>
</html>
