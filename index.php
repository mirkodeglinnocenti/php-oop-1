<?php

require_once "./models/movie.php";

// Film 1 - thor
$thor = new Movie("thor");
$thor->setAnno(2002);
$thor->genere = "azione";
$thor->durata = 1.35;

// var_dump($thor);

// Film 2 - Fast and Furios
$fast_and_furios_5 = new Movie("Fast and Furios 5");
$fast_and_furios_5->setAnno(2014);
$fast_and_furios_5->genere = "azione";
$fast_and_furios_5->durata = 2.20;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    <main>
        <h1>Lista film</h1>
        <ul>
            <li>
                <?php echo $thor->titolo ?>
                <ul>
                    <li>
                        <?php echo $thor->genere ?>
                    </li>
                    <li>
                        <?php echo $thor->anno ?>
                    </li>
                    <li>
                        <?php echo $thor->durata ?> h
                    </li>
                </ul>
            </li>
            <li>
                <?php echo $fast_and_furios_5->titolo ?>
                <ul>
                    <li>
                        <?php echo $fast_and_furios_5->genere ?>
                    </li>
                    <li>
                        <?php echo $fast_and_furios_5->anno ?>
                    </li>
                    <li>
                        <?php echo $fast_and_furios_5->durata ?> h
                    </li>
                </ul>
            </li>
        </ul>
    </main>
</body>
</html>