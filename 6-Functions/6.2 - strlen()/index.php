<?php
function mijnNaamIsGroot(){
    $voornaam = "BART";
    $achternaam = "SIMPSON";
    $gehelenaam = "mijn naam is " . $voornaam . " " . $achternaam;
    $gehelenaam = strtoupper($gehelenaam);
    echo ($gehelenaam);

}
mijnNaamIsGroot();