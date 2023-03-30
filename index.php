<?php

require_once "./models/movie.php";

$thor = new Movie("thor");
$thor->setAnno(2002);
$thor->genere = "azione";
$thor->durata = 1.35;

var_dump($thor);

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
        </ul>
    </main>
</body>
</html>