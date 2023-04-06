<?php

require_once('../Model/Characters.php');

class Controller extends PDO {

    /**
     * Controller constructor.
     * @throws PDOException
     */
    public function __construct() {}
    function connect() : PDO {
        $user = 'pdo_user';
        $pwd = '123+aze';
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=PDO;charset=utf8', $user, $pwd);
        } catch (PDOException $e) {
            echo $e->getCode() . ' ' . $e->getMessage();
        }
        return $dbh;
    }
    
    /**
     * @return void
     * Adds the script to create the base
     */
    function addScript() : void {
        $script = file_get_contents('../Model/create_base.sql');
        try {
            $dbh = $this->connect();
            $sth = $dbh->prepare($script);
            $sth->execute();
            $dbh->commit();
        } catch(PDOException $e) {
            echo $e->getCode() . ' ' . $e->getMessage();
            echo 'Failed to add script !';
            $dbh->rollback();
        }
    }

    /**
     * @return void
     * Gets all the characters from the database
     */
    public function getAllCharacters() : Array {
        $chars = array();
        $sql = "SELECT * FROM characters";
        $connection = $this->connect();
        $sth = $connection->prepare($sql);
        $sth->execute();
        $characters = $sth->fetchAll(PDO::FETCH_CLASS, 'Characters');
        return $characters;
    }

    /**
     * @param string $name
     * @return Characters
     * Gets a character from the database by its name
     */
    public function getCharacterByName(string $name) : Characters {
        $sql = "SELECT * FROM characters WHERE name = :name";
        $connection = $this->connect();
        $sth = $connection->prepare($sql);
        $sth->execute(array(':name' => $name));
        $character = $sth->fetchObject('Characters');
        return $character;
    }

    /**
     * @param string $name
     * @return void
     * Updates a character's class from the database by its name
     */
    public function updateClassByName(string $name, string $newClass) : void {
        $sql = "UPDATE characters SET class = :newClass WHERE name = :name";
        $connection = $this->connect();
        $sth = $connection->prepare($sql);
        $sth->execute(array(':name' => $name, ':newClass' => $newClass));
        $connection->commit();
    }

    /**
     * @param string $name
     * @return void
     * Inserts a character from the database from an object
     */
    public function addCharacter(Characters $character) : void {
        $sql = "INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES (:name, :strength, :agility, :intelligence, :tribe, :class)";
        $connection = $this->connect();
        $sth = $connection->prepare($sql);
        $sth->execute(array(':name' => $character->getName(), ':strength' => $character->getStrength(), ':agility' => $character->getAgility(), ':intelligence' => $character->getIntelligence(), ':tribe' => $character->getTribe(), ':class' => $character->getClass()));
        $connection->commit();
    }

    /**
     * @param array $characters
     * @return void
     * Inserts multiple characters from the database from an array of objects
     */
    public function addCharacters(Array $characters) : void {
        $sql = "INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES (:name, :strength, :agility, :intelligence, :tribe, :class)";
        $connection = $this->connect();
        $sth = $connection->prepare($sql);
        foreach($characters as $c) {
            $sth->execute(array(':name' => $c->getName(), ':strength' => $c->getStrength(), ':agility' => $c->getAgility(), ':intelligence' => $c->getIntelligence(), ':tribe' => $c->getTribe(), ':class' => $c->getClass()));
        }
        $connection->commit();
    }

    /**
     * @param string $name
     * @return void
     * Switches warriors to mages, and mages to warriors
     */
    public function invertClasses() : void {
        $sql = "UPDATE characters SET class = IF(class = 'Mage', 'Warrior', 'Mage')";
        $connection = $this->connect();
        $sth = $connection->prepare($sql);
        $sth->execute();
        $connection->commit();
    }
    
}


?>