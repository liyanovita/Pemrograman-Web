<!-- PRAKTIKUM 2 Associative Array -->
<!-- Buat file baru dengan nama array_2.php di dalam direktori praktik_php, kemudian ketikkan kode berikut: -->
<!-- SOAL NO 2 setelah dimodif-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum 2: Associative Array</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto 0 auto; /* Mengubah margin top menjadi 0 */
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center; /* Mengatur posisi teks ke tengah */
            margin-top: 10px; /* Menambahkan margin top ke teks */
        }
    </style>
</head>
<body>
    <?php
        $Dosen = [
            'Nama' => 'Elok Nur Hamdana',
            'Domisili' => 'Malang',
            'Jenis Kelamin' => 'Perempuan'
        ];
    ?>

    <h2>Data Dosen</h2> <!-- Menambahkan margin top pada teks -->
    <table>
        <tr>
            <th>Detail</th>
            <th>Informasi</th>
        </tr>
        <?php
            foreach ($Dosen as $detail => $informasi) {
                echo "<tr><td>{$detail}</td><td>{$informasi}</td></tr>";
            }
        ?>
    </table>
</body>
</html>
