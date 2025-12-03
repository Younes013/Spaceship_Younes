<?php 
class AmplifiersEntity {
    public array $Amplifiers = [];
    
    public function addAmplifier($amplifier) : void
    {
        $this->Amplifiers[] = $amplifier;
    }
    
    public function getAmplifiers() : array
    {
        return $this->Amplifiers;
    }
public function __construct(array $amplifiers = [])
    {
        $this->Amplifiers = $amplifiers;
    }

    public function __getAmplifiers() : array
    {
        return $this->Amplifiers;
    }

    public function __setAmplifiers(array $amplifiers) : void
    {
        $this->Amplifiers = $amplifiers;
    }
}

?>