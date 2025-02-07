<?php
// Multilevel Inheritance Example

class Country {
    protected $name = "Bangladesh";

    public function getName() {
        return $this->name;
    }
}

class Division extends Country {
    protected $divisionName = "Rajshahi";

    public function getDivisionName() {
        return $this->divisionName;
    }
}

class Institution extends Division {
    private $institutionName = "RUET";

    public function getInstitutionName() {
        return $this->institutionName;
    }
}

// Example Usage
$institution = new Institution();
echo "Country: " . $institution->getName() . "<br>";
echo "Division: " . $institution->getDivisionName() . "<br>";
echo "University: " . $institution->getInstitutionName() . "<br>";
?>
