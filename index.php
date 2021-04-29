<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del
calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti
dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60 -->


<?php
$partite = [
  [
    'squadraCasa' => 'Olimpia',
    'squadraOspite' => 'Milano',
    'puntiCasa' => '10',
    'puntiOspite' => '15'
  ],

  [
    'squadraCasa' => 'Salerno',
    'squadraOspite' => 'Reggio Calabria',
    'puntiCasa' => '8',
    'puntiOspite' => '7'
  ],

  [
    'squadraCasa' => 'Roma',
    'squadraOspite' => 'Firenze',
    'puntiCasa' => '20',
    'puntiOspite' => '25'
  ],

  [
    'squadraCasa' => 'Torino',
    'squadraOspite' => 'Genova',
    'puntiCasa' => '30',
    'puntiOspite' => '32'
  ]

];
?>

<!-- Stampo tutte le partite -->
<?php
// var_dump($partite);

for ($i=0; $i < count($partite); $i++) {
 ?>
 <div class="">
   <?= $partite[$i]['squadraCasa'] ?> -
   <?= $partite[$i]['squadraOspite'] ?> |
   <?= $partite[$i]['puntiCasa'] ?> -
   <?= $partite[$i]['puntiOspite'] ?>
 </div>
<?php } ?>
