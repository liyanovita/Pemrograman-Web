<!-- Praktikum Bagian 3. FUNGSI -->
<!-- Buat file baru dengan nama fungsi.php di dalam direktori praktik_php, kemudian ketikkan kode berikut: -->
<!-- SOAL NO 3 -->

<?php

//function perkenalan(){
  //  echo "Assalamualaikum, ";
   // echo "Perkenalkan, nama saya Liya<br/>"; //Tulis sesuai nama 
   // echo "Senang berkenalan dengan Anda<br/>";

//}
//memanggil fungsi yang sudah dibuat
//perkenalan();
//perkenalan();

//Fungsi dengan parameter
//SOAL NO 5

//membuat fungsi
//function perkenalan($nama, $salam){
  //  echo $salam.", ";
   // echo "Perkenalkan, nama saya ".$nama."<br/>";
   // echo "Senang berkenalan dengan Anda<br/>";
//}
//memanggil fungsi yang sudah dibuat
//perkenalan("Hamdana","Hallo");

//echo "<hr>";

//$saya = "Liya";
//$ucapanSalam = "Selamat pagi";

//memanggil lagi
//perkenalan ($saya, $ucapanSalam) ;

//parameter dengan nilai default
//soal no 6

//membuat fungsi
//function perkenalan($nama, $salam="Assalamualaikum") {
  //  echo $salam.", ";
    //echo "Perkenalkan, nama saya ".$nama."<br/>";
    //echo "Senang berkenalan dengan Anda<br/>";
//}
//memanggil fungsi yang sudah dibuat
//perkenalan("Hamdana","Hallo");

//echo "<hr>";

//$saya = "Liya";
//$ucapanSalam = "Selamat pagi";

//memanggil lagi tanpa mengisi parameter salam
//perkenalan($saya);

//fungsi yg mengembalikan nilai
//soal no 7

//membuat fungsi
//function hitungUmur($thn_lahir, $thn_sekarang){
  //  $umur = $thn_sekarang - $thn_lahir;
   // return $umur;
//}
//echo "Umur saya adalah ". hitungUmur(2003, 2024) ." tahun" //isi sesuai dengan tahun lahir kalian

//memanggil fungsi di dalam fungsi
//soal no 8
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam = "Assalamualaikum")
{
    echo $salam . ",";
    echo " Perkenalkan, nama saya " . $nama . "<br/>";

    //memanggil fungsi lain
    echo "Saya berusia " . hitungUmur(2003, 2024) . " tahun<br/>";
}

//memanggil fungsi perkenalan
    perkenalan("Liya");

?>