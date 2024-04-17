<?php 
include_once "FiturScan.php";
include_once "FiturCetak.php";

class PrinterMidRange implements FiturCetak, FiturScan{
    public function cetakKertas(): void{
        echo "ketas berhasil dicetak di printer Mid Range<br>";
    }
    public function scanKertas(): void{
        echo "Kertas Berhasil di Scann oleh Printer Mid Range<br>";
    }
}