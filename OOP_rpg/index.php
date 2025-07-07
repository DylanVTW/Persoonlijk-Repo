<?php

require_once 'vendor/autoload.php';

use Game\Character;
use Game\Battle;
use Game\Inventory;
use Game\ItemList;
use Smarty\Smarty;
use Game\CharacterList;
use Game\DatabaseManager;
use Game\Mysql;
use Dotenv\Dotenv;
use Game\Item;
use Game\Warrior;
use Game\Mage;
use Game\Rogue;
use Game\Healer;

session_start();


$template = new Smarty();
$template->setTemplateDir(__DIR__ . '/templates');
$template->setCompileDir(__DIR__ . '/templates_c');

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// try {
//     $database = new Mysql(
//         $_ENV['DB_HOST'],
//         $_ENV['DB_NAME'],
//         $_ENV['DB_USER'],
//         $_ENV['DB_PASS']
//     );
//     DatabaseManager::setIntance($database);
// } catch (PDOException $error) {
//     $dberror = $error->getMessage();
// }


$characterList = $_SESSION['characterList'] ?? new CharacterList();
$page = $_GET['page'] ?? '';

$testSword = new Item("Test Sword", "Weapon", 10);
$testArmor = new Item("Test Armor", "Armor", 20);
$testPotion = new Item("Test Potion", "Potion", 5);

switch ($page) {
    case 'createCharacter':
        $template->display('createCharacterForm.tpl');
        break;
    case 'saveCharacter':
        $name = $_POST['name'];
        $role = $_POST['role'];
        $health = (int) $_POST['health'];
        $attack = (int) $_POST['attack'];
        $defense = (int) $_POST['defense'];
        $range = (int) $_POST['range'];

        $characterList = $_SESSION['characterList'] ?? new CharacterList();
        // Dynamisch character object aanmaken op basis van rol
        switch ($_POST['role']) {
            case 'Warrior':
                $character = new Warrior($name, $role, $health, $attack, $defense, $range);
                $character->setRage((int) ($_POST['rage'] ?? 0));
                break;
            case 'Mage':
                $character = new Mage($name, $role, $health, $attack, $defense, $range);
                $character->setMana((int) ($_POST['mana'] ?? 150));
                break;
            case 'Rogue':
                $character = new Rogue($name, $role, $health, $attack, $defense, $range);
                $character->setEnergy((int) ($_POST['energy'] ?? 100));
                break;
            case 'Healer':
                $character = new Healer($name, $role, $health, $attack, $defense, $range);
                $character->setSpirit((int) ($_POST['spirit'] ?? 200));
                break;
            default:
                $character = new Character($name, $role, $health, $attack, $defense, $range);
                break;
        }

        // Specifieke eigenschappen instellen voor Warrior en Mage
        if ($_POST['role'] == 'Warrior' && isset($_POST['rage'])) {
            $character->setRage($_POST['rage']);
        }

        if ($_POST['role'] == 'Mage' && isset($_POST['mana'])) {
            $character->setMana($_POST['mana']);
        }
        if ($_POST['role'] == 'Rogue' && isset($_POST['energy']) && $character instanceof Game\Rogue) {
            $character->setEnergy($_POST['energy']);
        }
        if ($_POST['role'] == 'Healer' && isset($_POST['spirit']) && $character instanceof Game\Healer) {
            $character->setSpirit($_POST['spirit']);
        }

        // Rest van de logica blijft ongewijzigd

        $characterList->addCharacter($character);
        $_SESSION['characterList'] = $characterList;

        header('Location: index.php?page=characterList');

        break;

    case 'listCharacters':
        $template->assign('characters', $characterList->getCharacters());
        $template->display('characterList.tpl');
        break;

    case 'viewCharacter':
        if (!empty($_GET['name'])) {
            $character = $characterList->getCharacter($_GET['name']);
            if ($character) {
                $template->assign('character', $character);
                $template->display('character.tpl');
            } else {
                $template->assign('message', 'Character not found.');
                $template->display('error.tpl');
            }
        } else {
            $template->assign('message', 'No character name provided.');
            $template->display('error.tpl');
        }
        break;
    case 'deleteCharacter':
        if (!empty($_GET['name'])) {
            $character = $characterList->getCharacter($_GET['name']);
            if ($character) {
                $characterList->removeCharacter($character);
                $template->assign('message', 'Character deleted successfully.');
            } else {
                $template->assign('message', 'Character not found.');
            }
        } else {
            $template->assign('message', 'No character name provided.');
        }
        $template->display('error.tpl');
        break;
    case 'battleForm':
        $characterList = $_SESSION['characterList'] ?? new CharacterList();
        $characters = $characterList->getCharacters();
        $template->assign('characters', $characters);
        $template->display('battleForm.tpl');
        break;

    case 'startBattle':
        $characterList = $_SESSION['characterList'] ?? new CharacterList();

        $name1 = $_POST['character1'] ?? '';
        $name2 = $_POST['character2'] ?? '';

        if (empty($name1) || empty($name2)) {
            $template->assign('error', 'One or both characters not found.');
            $template->display('error.tpl');
            break;
        }

        $character1 = $characterList->getCharacter($name1);
        $character2 = $characterList->getCharacter($name2);

        if (!$character1 || !$character2) {
            $template->assign('error', 'One or both characters not found.');
            $template->display('error.tpl');
            break;
        }

        $maxRounds = isset ($_POST['maxRounds']) ? (int) $_POST['maxRounds'] : 10;
        $battle = new Battle($character1, $character2, $maxRounds);

        $_SESSION['battle'] = $battle;

        $template->assign('battle', $battle);

        $template->display('battleResult.tpl');



        
        // if (empty($_POST['character1']) || empty($_POST['character2'])) {
        //     echo "bla";
        //     $template->assign('error', 'One or both characters not found.');
        //     $template->display('error.tpl');
        //     break;
        // }
        
        // $character1 = $characterList->getCharacter($_POST['character1']);
        // $character2 = $characterList->getCharacter($_POST['character2']);

        // if (!$character1 || !$character2) {
        //     $template->assign('error', 'One or both characters not found.');
        //     $template->display('error.tpl');
        //     break;
        // }
        
        // $battle = new Battle();
        // $maxRounds = isset($_POST['maxRounds']) ? (int) $_POST['maxRounds'] : 10;
        // $battle->changeMaxRounds($maxRounds);


        // $health1_before = $character1->getHealth();
        // $health2_before = $character2->getHealth();

        // // Start het gevecht
        // $battleLog = $battle->startFight($character1, $character2);

        // // Health na het gevecht
        // $health1_after = $character1->getHealth();
        // $health2_after = $character2->getHealth();



        // if ($character1->getHealth() > 0 && $character2->getHealth() <= 0) {
        //     $winner = $character1->getName();
        // } elseif ($character1->getHealth() > 0 && $character2->getHealth() <= 0) {
        //     $winner = $character2->getName();
        // } else {
        //     $winner = 'draw';
        // }
        // $battleSummary = $battleLog;
        // $template->assign('character1', $character1);
        // $template->assign('character2', $character2);
        // $template->assign('health1_before', $health1_before);
        // $template->assign('health2_before', $health2_before);
        // $template->assign('health1_after', $health1_after);
        // $template->assign('health2_after', $health2_after);
        // $template->assign('winner', $winner);
        // $template->assign('battleLog', $battleLog);
        // $template->display('battleResult.tpl');


        // $character1->setHealth($battle->getFighter1OriginalHealth());
        // $character2->setHealth($battle->getFighter2OriginalHealth());

        // $_SESSION['characterList'] = $characterList;
        break;

    case 'battleRound':
        if(!isset($_SESSION['battle']) || !$_SESSION['battle'] instanceof Battle)
        {
            $template->assign('error', 'No active battle found.');
            $template->display('error.tpl');
            break;
        }
        $battle = $_SESSION['battle'];

        $battle->executeTurn($battle->getFighter1(), $battle->getFighter2());

        $_SESSION['battle'] = $battle;

        $template->assign('battle', $battle);

        $template->display('battleResult.tpl');
        break;

    case 'resetHealth':
        if (!isset($_SESSION['battle']) || !$_SESSION['battle'] instanceof Battle) {
            $template->assign('error', 'No active battle found.');
            $template->display('error.tpl');
            break;
        }
        $battle = $_SESSION['battle'];
        $battle->endBattle();
        $_SESSION['battle'] = $battle;

        header('Location: index.php?page=battleForm');
        break;

    case 'testDatabase':
        if (DatabaseManager::getInstance()->testConnection()) {
            $template->assign('message', 'Database connection is working.');
        } else {
            $template->assign('message', 'Database connection failed.');
        }
        $template->display('testDatabase.tpl');
        break;
    case 'createItem':
        $template->display('createItem.tpl');
        break;
    case "saveItem":
        if (!empty($_POST['name']) && !empty($_POST['type']) && !empty($_POST['value'])) {
            $item = new Item($_POST['name'], $_POST['type'], $_POST['value']);
            if ($item->save()) {
                $template->assign('item', $item);
                $template->display('itemCreated.tpl');
            } else {
                $template->assign('error', 'Failed to save item');
                $template->display('error.tpl');
            }
        } else {
            $template->assign('error', 'Failed to save item');
            $template->display('error.tpl');
        }
        break;
    case 'listItem':
        $itemlist = new ItemList();
        $params = [];
        if (!empty($_POST['id'])) {
            $params['id'] = (int) $_POST['id'];
            $template->assign('selectedId', $_POST['id']);

        }
        if (!empty($_POST['type'])) {
            $params['type'] = $_POST['type'];
            $template->assign('selectedType', $_POST['type']);
        }

        if (isset($_POST['minValue']) && is_numeric($_POST['minValue'])) {
            $params['minValue'] = (float) $_POST['minValue'];
            $template->assign('selectedMinValue', $_POST['minValue']);
        }
        if (!empty($_POST['name'])) {
            $params['name'] = $_POST['name'];
            $template->assign('selectedName', $_POST['name']);
        }
        if (!empty($params)) {
            $itemList->loadByParams($params);
        } else {
            $itemList->loadAllFromDatabase();
        }
        $itemlist->loadAllFromDatabase();
        $template->assign('items', $itemlist->getItems());
        $template->assign('count', $itemlist->count());
        $template->display('itemList.tpl');
        break;
    case 'updateItem':
        if (empty($_GET['id'])) {
            $item = Item::loadFromDatabase((int) $_GET['id']);
            if ($item !== null) {
                $template->assign('item', $item);
                $template->display('updateItem.tpl');
            } else {
                $template->assign('error', 'Item not found.');
                $template->display('error.tpl');
            }

        } else {
            $template->assign('error', 'No item ID provided.');
            $template->display('error.tpl');
        }
        break;

    case 'saveUpdatedItem':
        if (!empty($_POST['name']) && !empty($_POST['type']) && !empty($_POST['value']) && !empty($_POST['id']))
            ;
        $item = new Item($_POST['name'], $_POST['type'], $_POST['value'], (int) $_POST['id']);
        if ($item->update()) {
            $template->assign('item', $item);
            $template->display('itemUpdated.tpl');
        } else {
            $template->assign('error', 'Failed to update item');
            $template->display('error.tpl');
        }
        break;
    case 'deleteItem':
        if (!empty($_GET['id'])) {
            $item = Item::loadFromDatabase((int) $_GET['id']);
            if ($item !== null) {
                $template->assign('item', $item);
                $template->display('deleteItemconfirm.tpl');
            } else {
                $template->assign('error', 'Item not found.');
                $template->display('error.tpl');
            }
        } else {
            $template->assign('error', 'No item ID provided.');
            $template->display('error.tpl');
        }
        break;
    case 'deleteItemConfirm':
        if (!empty($_POST['id'])) {
            $item = Item::loadFromDatabase((int) $_POST['id']);
            if ($item !== null) {
                if ($item->delete()) {
                    $template->assign('message', 'Item deleted successfully.');
                    $template->display('itemDeleted.tpl');
                } else {
                    $template->assign('error', 'Failed to delete item.');
                    $template->display('error.tpl');
                }
            } else {
                $template->assign('error', 'Item not found.');
                $template->display('error.tpl');
            }
        } else {
            $template->assign('error', 'No item ID provided.');
            $template->display('error.tpl');
        }

        break;

    default:
        $template->display('home.tpl');
        break;
}



// var_dump(DatabaseManager::getInstance());
$_SESSION['characterList'] = $characterList;



// echo  "<pre>";
// echo "Items in de inventory van {$fighter1->getName()}:\n";
// foreach ($fighter1->inventory->getItems() as $item) {
//     echo "- $item\n";
// }
// echo "</pre>";

// $fighter1->inventory->removeItem('Schild');

// echo  "<pre>";
// echo "Items in de inventory van {$fighter1->getName()} na verwijderen van het schild:\n";
// foreach ($fighter1->inventory->getItems() as $item) {
//     echo "- $item\n";
// }
// echo "</pre>";

// echo "<pre>";

// echo "=== Eerste gevecht ===\n\n";
// // Battle object aanmaken
// $battle1 = new Battle();
// $result = $battle1->startFight($fighter1, $fighter2);
// $battle1->changeMaxRounds(5); // Limiteer tot 5 rondes


// echo "\n--- Einde eerste gevecht ---\n\n";

// // ==================== //
// // Health resetten     //
// // ==================== //
// echo "Health resetten voor het volgende gevecht...\n";
// $fighter1->setHealth(100);
// $fighter2->setHealth(100);

// echo "Health Ligma: " . $fighter1->getHealth() . "\n";
// echo "Health Sigma: " . $fighter2->getHealth() . "\n\n";

// // ==================== //
// // Tweede gevecht      //
// // ==================== //
// echo "=== Tweede gevecht ===\n\n";

// $battle2 = new Battle();
// $result = $battle2->startFight($fighter1, $fighter2);
// $battle2->changeMaxRounds(10);


// echo "</pre>";

// Als er geen winnaar is, aantal rondes verhogen en opnieuw proberen

