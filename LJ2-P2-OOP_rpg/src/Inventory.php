<?php

namespace Game;

/**
 * Class Inventory
 * Een simpele inventory voor characters.
 */
class Inventory {

    /**
     * @var string[] Lijst met items in de inventory.
     */
    private array $items = [];

    /**
     * Voeg een item toe aan de inventory.
     *
     * @param string $item Naam van het item
     * @return void
     */
    public function addItem(string $item): void {
        $this->items[] = $item;
    }

    /**
     * Verwijder een item uit de inventory.
     *
     * @param string $item Naam van het item
     * @return void
     */
    public function removeItem(string $item): void {
        $key = array_search($item, $this->items);
        if ($key !== false) {
            unset($this->items[$key]);
            // Herindexeer de array
            $this->items = array_values($this->items);
        }
    }

    /**
     * Haal alle items op uit de inventory.
     *
     * @return string[] Lijst van items
     */
    public function getItems(): array {
        return $this->items;
    }
}
