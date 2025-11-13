<?php 
require_once 'Entities/Spaceship.php';


$Spaceship = new Spaceship("Destroyer",  5, 6, 2);
echo($Spaceship->__getName() );



$Spaceship->__setName(Name:"Voorbeeld 1");
echo("\n{$Spaceship->__getName()}");



$Spaceship->__setLength(Name:"Voorbeeld 2");
echo("\n{$Spaceship->__getLength()}");



$Spaceship->__setHP(Name:"Voorbeeld 3");
echo("\n{$Spaceship->__getHP()}");



$Spaceship->__setAttack(Name:"Voorbeeld 4");
echo("\n{$Spaceship->__getAttack()}");  
?>