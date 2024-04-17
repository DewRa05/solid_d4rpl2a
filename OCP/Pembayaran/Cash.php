<?php 
include_once "TipePembayaran.php";

class Cash implements TipePembayaran{
    public function memprosesPembayaran(): void{
        echo "Melakukan pembayaran dengan Cash<br>";
    }
}