<?php 
include_once "TipePembayaran.php";

class Kredit implements TipePembayaran {
    public function memprosesPembayaran(): void {
        echo "Melakukan pembayaran dengan Kredit<br>";
    }
}