<?php

class City {
    public $name;
    public $populator;

    public function __construct($name, $populator) {
        $this->name = $name;
        $this->populator = $populator;
    }

    public function displayDetils() {
        return "The city of ".$this->name." has a population of ".$this->populator." people.";
    }
}

$City1 = new City("Rajshai", 10000000);
echo $City1->displayDetils();

?>