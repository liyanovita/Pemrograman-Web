<!-- PRAKTIKUM 3 Date and Time
membuat file dengan nama time.php -->

<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <h3> Time </h3>
        <?php
            date_default_timezone_set ("asia/jakarta") ;
            echo date ("h:i:s a") ;
        ?>
    </body>
</html>