<?php
class Battle {
    private Spaceship $a;
    private Spaceship $b;

    public function __construct(Spaceship $a, Spaceship $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function fight(): string {
        while ($this->a->isAlive() && $this->b->isAlive()) {
            $this->b->takeDamage($this->a->attack());
            if (!$this->b->isAlive()) return $this->a->getName();

            $this->a->takeDamage($this->b->attack());
            if (!$this->a->isAlive()) return $this->b->getName();
        }
        return "No winner";
    }
}
