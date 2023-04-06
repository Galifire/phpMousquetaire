<?php

class Magician extends Characters implements MagicUser {

    private null|int $id;
    private null|string $name;
    private null|int $strength;
    private null|int $agility;
    private null|int $intelligence;
    private string $class = "magician";

    /**
     * Magician constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * @return int
     */
    public function getId() : int {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getName() : null|string {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name) : void {
        $this->name = $name;
    }

    /**
     * @return null|int
     */
    public function getStrength() : null|int {
        return ($this->getAgility() + $this->getIntelligence()) / 1.75;
    }

    /**
     * @return null|int
     */
    public function getAgility() : null|int {
        return $this->agility;
    }

    /**
     * @param int $agility
     */
    public function setAgility(int $agility) : void {
        $this->agility = $agility;
    }

    /**
     * @return null|int
     */
    public function getIntelligence() : null|int {
        return $this->intelligence;
    }

    /**
     * @param int $intelligence
     */
    public function setIntelligence(int $intelligence) : void {
        $this->intelligence = $intelligence;
    }

    /**
     * @return string
     */
    public function getClass() : null|string {
        return $this->class;
    }

    /**
     * @param string $class
     */
    public function setClass(string $class) : void {
        $this->class = $class;
    }

    /**
     * @return string
     */
    public function toString() : string {
        return "Id : " . $this->id . 
        ", Name : " . $this->name . 
        ", Strength : " . $this->strength . 
        ", Agility : " . $this->agility . 
        ", Intelligence : " . $this->intelligence .
        ", Class : " . $this->class;
    }
}