<?php 

class District {
    private $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName () {
        return $this->name;
    }
}

$District1 = new District();
$District1->setName("Dhaka");

echo "The District is: ".$District1->getName().".";

?>