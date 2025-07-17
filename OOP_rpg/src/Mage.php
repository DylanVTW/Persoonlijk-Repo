<?php

namespace Game;
class Mage extends Character
{
    // Alleen de specifieke property voor Mage
    private int $mana;
    private int $originalMana;



        public function __construct(string $name, string $role, int $health, int $attack, int $defense = 3, int $range = 5, int $mana = 150)
    {
        parent::__construct($name, $role, $health, $attack, $defense, $range);
        $this->mana = $mana; // Initialiseer mana
        $this->originalMana = $mana; // Bewaar de originele mana waarde
        $this->specialAttacks = ['Fireball', 'frostNova'];
    }
    
    // Getter voor mana
    public function getMana()
    {
        return $this->mana;
    }

    // Setter voor mana
    public function setMana($mana)
    {
        $this->mana = $mana;
    }

        public function getSummary()
    {
        $parentSummary = parent::getSummary();
        $manaInfo = "<br>Additionally, this Mage has {$this->mana} mana points.";
        return $parentSummary . "". $manaInfo; 
    }

    public function castFireball()
    {
        if ($this->mana < 30) {
            throw new \Exception("Not enough mana to cast Fireball.");
        }
        $modMessage = $this->modifyTemporaryStats(1.5, -0.2);
        $this->mana -= 30;
        return "Casted Fireball with {$this->tempAttack} attack, Defense reduced by 20%";
    }

        public function castFrostNova()
    {
        if ($this->mana < 45) {
            throw new \Exception("Not enough mana to perform FrostNova attack.");
        }

        $this->modifyTemporaryStats(0.4, 1.2);
        $this->mana -= 45;

        return "Casted FrostNova attack with {$this->tempAttack} power, Attack decreased by 60% and Defense increased by 20%";
    }

    public function executeSpecialAttack(string $attackName): string
    {
        switch ($attackName) {
            case 'Fireball':
                return $this->castFireball();
            case 'FrostNova':
                return $this->castFrostNova();
            default:
                return "Unknown special attack: {$attackName}";    
        }
    }

    public function resetAttributes(): void
    {
        $this->mana = $this->originalMana; // Reset mana naar de originele waarde
        $this->resetTempStats(); // Reset tijdelijke stats
    }
}


// ... overige methoden van Character ...

//     Identieke methoden:

// getName()
// getHealth()
// setHealth()
// getAttack()
// getDefense()
// getRange()
// getRole()
//     Identieke properties:

// $name
// $health
// $attack
// $defense
// $range
// $inventory
