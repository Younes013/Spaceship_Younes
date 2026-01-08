<?php 
class Spells
{
    public string $Name;
    public int $Damage;
    public int $ManaCost;

    public function __construct(string $Name, int $Damage, int $ManaCost)
    {
        $this->Name = $Name;
        $this->Damage = $Damage;
        $this->ManaCost = $ManaCost;
    }
}

?>