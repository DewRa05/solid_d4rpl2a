<?php 
include_once "FiturFax.php";
include_once "FiturCetak.php";
include_once "FiturScan.php";

class PrinterFlagShip implements FiturFax, FiturCetak, FiturScan{
    public function cetakKertas(): void{
        echo "kertas dicetak<br>";
    }
    public function terimaFax(): void{
        echo "Terima Fax<br>";
    }
    public function scanKertas(): void{
        echo "Scan Kertas";
    }
}