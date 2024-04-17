<?php 
include_once "Shape3Dimensi.php";
include_once "Shape2Dimensi.php";

class Kubus implements Shape2Dimensi, Shape3Dimensi{
    public Function calculateArea(): void{
        echo "Calculate Area Kubus<br>";
    }
    public function calculateVolume(): void{
        echo "Calculate Volume Kubus<br>";
    }
}