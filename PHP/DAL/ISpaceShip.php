<?php
namespace DAL;
require_once __DIR__ . '/../Entities/Spaceship.php';
use Entities\Spaceship;




interface ISpaceShip
{
    public function getName(): string;

    public function setName(string $Name): void;

    public function getLength(): int;

    public function setLength(int $Length): void;

    public function getHP(): int;

    public function setHP(int $HP): void;

    public function getAttack(): int;

    public function setAttack(int $Attack): void;
    
}
?>