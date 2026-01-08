<?php 
namespace Scripts;

use Spaceship;

class Battle
{
    private Spaceship $ship1;
    private Spaceship $ship2;
    private array $battleLog = [];

    public function __construct(Spaceship $ship1, Spaceship $ship2)
    {
        $this->ship1 = $ship1;
        $this->ship2 = $ship2;
    }

    public function start(): Spaceship
    {
        while ($this->ship1->isAlive() && $this->ship2->isAlive()) {
            $this->ship2->takeDamage($this->ship1->getAttack());
            $this->battleLog[] =
                "{$this->ship1->getName()} hits {$this->ship2->getName()}";

            if (!$this->ship2->isAlive()) break;

            $this->ship1->takeDamage($this->ship2->getAttack());
            $this->battleLog[] =
                "{$this->ship2->getName()} hits {$this->ship1->getName()}";
        }

        return $this->ship1->isAlive() ? $this->ship1 : $this->ship2;
    }

    public function getBattleLog(): array
    {
        return $this->battleLog;
    }
}
?>