<?php
// Polymorphism with Method Overriding

class Institution {
    public function getDetails() {
        return "This is an institution in Bangladesh.";
    }
}

class RUET extends Institution {
    public function getDetails() {
        return "RUET is an engineering university located in Rajshahi.";
    }
}

// Example Usage
$institution = new Institution();
echo $institution->getDetails() . "<br>";

$ruet = new RUET();
echo $ruet->getDetails() . "<br>";
?>
