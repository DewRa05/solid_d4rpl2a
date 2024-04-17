<?php 
include_once "TipePembayaran.php";

class Debit implements TipePembayaran{
    public function memprosesPembayaran(): void{
        echo "Melakukan pembayaran dengan Debit<br>";
    }
}