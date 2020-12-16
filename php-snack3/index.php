<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>PHP Snack 2</title>
    </head>
    <body>

        <?php
            foreach ($posts as $data => $elementoArray) {?>
                <div class="spacing">
                    <h2>Data <?php echo $data; ?></h2>
                    <?php foreach ($elementoArray as $value){?>

                        <h3>
                            <?php echo $value['title'];?>
                        </h3>
                        <p>
                            <?php echo $value['text'];?>
                        </p>
                        <em>
                            <?php echo $value['author'];?>
                        </em>
                    <?php
                    }?>
                </div>
                <?php
                }?>
    </body>
</html>
