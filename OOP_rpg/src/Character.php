<?php

namespace Game;
class Character
{
    // Basis properties als private properties
    private string $name;
    private string $role;
    private int $health;
    protected int $attack;
    protected int $defense;
    private int $range;
    private array $inventory;

    protected int $tempAttack = 0;

    protected int $tempDefense = 0;

    // Constructor vervangen door setCharacter methode
    public function __construct($name, $role, $health, $attack, $defense, $range)
    {
        $this->name = $name;
        $this->role = $role;
        $this->health = $health;
        $this->attack = $attack;
        $this->defense = $defense;
        $this->range = $range;
        $this->inventory = []; 
    }

    // Getter voor Inventory
    public function getInventory()
    {
        return $this->inventory;
    }

    // Getters voor alle properties
    public function getName()
    {
        return $this->name;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function getAttack()
    {
        return $this->attack + $this->tempAttack;
    }

    public function getDefense()
    {
        return $this->defense + $this->tempDefense;
    }

    public function getRange()
    {
        return $this->range;
    }

    // Setters voor alle properties
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function setHealth($health)
    {
        $this->health = $health;
    }

    public function setAttack($attack)
    {
        $this->attack = $attack;
    }

    public function setDefense($defense)
    {
        $this->defense = $defense;
    }

    public function setRange($range)
    {
        $this->range = $range;
    }

    public function resetTempStats()
    {
        $this->tempAttack = 0;
        $this->tempDefense = 0;
    }

    protected function modifyTemporaryStats(int $attackMod, int $defenseMod)
    {
        $this->tempAttack += $attackMod;
        $this->tempDefense += $defenseMod;

        return "Temporary stats modified: Attack +{$attackMod}, Defense +{$defenseMod}";
    }

    public function getSummary()
    {
        return "Name: {$this->name}, Role: {$this->role}, Health: {$this->health}, Attack: {$this->getAttack()}, Defense: {$this->getDefense()}, Range: {$this->range}";
    }

}

?>