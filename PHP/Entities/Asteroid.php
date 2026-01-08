<?php 
class Asteroid
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

public function __getLength() : int
{
   return $this->Length;
}

// 
public function __setLength(int $Length) : void{
   $this->Length = $Length;
}

public function __getHP() : int
{
   return $this->HP;
}

// 
public function __setHP(int $HP) : void{
   $this->HP = $HP;
}

public function __getAttack() : int
{
   return $this->Attack;
}

// 
public function __setAttack(int $Attack) : void{
   $this->Attack = $Attack;
}
}

?>