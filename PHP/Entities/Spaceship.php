<?php

class Spaceship
{
    private string $name;
    private int $hp;
    private int $attack;

    public function __construct(string $name, int $hp, int $attack)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->attack = $attack;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHP(): int
    {
        return $this->hp;
    }

    public function getAttack(): int
    {
        return $this->attack;
    }

    public function isAlive(): bool
    {
        return $this->hp > 0;
    }

    public function takeDamage(int $damage): void
    {
        $this->hp -= $damage;

        if ($this->hp < 0) {
            $this->hp = 0;
        }
    }
}
