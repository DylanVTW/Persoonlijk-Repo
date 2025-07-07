<?php

namespace Game;

class Item
{
    private ?int $id;
    private string $name;
    private string $type;
    private float $value;

    public function __construct(string $name, string $type, float $value, ?int $id = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->id = $id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getType(): string
    {
        return $this->type;
    }
    public function getValue(): float
    {
        return $this->value;
    }
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function toString(): string
    {
        return "name: . {$this->getName()} . type: . {$this->getType()} .  value: . {$this->getValue()}";
    }

    public function toDatabaseArray(): array
    {
        return [
            'name' => $this->getName(),
            'type' => $this->getType(),
            'value' => $this->getValue(),
        ];
    }

    public function save(): bool
    {
        try {
            $databse = DatabaseManager::getInstance();
            if ($databse === null) {
                return false;
            }


            $itemData = $this->toDatabaseArray();
            $insertedId = $databse->insert('item', $itemData);
            $this->setId($insertedId);
            return true;
        } catch (\PDOException $error) {
            return false;
        }


    }
    public function update(): int
    {
        try {
            if ($this->id === null) {
                return false;
            }
            $database = DatabaseManager::getInstance();
            if ($database === null) {
                return false;
            }
            $itemData = $this->toDatabaseArray();
            $affectedRows = $database->update('item', $itemData, ["id" => $this->id]);
            return $affectedRows > 0;
        } catch (\PDOException $error) {
            throw new \PDOException($error->getMessage());
        }
    }

    public function delete(): bool
    {
        try {
            if ($this->id === null) {
                return false;
            }
            $database = DatabaseManager::getInstance();
            if ($database === null) {
                return false;
            }
            $affectedRows = $database->delete('item', ['id' => $this->id]);
            return $affectedRows > 0;
        } catch (\PDOException $error) {
            throw new \PDOException("De delete query is mislukt: " . $error->getMessage());
        }
    }
    public static function loadFromDatabase(int $id): ?item
    {
        try {
            $database = DatabaseManager::getInstance();
            if ($database === null) {
                return null;
            }

            $result = $database->select(['item' => ['*']], ['id' => $id]);
            if (empty($result)) {
                return null;
            }
            $row = $result[0];

            return new Item((int) $row['name'], $row['type'], (float) $row['value'], $row['id']);

        } catch (\PDOException $error) {
            throw new \PDOException("De select query is mislukt: " . $error->getMessage());
        }
    }


}