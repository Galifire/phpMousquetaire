<?php

class Mousquetaire {

    private int $id;
    private string $name;
    private int $strength;
    private int $agility;
    private int $intelligence;
    private string $tribe;
    private string $class;

    public function __construct(int $id, string $name, int $strength, int $agility, int $intelligence, string $tribe, string $class) {
        $this->id = $id;
        $this->name = $name;
        $this->strength = $strength;
        $this->agility = $agility;
        $this->intelligence = $intelligence;
        $this->tribe = $tribe;
        $this->class = $class;
    }

    public function getId() : int {
        return $this->id;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getStrength() : int {
        return $this->strength;
    }

    public function getAgility() : int {
        return $this->agility;
    }

    public function getIntelligence() : int {
        return $this->intelligence;
    }

    public function getTribe() : string {
        return $this->tribe;
    }

    public function getClass() : string {
        return $this->class;
    }

    public function toString() : string {
        return "Id : " . $this->id . 
        ", Name : " . $this->name . 
        ", Strength : " . $this->strength . 
        ", Agility : " . $this->agility . 
        ", Intelligence : " . $this->intelligence . 
        ", Tribe : " . $this->tribe . 
        ", Class : " . $this->class;
    }
}

?>