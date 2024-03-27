<!-- PRAKTIKUM 4 - HTML Injection 
Membuat file baru dengan nama html_aman.php 
soal no 4.1
 -->

 <form method="post" action="html_aman.php">
    Input: <input type="text" name="input"><br>
    Email: <input type="email" name="email"><br> <!--Pastikan input type adalah 'email' untuk memvalidasi format email -->
    <input type="submit" value="Submit">
</form>


<?php
// Memeriksa apakah input 'input' telah diset dan diproses
if(isset($_POST['input'])) {
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    // Menggunakan filter_input untuk validasi input
    $user_input = filter_input(INPUT_POST, 'user_input', FILTER_SANITIZE_SPECIAL_CHARS);

    // Menggunakan htmlspecialchars untuk menghindari HTML injection saat menampilkan data
    echo '<div>' . htmlspecialchars($user_input, ENT_QUOTES, 'UTF-8') . '</div>';
}

// Memeriksa apakah input 'email' telah diset dan diproses
if(isset($_POST['email'])) {
    //Memeriksa apakah input adalah email yang valid
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Lanjutkan dengan pengolahan email yang aman
    } else {
        // Tangani input yang tidak valid
    }
}
?>

