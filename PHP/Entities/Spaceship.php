<?php

interface Fightable {
    public function attack(): int;
    public function takeDamage(int $damage): void;
    public function isAlive(): bool;
}


abstract class SpaceObject {
    protected string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }
}

class Spaceship extends SpaceObject implements Fightable {
    private int $hp;
    private int $attack;

    public function __construct(string $name, int $hp, int $attack) {
        parent::__construct($name);
        $this->hp = $hp;
        $this->attack = $attack;
    }

    public function attack(): int {
        return $this->attack;
    }

    public function takeDamage(int $damage): void {
        $this->hp -= $damage;
    }

    public function isAlive(): bool {
        return $this->hp > 0;
    }

    public function getHp(): int {
        return $this->hp;
    }

    public function getAttack(): int {
        return $this->attack;
    }
}
