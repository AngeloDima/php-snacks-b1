<!-- /* Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */ -->





<?php

$array = [

   $partitaUno = [
        "Casa" => "Olimpia Milano",
        "Ospite"  => "Cantù",
        "Risultato"  =>"55-60",
    ],

    $partitaDue = [
        "Casa" => "Virtus",
        "Ospite"  => "Victoria",
        "Risultato"  =>"35-50",
    ],

    $partitaTre = [
        "Casa" => "PallaBrescia",
        "Ospite"  => "PallaAugusta",
        "Risultato"  =>"45-65",
    ],

    $partitaQuattro = [
        "Casa" => "Paperino",
        "Ospite"  => "Pippo",
        "Risultato"  =>"35-70",
    ]

];

?>

<div class="prima">
<h4> <?= $partitaUno["Casa"] ?> -
     <?= $partitaUno["Ospite"] ?> | 
     <?= $partitaUno["Risultato"] ?> 
</h4>
</div>
 
<br>

<div class="seconda">
<h4> <?= $partitaDue["Casa"] ?> -
     <?= $partitaDue["Ospite"] ?> | 
     <?= $partitaDue["Risultato"] ?> 
</h4>
</div>

<br>


<div class="terza">
<h4> <?= $partitaTre["Casa"] ?> -
     <?= $partitaTre["Ospite"] ?> | 
     <?= $partitaTre["Risultato"] ?> 
</h4>
</div>

<br>


<div class="quarta">
<h4> <?= $partitaQuattro["Casa"] ?> -
     <?= $partitaQuattro["Ospite"] ?> | 
     <?= $partitaQuattro["Risultato"] ?> 
</h4>
</div>



