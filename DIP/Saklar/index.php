<?php 
include_once "Lampu.php";
include_once "KipasAngin.php";
include_once "Saklar.php";

$lampu = New Lampu();
$lampu->beroprasi();
$lampu->berhenti();

$Kipasangin = new KipasAngin();
$Kipasangin->beroprasi();
$Kipasangin->berhenti();