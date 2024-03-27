<!-- PRAKTIKUM 1 Function Isset 
Membuat file baru dengan nama isset.php -->

<?php
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
}
// Tambahkan spasi di sini
echo "<br><br>";
//Tambahkan isi dari file dengan kode ini
$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
echo "Nama: " . $data["nama"];
} else {
echo "Variabel 'nama' tidak ditemukan dalam array.";
}

?>