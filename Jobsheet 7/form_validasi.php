<!-- PRAKTIKUM 7 - Validasi Form
Membuat file baru dengan nama form_validasi.php  
soal no 7.1 -->

<!--<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html> -->

<!-- kembangkan file tersebut dengan mengetikkan kode berikut 
soal no 7.2-->

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                if (nama === "") {  
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }
                if (valid) {
                    return true; // Mengizinkan pengiriman form jika validasi berhasil
                } else {
                    event.preventDefault(); // Menghentikan pengiriman form jika validasi gagal
                }
            });
        });
    </script>
</body>
</html>

//Buatlah script langkah 6 dengan menggunakan ajax
//soal no 7.3 -->
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi (Ajax)</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi (Ajax)</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <input type="submit" id="submitBtn" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Mencegah pengiriman form secara default
                
                var nama = $("#nama").val();
                var email = $("#email").val();
                
                // Mengirim data ke skrip pemrosesan PHP menggunakan Ajax
                $.ajax({
                    type: "POST",
                    url: "proses_validasi.php",
                    data: {
                        nama: nama,
                        email: email
                    },
                    success: function(response) {
                        // Menampilkan pesan kesalahan atau berhasil sesuai respons dari server
                        if (response.trim() == "success") {
                            alert("Data berhasil dikirim: Nama = " + nama + ", Email = " + email);
                        } else {
                            alert(response);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>

//soal no 7.4
//Tambahkan validasi untuk password dengan ketentuan minimal 8 karakter dengan menggunakan jQuery dan PHP tambahkan pada langkah 9 -->
<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi (Ajax)</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi (Ajax)</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" id="submitBtn" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Mencegah pengiriman form secara default

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Validasi Nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                // Validasi Email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                // Validasi Password
                if (password.length < 8) {
                    $("#password-error").text("Password harus memiliki minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                // Mengirim data ke skrip pemrosesan PHP menggunakan Ajax jika valid
                if (valid) {
                    $.ajax({
                        type: "POST",
                        url: "proses_validasi.php",
                        data: {
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            // Menampilkan pesan kesalahan atau berhasil sesuai respons dari server
                            if (response.trim() == "success") {
                                alert("Data berhasil dikirim: Nama = " + nama + ", Email = " + email);
                            } else {
                                alert(response);
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $errors = array();

    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }
    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Jika ada kesalahan validasi
    if (empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // Misalnya, menyimpan data ke database atau mengirim email
        echo "Data berhasil dikirim: Nama = $nama, Email = $email";
    }
}
?>