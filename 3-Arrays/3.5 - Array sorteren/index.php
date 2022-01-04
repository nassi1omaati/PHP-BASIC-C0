<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $coders =  [676,5345,78657,3,46,21,47,];
    asort ($coders);
    print_r($coders);

    $laag_hoog = [3,21,46,47,676,5345,78657];
    arsort ($laag_hoog);
    print_r($laag_hoog);
    ?>
</body>
</html>