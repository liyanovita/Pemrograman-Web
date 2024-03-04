<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;


/*Lengkapi kode program di atas sehingga bisa menampilkan hasilnya 
dan rapi. Simpan file tersebut, kemudian buka browser dan jalankan 
localhost/dasarWeb/operator.php  Tampilkan di bawah ini  (soal no 3.1) 
Catat di sini apa yang anda amati*/
echo "Hasil Tambah: {$hasilTambah} <br>";
echo "Hasil Kurang: {$hasilKurang} <br>";
echo "Hasil Kali: {$hasilKali} <br>";
echo "Hasil Bagi: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

/*melengkapi kode program di atas sehingga bisa menampilkan hasilnya dan rapi.  */

echo "<br>";
echo "Hasil Sama: {$hasilSama} <br>";
echo "Hasil Tidak Sama: {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil: {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar: {$hasilLebihBesar} <br>";
echo "Sisa Lebih Kecil Sama: {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama: {$hasilLebihBesarSama} <br>";

/*menambahkan kode */
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

/*Melengkapi kode program sehingga bisa menampilkan hasilnya */
echo "<br>";
echo "Hasil And: {$hasilAnd} <br>";
echo "Hasil Or: {$hasilOr} <br>";
echo "Hasil Not A: {$hasilNotA} <br>";
echo "Hasil Not B: {$hasilNotB} <br>";

/*Menambahkan kode baru */
$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

/*Melengkapi kode program sehingga bisa menampilkan hasilnya */
echo "<br>";
echo "Hasil penjumlahan: {$a} <br>";
echo "Hasil pengurangan: {$a} <br>";
echo "Hasil perkalian: {$a} <br>";
echo "Hasil pembagian: {$a} <br>";
echo "Hasil modulus: {$a} <br>";

/*Menambahkan kode */
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

/*Melengkapi kode program sehingga bisa menampilkan hasilnya */
echo "<br>";
echo "Hasil Identik: {$hasilIdentik} <br>";
echo "Hasil Tidak Identik: {$hasilTidakIdentik} <br>";


//SOAL NO 3.6
//deklarasi variabel
$totalKursi = 45;
$kursiTerisi = 28;
// Menghitung kursi kosong
$kursiKosong = $totalKursi - $kursiTerisi;
// Menghitung persentase kursi kosong
$persenKosong = ($kursiKosong / $totalKursi) * 100;
// Menampilkan hasil
echo "<br>";
echo "Jumlah kursi kosong: {$kursiKosong} <br>";
echo "Jumlah kursi Terisi: {$kursiTerisi} <br>";
echo "Persentase kursi kosong : {$persenKosong} % <br>";

?>
