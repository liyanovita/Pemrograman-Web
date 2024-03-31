<!-- PRAKTIKUM 3
SOAL NO 3.1
MEMBUAT FILE upload_ajax.php dan mengetikkan kode

<?php
/*if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    @$file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
    $extensions = array("pdf", "doc", "docx", "txt");

    if (!in_array($file_ext, $extensions)) {
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    }

    if (empty($errors)) {
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah.";
    } else {
        echo implode(" ", $errors);
    }
}
?> */

//soal no 3.2
//Buat seperti langkah 3 dengan multi upload khusus gambar dan Jquery.

if (isset($_FILES['files'])) {
    $errors = array();

    $extensions = array("jpg", "jpeg", "png", "gif");
    $maxFileSize = 2 * 1024 * 1024; // 2 MB

    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $file_ext = strtolower(end(explode('.', $file_name)));

        if (!in_array($file_ext, $extensions)) {
            $errors[] = "Ekstensi file $file_name yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
        }

        if ($file_size > $maxFileSize) {
            $errors[] = "Ukuran file $file_name tidak boleh lebih dari 2 MB";
        }

        if (empty($errors)) {
            $targetDirectory = "uploads/";
            if (!file_exists($targetDirectory)) {
                mkdir($targetDirectory, 0777, true);
            }
            move_uploaded_file($file_tmp, $targetDirectory . $file_name);
            echo "File $file_name berhasil diunggah.<br>";
        } else {
            echo implode("<br>", $errors);
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>

