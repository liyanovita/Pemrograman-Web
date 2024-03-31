<?php
//1. Variabel $_SERVER
//Soal No 21
//echo json_encode($_SERVER);

//soal no 22
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

echo "<br><br>";

//2. Variabel $_GET
//soal no 23
$nama = @$_GET['nama']; //tanda @ agar tidak ada peringatan error ketika key-nya kosong
$usia = @$_GET['usia']; //tanda @ agar tidak ada peringatan error ketika key-nya kosong

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";

echo "<br><br>";

//akses kode tersebut dengan http://localhost/dasarWeb/Jobsheet%206/praktik_php/variabel.php?nama=Elok&usia=30

//3. Variabel $_GLOBALS
//SOAL NO 26
//Membuat file baru dan ketikkan kode ini

$x = 75;
$y = 25;

function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
