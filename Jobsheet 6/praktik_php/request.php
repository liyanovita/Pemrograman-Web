<!-- PRAKTIKUM 3 - STRING
3. Variabel $_REQUEST
SOAL NO 25
Membuat file baru dan ketikkan kode ini-->

<html>
<body>

<form method="post" action=" <?php echo $_SERVER ['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body
</html>