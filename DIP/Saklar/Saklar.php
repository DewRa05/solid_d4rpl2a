<?php 
include_once "BarangElektronik.php";

class Saklar{
    private $item;
    private $kreatifan = false;
    public function __construct(BarangElektronik $item) {
        $this->item = $item;
    }

    public function berubah(): void {
        echo "Berubah<<br>";
    }
}
?>
