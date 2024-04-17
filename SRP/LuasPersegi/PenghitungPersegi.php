<?php 
include_once "Persegi.php";

class PenghitungPersegi{
    public function hitungLuas(Persegi $persegi): int{
        return $persegi->getSisi();
    }
}
