<!-- PRAKTIKUM 2 - MULTI UPLOAAD FILE 
Membuat file baru dengan nama form_multiupload.php. dan mengetikkan kode
SOAL no 2.1 -->

<!--<!DOCTYPE html>
<html>
<head>
    <title>Multiupload Dokumen</title>
</head>
<body>
    <h2>Unggah Dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx" />
        <input type="submit" value="Unggah" />
    </form>
</body>
</html> -->


<!--//soal no 2.2 
    Buat seperti langkah 3 dengan multi upload khusus gambar -->
<!DOCTYPE html>
<html>
<head>
    <title>Multiupload Gambar</title>
</head>
<body>
    <h2>Unggah Gambar</h2>
    <form action="proses_upload_gambar.php" method="post" enctype="multipart/form-data">
        <input type="file" name="images[]" multiple="multiple" accept="image/jpeg, image/png, image/gif" />
        <input type="submit" value="Unggah" />
    </form>
</body>
</html>




