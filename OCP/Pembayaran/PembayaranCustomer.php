<?php 
include_once "TipePembayaran.php";

class PembayaranCustomer {


    public function menerimaPembayaran(TipePembayaran $tipe): void{
        echo "Pembayaran Diterima<br>";
    }
}
?>
