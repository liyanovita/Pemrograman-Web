<!-- PRAKTIKUM 3 Form Input PHP 
Membuat file baru dengan nama proses_form.php
soal no 3.1
 -->


 <form method="post" action="proses_form.php">
    Nama: <input type="text" name="nama"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email;
}
?>