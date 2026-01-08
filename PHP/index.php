<?php
require_once 'Entities/Spaceship.php';
require_once 'Scripts/Battle.php';

use Scripts\Battle;


$player = new Spaceship(
    "My Cruiser",
    random_int(20, 50),
    random_int(5, 15)
);

$enemy = new Spaceship(
    "Alien Ship",
    random_int(15, 45),
    random_int(4, 12)
);


$battle = new Battle($player, $enemy);
 $winner = $battle->start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spaceship Battle</title>
    <link rel="stylesheet" href="CSS/stylesheet.css">
</head>
<body>

<h2>🚀Spaceship Battle</h2>

<h3>Start HP</h3>
 <p><?php echo $player->getName(); ?> HP: <?php echo $player->getHP(); ?></p>
  <p><?php echo $enemy->getName(); ?> HP: <?php echo $enemy->getHP(); ?></p>

<h3>Battle log</h3>

<?php
 foreach ($battle->getBattleLog() as $line) {
     echo "<p>$line</p>";
 }
?>

<h2>Winner: <?php echo $winner->getName(); ?> 🏆</h2>

</body>
</html>
