<?php
namespace Game;

/**
 * Class CharacterList
 * Een lijst van characters.
 */
class CharacterList
{

    /**
     * @var Character[] Lijst met characters.
     */
    private array $characters = [];


    /**
     * Voegt een character toe aan de lijst.
     * @param Character $character Het character dat toegevoegd moet worden.
     * @return string
     */

    public function addCharacter(Character $character): string
    {
        $this->characters[] = $character;
        return "Character {$character->getName()} was added to the list.";
    }



    /**
     * Haalt de lijst met characters op.
     * @return Character[]
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }

    /**
     * Haalt een character op uit de lijst.
     * @param string $name
     * @return Character|null
     */

    public function getCharacter(string $name): ?Character
    {
        foreach ($this->characters as $character) {
            if ($character instanceof Character && $character->getName() === $name) {
                return $character;
            }
        }
         return null;
    }

    public function removeCharacter(Character $character): string
    {
        $name = $character->getName();
        $role = $character->getRole();
        $key = array_search($character, $this->characters);
        if ($key !== false){
            unset($this->characters[$key]);
            $this->characters = array_values($this->characters);
            
        \Game\Character::removeCharacterFromStats($name, $role);

        return "Character {$character->getName()} was removed from the list.";
        }
            
            return "Character {$character->getName()} was not found in the list.";
        }
        
    

}