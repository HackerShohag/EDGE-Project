<?php
// Exception Handling Example
class AdmissionException extends Exception {}

class RUET {
    private $totalSeats = 100;

    public function applyForAdmission($applicants) {
        if ($applicants > $this->totalSeats) {
            throw new AdmissionException("Number of applicants exceeds available seats!");
        } else {
            echo "Application successful! Seats remaining: " . ($this->totalSeats - $applicants) . "\n";
        }
    }
}


try 
{
    $ruet = new RUET();
    $ruet->applyForAdmission(120); // Exceeds available seats, will throw an exception
}

catch (AdmissionException $e) 
{
    echo "Admission Error: " . $e->getMessage() . "<br>";
}

finally 
{
    echo "Admission process completed.\n";
}
?>
