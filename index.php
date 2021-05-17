<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>


<?php
    // paragrafo iniziale 
    $paragraph = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore amet reiciendis, doloribus cumque accusantium.';

    // salvo in una variabile il valore del parametro scritto dall'utente
    $wordToCensure = $_GET ['badword'];

    // salvo in una variabile la stringa censurata 
    $censored = str_replace($wordToCensure, '***', $paragraph);

?>

<!-- stampo il paragrafo iniziale  -->
<p><strong>Paragrafo:</strong> <?php echo $paragraph; ?></p>

<!-- stampo lunghezza del paragrafo iniziale  -->
<p><strong>Lunghezza del paragrafo:</strong> <?php echo strlen($paragraph) ?></p>

<!-- stampo il paragrafo censurato  -->
<p><strong>Paragrafo censurato: </strong> <?php echo $censored; ?></p>

<!-- stampo la lunghezza del paragrafo censurato  -->
<p><strong>Lunghezza del paragrafo censurato:</strong> <?php echo strlen($censored) ?></p>
</body>
</html>