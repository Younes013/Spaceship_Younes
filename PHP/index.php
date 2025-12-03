<?php 
require_once 'Entities/Spaceship.php';




$Spaceship = new Spaceship("Destroyer", 5, 6, 9);
echo($Spaceship->__getName());

$Spaceship->__setName(Name:"Cruiser");
echo("\n{$Spaceship->__getName()}");

$Spaceship->__setLength(Length:"5");
echo("\n{$Spaceship->__getLength()}");

$Spaceship->__setHP(HP:"6");
echo("\n{$Spaceship->__getHP()}");

$Spaceship->__setAttack(Attack:"9");
echo("\n{$Spaceship->__getAttack()}");




$EnemySpaceship = new EnemySpaceship("Alien Destroyer", 10, 8, 4);
echo("\n\n{$EnemySpaceship->__getName()}");

$EnemySpaceship->__setName(Name:"Alien Cruiser");
echo("\n{$EnemySpaceship->__getName()}");

$EnemySpaceship->__setLength(Length:"10");
echo("\n{$EnemySpaceship->__getLength()}");

$EnemySpaceship->__setHP(HP:"8");
echo("\n{$EnemySpaceship->__getHP()}");

$EnemySpaceship->__setAttack(Attack:"4");
echo("\n{$EnemySpaceship->__getAttack()}");




$Asteroid = new Asteroid("Rocky", 15, 20, 5);
echo("\n\n{$Asteroid->__getName()}");

$Asteroid->__setName(Name:"Big Rock");
echo("\n{$Asteroid->__getName()}");

$Asteroid->__setLength(Length:"15");
echo("\n{$Asteroid->__getLength()}");

$Asteroid->__setHP(HP:"20");
echo("\n{$Asteroid->__getHP()}");

$Asteroid->__setAttack(Attack:"0");
echo("\n{$Asteroid->__getAttack()}");
    


$spaceshipHP = $Spaceship->__getHP();
$enemySpaceshipHP = $EnemySpaceship->__getHP();
$asteroidHP = $Asteroid->__getHP();

$spaceshipAttack = $Spaceship->__getAttack();
$enemySpaceshipAttack = $EnemySpaceship->__getAttack();
$asteroidAttack = $Asteroid->__getAttack();


$enemySpaceshipHP -= $spaceshipAttack;
$spaceshipHP -= $enemySpaceshipAttack;
$spaceshipHP -= $asteroidAttack;


echo "<br>After the battle:";
echo "<br>Your Spaceship HP: {$spaceshipHP}";
echo "<br>Enemy Spaceship HP: {$enemySpaceshipHP}";
echo "<br>Asteroid HP: {$asteroidHP}";

if ($enemySpaceshipHP <= 0) {
    echo "<br>The Enemy Spaceship has been destroyed.";
} else {
    echo "<br>The Enemy Spaceship survived the attack.";
}

if ($spaceshipHP <= 0) {
    echo "<br>Your Spaceship has been destroyed.";
} else {
    echo "<br>Your Spaceship survived the attack.";
}

if ($spaceshipHP < 0) {
    $spaceshipHP = 0; 
}
?>
