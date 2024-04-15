<!-- Praktikum 2. Folder Fungsi
Buat file baru pada folder fungsi dengan nama  pesan_kilat.php. Ketikkan kode seperti di bawah ini.
-->

<?php
function set_flashdata($key = "", $value = "")
{
    if (!empty($key) && !empty($value)) {
        $_SESSION['_flashdata'][$key] = $value;
        return true;
    }
    return false;
}

function get_flashdata($key = "")
{
    if (!empty($key) && isset($_SESSION['_flashdata'][$key])) {
        $data = $_SESSION['_flashdata'][$key];
        unset($_SESSION['_flashdata'][$key]);
        return $data;
    } else {
        echo "<script>alert('Flash Message \'{$key}\' is not defined.')</script>";
    }
}

function pesan($key = "", $pesan = "")
{
    if (!empty($key) && !empty($pesan)) {
        set_flashdata($key, $pesan);
    }
}
?>
