<!-- PRAKTIKUM 2 - LOGIN SINGLE USER
Mmebuat file dengan nama loginProses.html dan mengetikkan kode -->

<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $query);
$cek = mysqli_num_rows($result);

if ($cek) {
    echo "Anda berhasil login. Silahkan menuju ";?>
    <a href="homeAdmin.html">Halaman HOME</a>
<?php
}else{
    echo "Anda gagal login. Silahkan";?>
    <a href='loginForm.html'>Login kembali</a>
<?php
    echo mysqli_error($connect);
}
?>


