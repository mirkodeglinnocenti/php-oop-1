<?php

require_once "./movie.php";

$thor = new Movie();
$thor->titolo = "thor";
$thor->genere = "azione";

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
            </li>
        </ul>
    </main>
</body>
</html>