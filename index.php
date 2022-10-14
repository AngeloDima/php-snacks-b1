<!-- /* Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */ -->




<!-- ----------SNAK 1--------------- -->
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

<!-- --------------------------------------------END--------------- -->

<!-- Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola
e che age sia un numero. Se tutto è ok stampare 
“Accesso riuscito”, altrimenti “Accesso negato” -->




<?php

$problema1 = $_GET["name"];
$problema2 = $_GET["mail"];
$problema3 = $_GET["age"];

// ---------Name---------

  if (strlen($problema1) > 3){
  $correct = "complimenti";

} else if (strlen($problema1) <= 3 && strlen($problema1) > 0){
  $false = "scrivi una parola più lunga";

} else if (strlen($problema1) === 0) {
  $midle = "scrivi";
}
?>
<div>
<h2> <?= $correct ?> </h2>
<h2> <?= $false ?> </h2>
<h2> <?= $midle ?> </h2>
</div>

