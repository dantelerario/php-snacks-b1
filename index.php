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


  </body>
</html>
