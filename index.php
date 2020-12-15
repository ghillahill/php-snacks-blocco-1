<?php
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Snack 2</title>
    </head>
    <body>
        <h1>Check User</h1>

        <p style="color:red">Path verificato: /?name=Selva&mail=g@gmail.com&age=14</p>
        <?php
            if (strlen($name) > 3 && is_numeric($age) && strpos($mail, '.') !== false && strpos($mail, '@') !== false) {
                echo "Accesso riuscito!";
            }
            else {
                echo "Accesso negato!";
            }
        ?>

    </body>
</html>
