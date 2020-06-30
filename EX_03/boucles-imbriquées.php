<?php

function clock($heure, $minutes, $secondes)
{
    for($secondes=0; $secondes<=59; $secondes=$secondes + 1)
    $compteur = $compteur + 1;

    echo "<p> 00:0$compteur</p>";

    if ($secondes >= 59 )
    $compteur = 0 
    echo "<p> 0" 
?>