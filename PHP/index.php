<?php

require_once 'Entities/Spaceship.php';
require_once 'Scripts/Battle.php';
require_once 'CRUD.php';

use Scripts\Battle;

// Alle spaceships ophalen (READ)
$spaceships = SpaceshipRepository::getAll();

// Battle starten als formulier is verstuurd
$winner = null;
$battle = null;

if (isset($_POST['fight'])) {

    // Player spaceship
    $playerData = $spaceships[array_search($_POST['player'], array_column($spaceships, 'id'))];
    $enemyData  = $spaceships[array_search($_POST['enemy'], array_column($spaceships, 'id'))];

    $player = new Spaceship(
        $playerData['name'],
        $playerData['hp'],
        $playerData['attack']
    );

    $enemy = new Spaceship(
        $enemyData['name'],
        $enemyData['hp'],
        $enemyData['attack']
    );

    $battle = new Battle($player, $enemy);
    $winner = $battle->start();
}
?>


<h2>🚀 Spaceship Battle</h2>

<form method="post">
    <h3>Select Player</h3>
    <select name="player" required>
        <?php foreach ($spaceships as $ship): ?>
            <option value="<?= $ship['id'] ?>">
                <?= htmlspecialchars($ship['name']) ?>
                (HP: <?= $ship['hp'] ?> | ATK: <?= $ship['attack'] ?>)
            </option>
        <?php endforeach; ?>
    </select>

    <h3>Select Enemy</h3>
    <select name="enemy" required>
        <?php foreach ($spaceships as $ship): ?>
            <option value="<?= $ship['id'] ?>">
                <?= htmlspecialchars($ship['name']) ?>
                (HP: <?= $ship['hp'] ?> | ATK: <?= $ship['attack'] ?>)
            </option>
        <?php endforeach; ?>
    </select>

    <br><br>
    <button name="fight">Start Battle</button>
</form>

