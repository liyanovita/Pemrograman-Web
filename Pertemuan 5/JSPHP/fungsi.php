<?php
//soal no 1
//membuat file baru dengan nama fungsi.php
//function perkenalan(){
//  echo "Assalamulikum, ";
// echo "Perkenalan, nama saya Liya<br/>"; //Tulis sesuai nama 
//echo "Senang berkenalan dengan Anda<br/>";
//}

//memanggil fungsi yang sudah dibuat
//perkenalan();
//perkenalan();

//soal no 2
//menambahkan parameter
//membuat fungsi
//function perkenalan($nama, $salam){
//  echo $salam.", ";
//echo "Perkenalkan, nama saya ".$nama. "<br/>";
//echo "Senang berkenalan dengan Anda<br/>";
//}

//memanggil fungsi yang sudah dibuat
//perkenalan("Hamdana", "Hallo");

//echo "<hr>";

//$saya = "Liya";
//$ucapanSalam = "Selamat pagi";

//memanggil lagi
//perkenalan($saya, $ucapanSalam);

//soal no 3
//mengetikkan kode program
//membuat fungsi
//function perkenalan($nama, $salam){
//  echo $salam.", ";
//echo "Perkenalkan, nama saya ".$nama. "<br/>";
//echo "Senang berkenalan dengan Anda<br/>";
//}

//memanggil fungsi yang sudah dibuat
//perkenalan("Hamdana", "Hallo");

//echo "<hr>";

//$saya = "Liya";
//$ucapanSalam = "Selamat pagi";

//memanggil lagi tanpa mengisi parameter salam
//perkenalan($saya);

//SOAL NO 4
//Mengetikkan kode program
//membuat fungsi
//function hitungUmur($thn_lahir, $thn_sekarang){
//  $umur = $thn_sekarang - $thn_lahir;
//return $umur;
//}

//echo "Umur saya adalah ". hitungUmur(2003, 2024) ." tahun"
//isi sesuai dengan tahun lahir

//SOAL NO 5
//membuat fungsi
//mengetikkan kode program
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam = "Assalamualikum")
{
    echo $salam . ",";
    echo " Perkenalkan, nama saya " . $nama . "<br/>";

    //memanggil fungsi lain
    echo "Saya berusia " . hitungUmur(2003, 2024) . " tahun<br/>";
}

//memanggil fungsi perkenalan
perkenalan("Liya");
