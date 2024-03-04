<?php

//Mengetikkan kode di file struktur_kontrol.php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

//menambahkan kode 
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";

//Menambahkan kode untuk menghitung jumlah buah yang akan di panen
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "<br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

//Menambahkan kode untuk menghitung total skor ujian
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "<br>";
echo "Total skor ujian adalah: $totalSkor";

//Menambahkan kode untuk menghitung nilai
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br><br>";


// Daftar nilai siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Mengurutkan nilai dari terendah ke tertinggi
sort($nilaiSiswa);

// Menghitung total nilai
$totalNilai = 0;
for ($i = 2; $i < count($nilaiSiswa) - 2; $i++) {
  $totalNilai += $nilaiSiswa[$i];
}

// Menghitung rata-rata nilai
$rataRata = $totalNilai / (count($nilaiSiswa) - 4);

// Menampilkan hasil
echo "Total nilai yang digunakan: " . $totalNilai . "\n";
echo "Rata-rata nilai: " . $rataRata . "\n";

?>

