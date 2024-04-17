<?php
include_once "DBMS.php";

class DBMSConnection{
    private $dbms;
    public function connect(DBMS $dBMS): void{
        echo "konek";
    }
}