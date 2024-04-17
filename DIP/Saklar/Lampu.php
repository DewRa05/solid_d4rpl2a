<?php 
include_once "BarangElektronik.php";

class Lampu implements BarangElektronik{
    public function beroprasi(): void{
        echo "Sedang Beroprasi<br>";
    }
    public function berhenti(): void{
        echo "Sedang Berhenti<br>";
    }
}