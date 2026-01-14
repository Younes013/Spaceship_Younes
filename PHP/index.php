<?php
$conn = new mysqli("localhost", "root", "root", "spaceship");
if ($conn->connect_error) {
    die("Database error");
}

if (isset($_POST['delete'])) {
    $id = (int)$_POST['id'];
    $stmt = $conn->prepare("DELETE FROM spaceships WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $hp = rand(50, 150);
    $atk = rand(5, 30);
    $stmt = $conn->prepare("INSERT INTO spaceships (name, hp, attack) VALUES (?, ?, ?)");
    $stmt->bind_param("sii", $name, $hp, $atk);
    $stmt->execute();
}

$res = $conn->query("SELECT * FROM spaceships");
$ships = [];
while ($row = $res->fetch_assoc()) {
    $ships[] = $row;
}

$winner = null;
if (isset($_POST['fight']) && count($ships) >= 2) {
    $playerId = $_POST['player'];
    $enemyId = $_POST['enemy'];

    if ($playerId == $enemyId) {
        die("Kies twee verschillende schepen!");
    }

    foreach ($ships as $s) {
        if ($s['id'] == $playerId) $p = $s;
        if ($s['id'] == $enemyId)  $e = $s;
    }

    $pHp = $p['hp'];
    $eHp = $e['hp'];

    while ($pHp > 0 && $eHp > 0) {
        $eHp -= $p['attack'];
        if ($eHp <= 0) {
            $winner = $p['name'];
            break;
        }

        $pHp -= $e['attack'];
        if ($pHp <= 0) {
            $winner = $e['name'];
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Spaceship Game</title>
</head>
<body>

<h2>Maak een nieuw spaceship</h2>
<form method="post">
    Naam: <input type="text" name="name" required>
    <button name="create">Maak spaceship</button>
</form>
<p><i>HP en Attack worden random gemaakt!</i></p>

<hr>

<h2>Alle Spaceships</h2>
<table border="1" cellpadding="5">
<tr>
    <th>Naam</th>
    <th>HP</th>
    <th>Attack</th>
    <th>Delete</th>
</tr>

<?php foreach ($ships as $s): ?>
<tr>
    <td><?= htmlspecialchars($s['name']) ?></td>
    <td><?= $s['hp'] ?></td>
    <td><?= $s['attack'] ?></td>
    <td>
        <form method="post">
            <input type="hidden" name="id" value="<?= $s['id'] ?>">
            <button name="delete">❌</button>
        </form>
    </td>
</tr>
<?php endforeach; ?>
</table>

<hr>

<h2>Battle!</h2>
<form method="post">
    Player:
    <select name="player">
        <?php foreach ($ships as $s): ?>
            <option value="<?= $s['id'] ?>"><?= htmlspecialchars($s['name']) ?> (HP: <?= $s['hp'] ?> | ATK: <?= $s['attack'] ?>)</option>
        <?php endforeach; ?>
    </select>

    Enemy:
    <select name="enemy">
        <?php foreach ($ships as $s): ?>
            <option value="<?= $s['id'] ?>"><?= htmlspecialchars($s['name']) ?> (HP: <?= $s['hp'] ?> | ATK: <?= $s['attack'] ?>)</option>
        <?php endforeach; ?>
    </select>

    <button name="fight">Fight!</button>
</form>

<?php if ($winner): ?>
<h2>🏆 De winnaar is: <?= htmlspecialchars($winner) ?>!</h2>
<?php endif; ?>

</body>
</html>
