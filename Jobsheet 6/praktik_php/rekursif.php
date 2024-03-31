<?php
//PRAKTIKUM 3 FUNGSI REKURSIF
//SOAL NO 9
//membuat file baruu dengan nama rekursif.php dan mengetikkan kode
//function tampilkanHaloDunia(){
//echo "Halo dunia! <br>";

//tampilkanHaloDunia();
//}

//tampilkanHaloDunia();

//menampilkan angka 1 sampai 25 dengan perulangan for
//for ($i=1; $i <=25; $i++){
//  echo "Perulangan ke-{$i} <br>";
//}

//menambahkan fungsi rekursif pada perulangan
//function tampilkanAngka (int $jumlah, int $indeks = 1){
//  echo "Perulangan ke-{$indeks} <br>";

// panggil diri sendiri selama $indeks <= $jumlah
//if ($indeks < $jumlah) {
//  tampilkanAngka($jumlah, $indeks + 1);
//}
//}
//tampilkanAngka(20);

//Soal no 11
//Contoh Kasus Menu Bertingkat
//Buat variabel $menu dan mengetikkan kode program
//$menu = [
 // [
   // "nama" => "Beranda"
//],
//[
  //"nama" => "Berita",
 //"Submenu" => [
  // [
    // "nama" => "Wisata",
   //"Submenu" => [
   //  [
     // "nama" => "Pantai"
 //],
 //[
   //"nama" => "Gunung"
//]
//]
//],
//[
  //"nama" => "Kuliner"
//],
//[
  // "nama" => "Hiburan"
//]
//]
//],
//[
  //"nama" => "Tentang"
//],
//[
  //"nama" => "Kontak"
//],
//];

//fungsi untuk menampilkan array utama
//function tampilkanMenuBertingkat (array $menu) {
  //echo "<ul>";
 //foreach ($menu as $key => $item) {
   //echo "<li>{$item['nama']}</li>";
//}
//echo "</ul>";
//}

//tampilkanMenuBertingkat($menu);

//SOAL NO 12
//Membuat fungsi menjadi rekursif dengan memanggil dirinya sendiri ketika suatu item dari menu memiliki attribut subMenu.
$menu = [
    [

        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [

                        "nama" => "Pantai"

                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [

                "nama" => "Hiburan"
            ]
        ]
    ],
    [

        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];


function tampilkanMenuBertingkat(array $menu)
{
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";
        if (isset($item['subMenu']) && is_array($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>