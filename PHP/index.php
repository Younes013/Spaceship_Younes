<?php 
require_once 'Entities/Spaceship.php';


$Spaceship = new Spaceship("Destroyer",  5, 6, 2);
echo($Spaceship->__getName() );



$Spaceship->__setName(Name:"Cruiser");
echo("\n{$Spaceship->__getName()}");



$Spaceship->__setLength(Name:"5");
echo("\n{$Spaceship->__getLength()}");



$Spaceship->__setHP(Name:"6");
echo("\n{$Spaceship->__getHP()}");



$Spaceship->__setAttack(Name:"2");
echo("\n{$Spaceship->__getAttack()}");  
?>