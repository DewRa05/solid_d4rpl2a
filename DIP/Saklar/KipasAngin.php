<?php 
include_once "BarangElektronik.php";

class KipasAngin implements BarangElektronik{
    public function beroprasi(): void{
        echo "Kipaas Angin Sedang Beroprasi<br>";
    }
    public function berhenti(): void{
        echo "Kipas Angin Sedang Berhenti<br>";
    }
}