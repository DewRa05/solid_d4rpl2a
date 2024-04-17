<?php 
include_once "PembayaranCustomer.php";
include_once "Kredit.php";
include_once "Debit.php";
include_once "Cash.php";

$pembayaran = new PembayaranCustomer();
$pembayaran->menerimaPembayaran(new Kredit());
$pembayaran->menerimaPembayaran(new Debit());
$pembayaran->menerimaPembayaran(new Cash());