<?php 

class Aku {
    private $namadepan;
    private $namabelakang;
    private $usia;
    private $kelamin;

    function __construct($namadepan, $namabelakang, $usia, $kelamin) {
        $this->namadepan = $namadepan;
        $this->namabelakang = $namabelakang;
        $this->usia = $usia;
        $this->kelamin = $kelamin;
    }

    function perkenalan () {
        return $this->namadepan . "  " . $this->namabelakang . "  " . $this->usia . " " . $this->kelamin;
    }
}

$Diri = new Aku ("Raihan", " Zaki ", 20 , " Pria ");

echo $Diri -> perkenalan()
?>