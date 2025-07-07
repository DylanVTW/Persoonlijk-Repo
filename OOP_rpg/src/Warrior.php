<?php
namespace Game;

class Warrior extends Character
{
    // Alleen de specifieke property voor Warrior
    private $rage;

    public function __construct(string $name, string $role, int $health, int $attack, int $defense, int $range, int $rage = 0)
    {
        parent::__construct($name, $role, $health, $attack, $defense, $range);
        $this->rage = $rage; // Initialiseer rage
    }

    // Getter voor rage
    public function getRage()
    {
        return $this->rage;
    }

    // Setter voor rage
    public function setRage($rage)
    {
        $this->rage = $rage;
    }

    public function getSummary()
    {
        $parentSummary = parent::getSummary();
        $rageInfo = "<br>Additionally, this Warrior has {$this->rage} rage points.";
        return $parentSummary . "". $rageInfo; 
    }

    public function performRageAttack()
    {
        if ($this->rage < 25) {
            throw new \Exception("Not enough rage to perform rage attack.");
        }

        $modMessage = $this->modifyTemporaryStats(0.75, -0.3);

        $this->rage -= 25;

        return "Performed rage attack with {$this->tempAttack} power, Defense reduced by 30%";
    }
}




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
