<?php

//SOAL NO 11
//Membuat file string3.php dan mengetikkan program
//$pesan = "Saya arek malang";
//echo strrev($pesan) . "<br>";

//SOAL NO 12
$pesan = "Saya arek malang";
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn ($pesan) => strrev($pesan), $pesanPerKata);
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
