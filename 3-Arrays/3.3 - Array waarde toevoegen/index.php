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
     $heroes = ['chad', 'spoodie', 'supa idol'];
     echo $heroes [0] . "<br>";
     echo $heroes [1] . "<br>";
     echo $heroes [2] . "<br>";
     array_push ($heroes, 'supa chad');
     print_r ($heroes);
    ?>
</body>
</html>