<?php 
include_once "MahasiswaView.php";

$mahasiswa = new Mahasiswa(2205009, "Dewi Ramdani");
$mahasiswaview = new MahasiswaView();
echo "Nim : ".$mahasiswa->getNim()."<br>";
echo "Nama : ".$mahasiswa->getNama();  