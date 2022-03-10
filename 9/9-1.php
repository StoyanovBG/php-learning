<?php
class Donation {

    private $name;
    private $amount;
    static $totalDonated = 0;
    static $numberOfDonors = 0;

     function __construct($name, $amount) {
        $this->name = $name;
        $this->amount = $amount;
        self::$totalDonated += $amount;
        self::$numberOfDonors++;
    }
    
        function info(){
        $percision = 2;
        $percent = $this->amount / Donation::$totalDonated * 100;
        echo $this->name." donated ".$this->amount." (".round($percent, $percision).")";
    }
}

    $donors = array(new Donation("Nikola", 85.00),new Donation("Mitko", 50.00),new Donation("Emily", 90.00),new Donation("Iliana", 65.00));
    foreach ($donors as $value){
        echo $value->info( )."<br>";
    }

    $total = Donation::$totalDonated;
    $number = Donation::$numberOfDonors;
    echo "Total Donations  = ".$total."<br>";
    echo "Number of Donors = ".$number;

?>