<?php

class Battle {
    private $player1;
    private $player2;
    private $battleLog = [];

    public function __construct($player1, $player2) {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function start() {
        $this->battleLog[] = "Battle started between " . $this->player1->getName() . " and " . $this->player2->getName();

        while ($this->player1->isAlive() && $this->player2->isAlive()) {
            $this->round();
        }

        return $this->getWinner();
    }

    private function round() {
        // Player 1 attacks
        $damage1 = $this->player1->attack();
        $this->player2->takeDamage($damage1);
        $this->battleLog[] = $this->player1->getName() . " attacks for " . $damage1 . " damage!";

        if (!$this->player2->isAlive()) return;

        // Player 2 attacks
        $damage2 = $this->player2->attack();
        $this->player1->takeDamage($damage2);
        $this->battleLog[] = $this->player2->getName() . " attacks for " . $damage2 . " damage!";

        $this->battleLog[] = "---";
    }

    private function getWinner() {
        if ($this->player1->isAlive()) {
            $this->battleLog[] = $this->player1->getName() . " wins!";
            return $this->player1;
        }
        $this->battleLog[] = $this->player2->getName() . " wins!";
        return $this->player2;
    }

    public function getBattleLog() {
        return $this->battleLog;
    }
}

?>