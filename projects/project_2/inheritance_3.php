<?php

class River {
    public $name;

    public function setName( $name ) {
        $this->name = $name;
    }

    public function getName() {
        return "The river's name is ".$this->name.".";
    }
}

class FamousRiver extends River {
    public function describe() {
        return $this->name." is one of the most important rivers in Bangladesh.";
    }
}


$River1 = new FamousRiver();

$River1->setName("Padma");

echo $River1->getName()."<br />";
echo $River1->describe();


?>