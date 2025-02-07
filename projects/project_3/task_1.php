<?php 

class RankError extends Exception {
    public function __construct($message = "") {
        parent::__construct($message);
    }

    public function errorMessage() {
        return "<p style='color:red;'>Error: " . $this->getMessage()."</p>";
    }
}

abstract class Institution {
    public $name;
    public $location;
    public $rank;

    public function __construct($name, $location, $rank) {
        $this->name = $name;
        $this->location = $location;
        if ($rank < 1 || $rank > 5) {
            throw new RankError("Invalid rank! Please enter a rank between 1 and 5.");
        }
        $this->rank = $rank;
    }

    abstract public function getDetails();
}

interface Department {
    public function setDepartments($departments);
    public function getDepartments();
}

class EngineeringInstitute extends Institution implements Department {
    
    protected $departments;

    public function __construct($name, $location, $rank) {
        parent::__construct($name, $location, $rank);
    }

    public function getDetails () {
        return $this->name . " is located in " . $this->location . " and is ranked " . $this->rank . ".";
    }

    public function setDepartments($departments) {
        $this->departments = $departments;
    }

    public function getDepartments() {
        return $this->departments;
    }
}


try {
    $ruet = new EngineeringInstitute("RUET", "Rajshahi", 3);
    $ruet->setDepartments(['CSE', 'EEE', 'ME', 'CE', 'ETE']);

    echo "Institution: " . $ruet->name . "<br><br>";
    echo $ruet->getDetails() . "<br>";
    echo "Departments: " . implode(", ", array: $ruet->getDepartments()) . ".<br>";
    echo "-----------------------------------<br>";

} catch (RankError $e) {
    echo $e->errorMessage();
}

echo "<br><br><br><br>Exception: CUET<br>";
try {
    $cuet = new EngineeringInstitute("CUET","Chittagong", 6);
    $cuet->setDepartments(['CSE', 'EEE', 'ME', 'CE', 'ETE']);
    echo 'Institute: '. $cuet->name . '<br>';
    echo $cuet->getDetails() . '<br>';
    echo 'Departments: ' . implode(", ", $cuet->getDepartments()) . '.<br>';
    echo '-----------------------------------<br>';
} catch (RankError $e) {
    echo $e->errorMessage();
}

?>