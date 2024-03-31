<!-- PRAKTIKUM 1 Indexed Array -->
<!-- Buat file baru dengan nama array_1.php di dalam direktori praktik_php, kemudian ketikkan kode berikut: -->

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Array Terindeks</h2>
<?php
    $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

    //echo $Listdosen [2] . "<br>";
    //echo $Listdosen [0] . "<br>";
    //echo $Listdosen [1] . "<br>";

    //SOAL NO 1
     // Menampilkan isi array menggunakan foreach
     foreach ($Listdosen as $dosen) {
        echo $dosen . "<br>";
    }

?>
</body>
</html>