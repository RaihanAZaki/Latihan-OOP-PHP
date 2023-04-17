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

    function greet() {
        return "Hai, saya adalah manusia";
    }
}

class Saya extends Aku {

}

$Diri = new Saya ("Raihan", " Zaki ", 20 , " Pria ");

echo $Diri -> greet();

?>