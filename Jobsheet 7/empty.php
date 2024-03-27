<!-- PRAKTIKUM 2 Function empty 
Membuat file baru dengan nama empty.php  dan mengetikkan kode -->

<?php
$myArray = array(); // Array kosong
if (empty($myArray) ) {
    echo "Array tidak terdefinisi atau kosong.";
} else {
    echo "Array terdefinisi dan tidak kosong.";
}
// Tambahkan spasi di sini
echo "<br><br>";
//tambahkan isi file dengan kode berikut
if (empty($nonExistentVar)) {
    echo "Variabel tidak terdefinisi atau kosong.";
} else {
    echo "Variabel terdefinisi dan tidak kosong.";
}
?>