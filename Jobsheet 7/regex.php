<!-- PRAKTIKUM 5 - Penggunaan Regex Pada PHP
Membuat file baru dengan nama regex.php
soal no 5.1
 -->
<?php
$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
$text = 'This is a Sample Text. ';
if (preg_match($pattern, $text) ) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}
 echo "<br><br>";
 //soal no 5.2
//ketikkan kode tambahan
$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples. ';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
echo "<br><br>";
//soal no 5.3
//ketikkan kode tambahan
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie. ';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; // Output: "I like banana pie."

echo "<br><br>";
//soal no 5.4
//ketikkan kode tambahan
$pattern = '/go*d/'; // Cocokkan "god", "good", "gooood", dll.
$text = 'god is good. ';
if (preg_match($pattern, $text, $matches) ) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br><br>";
//soal no 5.5
//Membuat script dengan variable pattern yang di ubah menggunakan `?` (0 atau 1 kali). 
$pattern = '/go?d/'; // Cocokkan "god", "good"
$text = 'god is good. ';
if (preg_match($pattern, $text, $matches) ) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br><br>";
//soal no 5.6
//Membuat script dengan variable pattern yang di ubah menggunakan `{n,m}` 
$pattern = '/go{0,1}d/'; // Cocokkan "god", "good"
$text = 'god is good. ';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

?>