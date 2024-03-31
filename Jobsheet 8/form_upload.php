<!-- PRAKTIKUM 1 - UPLOAAD FILE 
Membuat file baru dengan nama form_upload.php dan mengetikkan kode
SOAL no 1.1 -->

<!DOCTYPE html>
<html>

<head>
    <title>File Upload</title>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>

</html>

<!-- soal no 1.3
Tambahkan script langkah 5 untuk membuat file gambar thumbnail dengan ukuran lebar 200 dan tinggi mengikuti perubahan secara otomatis.  -->
<!--<!DOCTYPE html>
<html>

<head>
  <title>Unggah File dengan Thumbnail</title>
</head>

<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
  </form>
</body>

</html> -->


<?php

/*if (isset($_POST["submit"])) {
    $direktoriTujuan = "uploads/"; // Direktori untuk menyimpan file
    $fileTujuan = $direktoriTujuan . basename($_FILES["fileToUpload"]["name"]);
    $tipeFile = strtolower(pathinfo($fileTujuan, PATHINFO_EXTENSION));
  
    $ekstensiDiizinkan = array("jpg", "jpeg", "png", "gif");
    $ukuranMaksimum = 5 * 1024 * 1024;
  
    // Periksa tipe dan ukuran file yang valid
    if (in_array($tipeFile, $ekstensiDiizinkan) && $_FILES["fileToUpload"]["size"] <= $ukuranMaksimum) {
      // Unggah file asli
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $fileTujuan)) {
        echo "File berhasil diunggah. ";
  
        // Buat thumbnail dengan penyesuaian tinggi otomatis
        $lebarThumbnail = 200;
        $gambarAsli = createImageFromUploadedFile($fileTujuan); // Fungsi untuk menangani pembuatan gambar berdasarkan ekstensi
        $lebarAsli = imagesx($gambarAsli);
        $tinggiAsli = imagesy($gambarAsli);
  
        $tinggiThumbnail = floor($tinggiAsli * ($lebarThumbnail / $lebarAsli));
  
        // Ubah ukuran dan buat thumbnail
        $gambarThumbnail = imagecreatetruecolor($lebarThumbnail, $tinggiThumbnail);
        imagecopyresampled($gambarThumbnail, $gambarAsli, 0, 0, 0, 0, $lebarThumbnail, $tinggiThumbnail, $lebarAsli, $tinggiAsli);
  
        // Generate nama unik untuk thumbnail untuk menghindari penimpaan
        $fileThumbnail = $direktoriTujuan . uniqid() . "." . $tipeFile;
  
        // Simpan thumbnail berdasarkan ekstensi file asli
        $thumbnailDisimpan = saveImage($gambarThumbnail, $fileThumbnail, $tipeFile);
  
        if ($thumbnailDisimpan) {
          echo "Thumbnail dibuat berhasil di " . $fileThumbnail;
        } else {
          echo "Gagal membuat thumbnail.";
        }
  
        imagedestroy($gambarAsli);
        imagedestroy($gambarThumbnail); // Bebaskan memori
      } else {
        echo "Gagal mengunggah file.";
      }
    } else {
      echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
  }
  
  // Fungsi untuk membuat sumber gambar berdasarkan ekstensi file (sesuaikan dengan preferensi pustaka gambar Anda)
  function createImageFromUploadedFile($filePath) {
    $tipeFile = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
    switch ($tipeFile) {
      case 'jpg':
      case 'jpeg':
        return imagecreatefromjpeg($filePath);
      case 'png':
        return imagecreatefrompng($filePath);
      case 'gif':
        return imagecreatefromgif($filePath);
      default:
        return false; // Tangani tipe file yang tidak valid
    }
  }
  
  // Fungsi untuk menyimpan gambar berdasarkan tipenya (sesuaikan dengan preferensi pustaka gambar Anda)
  function saveImage($imageResource, $targetPath, $fileType) {
    switch ($fileType) {
      case 'jpg':
      case 'jpeg':
        return imagejpeg($imageResource, $targetPath);
      case 'png':
        return imagepng($imageResource, $targetPath);
      case 'gif':
        return imagegif($imageResource, $targetPath);
      default:
        return false; // Tangani masalah penyimpanan
    }
  }


//soal no 1.2
//ubah isi dari file tersebut dengan kode di bawah ini 
/*if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    $maxFileSize = 5 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
} */


//soal no 1.4 
// Ubah isi dari file upload.php tersebut dengan kode di bawah ini.
if (isset($_POST["submit"])) {
    $targetDirectory = "documents/"; // Direktori tujuan untuk menyimpan dokumen
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");

    $maxFileSize = 10 * 1024 * 1024;

    if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah.";
        } else {
            echo "Gagal mengunggah dokumen.";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>
