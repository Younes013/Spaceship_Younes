<?php 
require_once 'Entities/Spaceship.php';
require_once 'Entities/EnemySpaceship.php';
require_once 'Entities/Asteroid.php';


// 🛰️ Normal Spaceship
$Spaceship = new Spaceship("Destroyer", 5, 6, 2);
echo($Spaceship->__getName());

$Spaceship->__setName(Name:"Cruiser");
echo("\n{$Spaceship->__getName()}");

$Spaceship->__setLength(Length:"5");
echo("\n{$Spaceship->__getLength()}");

$Spaceship->__setHP(HP:"6");
echo("\n{$Spaceship->__getHP()}");

$Spaceship->__setAttack(Attack:"2");
echo("\n{$Spaceship->__getAttack()}");



// 👾 Enemy Spaceship
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



// ☄️ Asteroid
$Asteroid = new Asteroid("Rocky", 15, 20, 0);
echo("\n\n{$Asteroid->__getName()}");

$Asteroid->__setName(Name:"Big Rock");
echo("\n{$Asteroid->__getName()}");

$Asteroid->__setLength(Length:"15");
echo("\n{$Asteroid->__getLength()}");

$Asteroid->__setHP(HP:"20");
echo("\n{$Asteroid->__getHP()}");

$Asteroid->__setAttack(Attack:"0");
echo("\n{$Asteroid->__getAttack()}");

?>
