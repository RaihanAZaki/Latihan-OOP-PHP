<?php 

class Aku {
    public $namadepan;
    public $namabelakang;
    public $usia;
    public $kelamin;

    function perkenalan() {
        return $this->namadepan . "-" . $this->namabelakang . "-" . $this->usia . "-" . $this->kelamin;
    }
}

$Diri = new Aku();
$Diri -> namadepan = "Raihan";
$Diri -> namabelakang = "Zaki";
$Diri -> usia = 20;
$Diri -> kelamin = "Pria";

echo $Diri -> perkenalan();
?>