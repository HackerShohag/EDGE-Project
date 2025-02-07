<?php
// Interface Example

interface Institution {
    public function getDetails();
}

interface Ranking {
    public function getRank();
}

class RUET implements Institution, Ranking {
    public function getDetails() {
        return "RUET is renowned for engineering and technology education in Rajshahi.";
    }

    public function getRank() {
        return "RUET is ranked among the top engineering universities in Bangladesh.";
    }
}

// Example Usage
$ruet = new RUET();
echo $ruet->getDetails() . "<br>";
echo $ruet->getRank() . "<br>";
?>
