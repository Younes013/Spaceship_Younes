<?php 
class AmplifiersEntity {
    public array $Amplifiers = [];
    
    public function addAmplifier(Amplifier $amplifier) : void
    {
        $this->Amplifiers[] = $amplifier;
    }
    
    public function getAmplifiers() : array
    {
        return $this->Amplifiers;
    }
}

?>