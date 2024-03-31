<!-- PRAKTIKUM 2 - MULTI UPLOAAD FILE 
Membuat file baru dengan nama proses_upload.php. dan mengetikkan kode
SOAL no 2.1 -->

<?php
// Lokasi penyimpanan file yang diunggah
/*$targetDirectory = "documents/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Periksa apakah ada file yang diunggah
if (isset($_FILES['files']) && $_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        // Pindahkan file yang diunggah ke direktori penyimpanan
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file $fileName.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>  */

//soal no 2.2
//Buat seperti langkah 3 dengan multi upload khusus gambar
// Lokasi penyimpanan gambar yang diunggah
$targetDirectory = "images/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Periksa apakah ada gambar yang diunggah
if (isset($_FILES['images']) && $_FILES['images']['name'][0]) {
    $totalImages = count($_FILES['images']['name']);

    // Loop melalui semua gambar yang diunggah
    for ($i = 0; $i < $totalImages; $i++) {
        $imageName = $_FILES['images']['name'][$i];
        $targetImage = $targetDirectory . $imageName;

        // Pindahkan gambar yang diunggah ke direktori penyimpanan
        if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetImage)) {
            echo "Gambar $imageName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah gambar $imageName.<br>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
?>
