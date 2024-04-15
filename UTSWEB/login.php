<?php
// Mulai session
session_start();

// Cek apakah form login sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah username dan password sudah diisi
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        // Lakukan validasi username dan password, misalnya dengan database
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Contoh validasi sederhana
        if ($username === "admin" && $password === "password") {
            // Set session untuk menandakan bahwa user sudah login
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;

            // Redirect ke halaman dashboard atau halaman selanjutnya
            header("Location: dashboard.php");
            exit();
        } else {
            // Jika username atau password salah, tampilkan pesan error
            $error = "Username atau password salah!";
        }
    } else {
        // Jika username atau password kosong, tampilkan pesan error
        $error = "Username dan password harus diisi!";
    }
}
?>
