<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
<?php
$string = "a string of words";
echo gettype($string);
?>

<?php
$getall = 2;
echo gettype($getall);
?>

<?php
$getal = 0.23;
echo gettype($getal);
?>

<?php
$test = true;
echo gettype($test);
?>

<?php
$test = null;
echo $test;
echo gettype($test);
?>

</body>
</html>