<?php 

class Aku {
    private $namadepan;
    private $namabelakang;
    private $usia;
    private $kelamin;

    function set_namadepan($namadepan) {
        $this->namadepan = $namadepan;
    }

    function set_namabelakang($namabelakang) {
        $this->set_namabelakang = $namabelakang;
    }

    function set_usia($usia) {
        $this->usia = $usia;
    }

    function set_kelamin($kelamin) {
        $this->kelamin = $kelamin;
    }

    function get_namadepan() {
        return $this->namadepan;
    }

    function get_namabelakang() {
        return $this->namabelakang;
    }

    function get_usia() {
        return $this->usia;
    }

    function get_kelamin() {
        return $this->kelamin;
    }
}

$Diri = new Aku();
$Diri -> set_namadepan("Raihan");
$Diri -> set_namabelakang("Zaki");
$Diri -> set_usia(20);
$Diri -> set_kelamin("Pria");

echo $Diri -> get_namadepan();
echo $Diri -> get_namabelakang();
echo $Diri -> get_usia();
echo $Diri -> get_kelamin();
?>