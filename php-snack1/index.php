<?php
    $matches = [
        [
            'squadraDiCasa' => [
                'nome' => 'Olimpia Milano',
                'punteggio' => 70
            ],
            'squadraOspite' => [
                'nome' => 'Cantù',
                'punteggio' => 84
            ]
        ],
        [
            'squadraDiCasa' => [
                'nome' => 'Bologna',
                'punteggio' => 97
            ],
            'squadraOspite' => [
                'nome' => 'Dinamo Sassari',
                'punteggio' => 90
            ]
        ],
        [
            'squadraDiCasa' => [
                'nome' => 'Cremona',
                'punteggio' => 88
            ],
            'squadraOspite' => [
                'nome' => 'Varese',
                'punteggio' => 96
            ]
        ],
    ];

    for ($i = 0; $i < count($matches); $i++) {

        $nome_squadra_casa = $matches[$i]['squadraDiCasa']['nome'];
        $nome_squadra_ospite = $matches[$i]['squadraOspite']['nome'];
        $punteggio_squadra_casa = $matches[$i]['squadraDiCasa']['punteggio'];
        $punteggio_squadra_ospite = $matches[$i]['squadraOspite']['punteggio'];
        $squadre = $nome_squadra_casa . " - " . $nome_squadra_ospite;
        $punti = $punteggio_squadra_casa . " - " . $punteggio_squadra_ospite;

        echo $squadre . " | " . $punti . "<br>";
    }
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
