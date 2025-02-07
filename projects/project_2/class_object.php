<?php

class Car {
    public $brand;
    public $color;

    // public function __construct($brand, $color) {
    //     $this->brand = $brand;
    //     $this->color = $color;
    // }

    // Setter
    public function setDetails($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Getter
    public function display() {
        return "This car is a ".$this->color." ".$this->brand.".";
    }
}


$Car1 = new Car();
$Car1->setDetails("Toyota", "blue");

echo $Car1->display();
echo "<br />".$Car1->brand;

?>