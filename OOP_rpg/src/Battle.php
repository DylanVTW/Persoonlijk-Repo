<?php

namespace Game;

use Game\Character;
use PHPStan\Type\VoidType;

class Battle {
    
    /**
     * De battle log met alle gebeurtenissen.
     * 
     * @var string
     */
    private array $battleLog = [];

    /**
     * Het maximaal aantal rondes.
     * 
     * @var int
     */
    private int $maxRounds = 10;

    /**
     * Het huidige ronde nummer.
     * 
     * @var int
     */
    private int $roundNumber = 1;


    private int $fighter1OriginalHealth = 100;
    private int $fighter2OriginalHealth = 100;

    private Character|Warrior|Mage|Rogue|Healer $fighter1;
    private Character|Warrior|Mage|Rogue|Healer $fighter2;


    public function __construct(
        Character|Warrior|Mage|Rogue|Healer $fighter1,
        Character|Warrior|Mage|Rogue|Healer $fighter2,
        int $maxRounds = 10)
    {
        $this->fighter1 = $fighter1;
        $this->fighter2 = $fighter2;
        $this->maxRounds = $maxRounds;
        $this->battleLog[] = "Het gevecht is gestart";
        $this->fighter1OriginalHealth = $fighter1->getHealth();
        $this->fighter2OriginalHealth = $fighter2->getHealth();
    }

    /**
     * Geeft de battle log terug.
     * 
     * @return array
     */
    public function getBattleLog(): array {
        return $this->battleLog;
    }
    

    /**
     * Geeft het maximale aantal rondes terug.
     * 
     * @return int
     */
    public function getMaxRounds(): int {
        return $this->maxRounds;
    }

    /**
     * Geeft het huidige ronde nummer terug.
     * 
     * @return int
     */
    public function getRoundNumber(): int {
        return $this->roundNumber;
    }

    public function getFighter1(): Character|Warrior|Mage|Rogue|Healer {
        return $this->fighter1;
    }
    public function getFighter2(): Character|Warrior|Mage|Rogue|Healer {
        return $this->fighter2;
    }

    public function getFighter1OriginalHealth(): int {
        return $this->fighter1OriginalHealth;
    }

    public function getFighter2OriginalHealth(): int {
        return $this->fighter2OriginalHealth;
    }

    /**
     * Past het maximale aantal rondes aan.
     * 
     * @param int $rounds Het nieuwe maximum aantal rondes.
     * @return void
     */
    public function changeMaxRounds(int $rounds): void {
        $this->maxRounds = $rounds;
    }


    private function executeAttack(Character $attacker, Character $defender)
    {
        $damage = $this->calculateDamage($attacker, $defender);

        if(method_exists($defender, 'takeDamage')){
            $defender->takeDamage($damage);
        } else {
            $defender->setHealth($defender->getHealth() - $damage);
        }

        $this->battleLog[] = "Ronde {$this->roundNumber}: <strong>{$attacker->getName()}</strong> valt aan en doet <strong>{$damage}</strong> schade aan <strong>{$defender->getName()}</strong>.";
        $this->battleLog[] = "{$defender->getName()} heeft nu <strong>{$defender->getHealth()}</strong> health.";

        if ($defender->getHealth() <= 0) 
        {
            $this->battleLog[] = "<strong>🏆 {$attacker->getName()} heeft gewonnen!</strong>";
            return $this->battleLog;
        }
    }

    public function executeTurn($attacker, $defender): string
    {
        $damage = $this->calculateDamage($attacker, $defender);

        if (method_exists($defender, 'takeDamage')) {
            $defender->takeDamage($damage);
        } else {
            $defender->setHealth($defender->getHealth() - $damage);
        }

        $description = "Ronde {$this->roundNumber}: <strong>{$attacker->getName()}</strong> valt aan en doet <strong>{$damage}</strong> schade aan <strong>{$defender->getName()}</strong>.";
         "{$defender->getName()} heeft nu <strong>{$defender->getHealth()}</strong> health.<br>";

        $this->battleLog[] = $description;

        if ($defender->getHealth() <=0)
        {
            $ko = "<strong>🏆 {$attacker->getName()} heeft gewonnen!</strong><br>";
            $this->battleLog[] = $ko;
            $description .= $ko;
        }
        return $description;
    }

    public function endBattle(): void
    {
        $this->fighter1->setHealth($this->fighter1OriginalHealth);
        $this->fighter2->setHealth($this->fighter2OriginalHealth);
        $this->battleLog[] = "Het gevecht is beëindigd.";
    }

    /**
     * Start het gevecht tussen twee characters.
     * 
     * @param Character $character1
     * @param Character $character2
     * @return string Resultaat van het gevecht.
     */
    public function startFight(Character $character1, Character $character2): string {
        $this->battleLog [] = "Het gevecht tussen <strong> {$character1->getName()}</strong> en <strong>{$character2->getName()}</strong> is begonnen!<br><br>";

        while ($character1->getHealth() > 0 && $character2->getHealth() > 0 && $this->roundNumber <= $this->maxRounds) {
            // character 1 valt aan
            $damage1 = $this->calculateDamage($character1, $character2);
            $character2->setHealth($character2->getHealth() - $damage1);
            $this->logAttack($character1, $character2, $damage1);

            if ($character2->getHealth() <= 0) {
                $this->battleLog [] = "<strong>🏆 {$character1->getName()} heeft gewonnen!</strong><br>";
                return $this->battleLog;
            }

            // character 2 valt aan
            $damage2 = $this->calculateDamage($character2, $character1);
            $character1->setHealth($character1->getHealth() - $damage2);
            $this->logAttack($character2, $character1, $damage2);

            if ($character1->getHealth() <= 0) {
                $this->battleLog [] = "🏆 <strong>{$character2->getName()} heeft gewonnen!</strong><br>";
                return $this->battleLog;
            }

            $this->roundNumber++;
            $this->battleLog []=  "<br>";
        }

        if ($this->roundNumber > $this->maxRounds) {
            $this->battleLog [] = "<strong>⏳ Het maximum aantal rondes is bereikt. Het gevecht is geëindigd zonder winnaar.</strong><br>";
        }

        return $this->battleLog;
    }

    /**
     * Bereken de schade van een aanval met een random factor (70% - 100%).
     * 
     * @param Character $attacker
     * @param Character $defender
     * @return int De berekende schade.
     */
    private function calculateDamage(Character $attacker, Character $defender): int {
        $randomFactor = mt_rand(70, 100) / 100; // Random factor tussen 0.7 en 1.0
        $damage = $attacker->getAttack() * $randomFactor - $defender->getDefense();
        return max(0, (int) round($damage)); // Schade is altijd minimaal 0
    }

    /**
     * Logt een aanval in de battleLog.
     * 
     * @param Character $attacker
     * @param Character $defender
     * @param int $damage
     * @return void
     */
    private function logAttack(Character $attacker, Character $defender, int $damage): void {
        $this->battleLog [] = "Ronde {$this->roundNumber}: <strong>{$attacker->getName()}</strong> valt aan en doet <strong>{$damage}</strong> schade aan <strong>{$defender->getName()}</strong>.<br>";
        $this->battleLog [] = "{$defender->getName()} heeft nu <strong>{$defender->getHealth()}</strong> health.\n\n";
    }
}
