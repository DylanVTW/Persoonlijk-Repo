<?php

namespace Game;
class Mage extends Character
{
    // Alleen de specifieke property voor Mage
    private int $mana;



        public function __construct(string $name, string $role, int $health, int $attack, int $defense = 3, int $range = 5, int $mana = 150)
    {
        parent::__construct($name, $role, $health, $attack, $defense, $range);
        $this->mana = $mana; // Initialiseer mana
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
