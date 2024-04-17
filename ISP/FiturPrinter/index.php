<?php 
include_once "PrinterFlagShip.php";
include_once "PrinterEntryLevel.php";
include_once "PrinterMidRange.php";

$printerflagship = new PrinterFlagShip();
$printerflagship->cetakKertas();
$printerflagship->terimaFax();
$printerflagship->scanKertas();

$printerentrylevel = new PrinterEntryLevel();
$printerentrylevel->cetakKertas();

$printermidrange = new PrinterMidRange();
$printermidrange->cetakKertas();
$printermidrange->scanKertas();