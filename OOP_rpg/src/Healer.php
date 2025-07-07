<?php

namespace Game;

class Healer extends Character{

private int $spirit;

    public function __construct(string $name, string $role, int $health, int $attack, int $defense = 6, int $range = 3, int $spirit = 200)
    {
        parent::__construct($name, $role, $health, $attack, $defense, $range);
        $this->spirit = $spirit; // Initialiseer spirit
    }

public function getSpirit(): int
{
    return $this->spirit;
}

public function setSpirit(int $spirit): void
{
    $this->spirit = $spirit;
}

    public function getSummary()
    {
        $parentSummary = parent::getSummary();
        $spiritInfo = "<br>Additionally, this warrior has {$this->spirit} spirit points.";
        return $parentSummary . "". $spiritInfo; 
    }

public function performHealingPrayer(): ?string
{
    if ($this->spirit < 30) {
        throw new \Exception("Not enough spirit to perform healing prayer.");
    }
    
    $newHealth = $this->getHealth() + 20;
        if ($newHealth > 100) {
            $newHealth = 100;
        }
        $this->setHealth($newHealth);
    
    $modMessage = $this->modifyTemporaryStats(0, 2.);
    
    $this->spirit -= 30;
    
    return "Performed healing prayer with {$this->tempAttack} power, Defense increased by 20%";
}
}