<?php 
class Spaceship
{

public string $Name;

public int $Length;

public int $HP;

public int $Attack;

// 

public function __construct(string $Name, int $Length, int $HP, int $Attack)
{
   $this->Name = $Name;
   $this->Length = $Length;
   $this->HP = $HP;
   $this->Attack = $Attack;
}

// 

public function __getName() : string
{
   return $this->Name;
}

// 

public function __setName(string $Name) : void{
   $this->Name = $Name;
}



public function __getLength() : string
{
   return $this->Name;
}

// 

public function __setLength(string $Name) : void{
   $this->Name = $Name;
}



public function __getHP() : string
{
   return $this->Name;
}

// 

public function __setHP(string $Name) : void{
   $this->Name = $Name;
}



public function __getAttack() : string
{
   return $this->Name;
}

// 

public function __setAttack(string $Name) : void{
   $this->Name = $Name;
}
}

?>
