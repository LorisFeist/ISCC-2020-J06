<?php

$heures= 0;
$minutes= 0;

function clock($heure, $minutes)
{
    for($minutes=00; $minutes<=59; $minutes=$minutes + 1)
    $minutes = $minutes + 1;
    echo '00:'.$minutes.'<br>';
{
    if ($minutes > 59);
    $heures = $heures +1; 
    echo ''.$heures.':'.$minutes.'<br>';
    
    elseif (!$heures > 23 )
    $heures = 0;  
    echo "<p>00:00</p>";
}
}
return;
}

clock((3600))
    
?>