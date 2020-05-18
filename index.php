<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-snacks-b1</title>
  </head>
  <body>
    <h1>PHP Snack 1</h1>
    <?php
    // PHP Snack 1:
    // Creiamo un array ‘matches’ contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.Stampiamo a schermo tutte le partite con questo schema:Olimpia Milano - Cantù | 55-60

    $partite = [
      [
        'casa' => 'Inter',
        'ospite' => 'Roma',
        'gol_casa' => rand(1, 8),
        'gol_ospite' => rand(1, 3),
      ],
      [
        'casa' => 'Juventus',
        'ospite' => 'Parma',
        'gol_casa' => rand(1, 2),
        'gol_ospite' => rand(1, 6),
      ],
      [
        'casa' => 'Lazio',
        'ospite' => 'Atalanta',
        'gol_casa' => rand(1, 6),
        'gol_ospite' => rand(1, 6),
      ],
      [
        'casa' => 'Spal',
        'ospite' => 'Milan',
        'gol_casa' => rand(1, 6),
        'gol_ospite' => rand(1, 2),
      ],
      [
        'casa' => 'Sampdoria',
        'ospite' => 'Torino',
        'gol_casa' => rand(1, 6),
        'gol_ospite' => rand(1, 6),
      ],
      [
        'casa' => 'Udinese',
        'ospite' => 'Genoa',
        'gol_casa' => rand(1, 6),
        'gol_ospite' => rand(1, 6),
      ],
    ];


     ?>

     <h1>Risultati Prima Giornata Serie A</h1>

     <ul>
       <?php for ( $i = 0; $i < count($partite); $i++) : ?>
         <li>
           <?php echo $partite[$i]['casa']; ?> - <?php echo $partite[$i]['ospite']; ?>
           <?php echo $partite[$i]['gol_casa']; ?> - <?php echo $partite[$i]['gol_ospite']; ?>
         </li>
       <?php endfor; ?>
     </ul>

     <h1>PHP Snack 2</h1>
     <?php
     // PHP Snack 2:
     //  Passare come parametri GET name, mail e age e verificare (cercando i metodi che nonconosciamo nella documentazione) che:
     //  1. name sia più lungo di 3 caratteri,
     //  2. che mail contenga un punto e una chiocciola
     //  3. e che age sia un numero.Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

     $dati = $_GET;
     $accesso = 'non riuscito';


     //check presenza valori

     if ( empty($dati['name']) || empty($dati['mail']) || empty($dati['age']) ) {
       $accesso = 'inserire tutti i parametri per accede';
     }

     //check name
     elseif ( strlen($dati['name']) <= 3 ) {
       $accesso = 'non riuscito';
     }
     //check mail
     elseif ( strpos($dati['mail'], '@' ) === false || strpos($dati['mail'], '.' ) === false ) {
       $accesso = 'non riuscito';
     }
     //check age
     elseif ( ! is_numeric($dati['age']) ) {
       $accesso = 'non riuscito';
     }
     else {
       $accesso = 'riuscito';
     }

      ?>

    <h2>ACCESSO: <?php echo $accesso; ?></h2>



  </body>
</html>
