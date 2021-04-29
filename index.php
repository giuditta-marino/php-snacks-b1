<!-- PHP SNACK 1 -->

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

<!-- PHP SNACK 2 -->
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi
che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

// var_dump($name, $mail, $age);

$resultName = strlen($name) >=3;
$resultMailAt = strpos($mail, '@');
$resultMailDot = strpos($mail, '.');
$resultAge = is_numeric($age);

var_dump($resultName, $resultMailAt, $resultMailDot, $resultAge);

// if (!$resultName || !$resultMailAt || !$resultMailDot || !$resultAge) {
//   echo 'ko';
// } else {
//   echo 'ok';
// }

if ($resultName === true & $resultMailAt == true & $resultMailDot == true & $resultAge === true) { ?>
   <div class="">
     Accesso riuscito
   </div>
   <?php
} else { ?>
  <div class="">
    Accesso negato
  </div>
<?php } ?>
