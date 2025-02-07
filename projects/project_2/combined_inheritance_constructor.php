<?php

class City {
    public $name;
    public $population;

    public function __construct($name, $population) {
        $this->name = $name;
        $this->population = $population;
    }

    public function displayDetails () {
        return "City: ".$this->name." has a population of ".$this->population." people.";
    }
}


class HistoricalCity extends City {
    public $historicalImportance;

    public function __construct($name, $population, $historicalImportance) {
        parent::__construct($name, $population);
        $this->historicalImportance = $historicalImportance;
    }

    public function displayFullDetails() {
        return $this->displayDetails()." Historical Importance: ".$this->historicalImportance;
    }
}

$City1 = new HistoricalCity("Rajshahi", 10000000, "Known for it's mangoes and historical significance.");
echo $City1->displayFullDetails();

?>