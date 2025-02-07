<?php
// Abstract Class Example

abstract class Institution {
    protected $location;

    public function __construct($location) {
        $this->location = $location;
    }

    // Abstract method (must be implemented by subclasses)
    abstract public function getDetails();

    // Concrete method (common functionality)
    public function getLocation() {
        return "Location: " . $this->location;
    }
}

class RUET extends Institution {
    public function getDetails() {
        return "RUET is an engineering university specializing in technology and innovation.";
    }
}

// Example Usage
$ruet = new RUET("Rajshahi");
echo $ruet->getDetails() . "<br>";
echo $ruet->getLocation() . "<br>";
?>
