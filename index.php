<?php
    $matches = [
        "squadraDiCasa" => [
            "squadra1" => "Olimpia Milano",
            "squadra2" => "Bologna",
            "squadra3" => "Cremona"
        ],
        "squadraOspite" => [
            "squadra1" => "Cantù",
            "squadra2" => "Dinamo Sassari",
            "squadra3" => "Varese"
        ],
        "puntiSquadraCasa" => [
            "squadra1" => "70",
            "squadra2" => "97",
            "squadra3" => "88"
        ],
        "puntiSquadraOspite" => [
            "squadra1" => "78",
            "squadra2" => "90",
            "squadra3" => "96"
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Snack 1</title>
    </head>
    <body>
        <h1>Basket Serie A</h1>
        <h3>Ultime partite giocate.</h3>

        <p>
            <?php echo $matches["squadraDiCasa"]["squadra1"];?> - <?php echo $matches["squadraOspite"]["squadra1"];?> | <?php echo $matches["puntiSquadraCasa"]["squadra1"];?> - <?php echo $matches["puntiSquadraOspite"]["squadra1"];?>
        </p>

        <p>
            <?php echo $matches["squadraDiCasa"]["squadra2"];?> - <?php echo $matches["squadraOspite"]["squadra2"];?> | <?php echo $matches["puntiSquadraCasa"]["squadra2"];?> - <?php echo $matches["puntiSquadraOspite"]["squadra2"];?>
        </p>

        <p>
            <?php echo $matches["squadraDiCasa"]["squadra3"];?> - <?php echo $matches["squadraOspite"]["squadra3"];?> | <?php echo $matches["puntiSquadraCasa"]["squadra3"];?> - <?php echo $matches["puntiSquadraOspite"]["squadra3"];?>
        </p>
    </body>
</html>
