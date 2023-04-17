<?php
/* 
--------------------------------------------- CONSTRUCTOR -----------------------------------------------
Sebuah spesial function yang digunakan untuk menginisialisasi sebuah properti dari sebuah object pada saat
                                           object itu dibuat
---------------------------------------------------------------------------------------------------------

*/

class DataDiri{
    private $nama;
    private $jeniskelamin;
    private $hobi;

    function __construct($nama, $jeniskelamin, $hobi) {
        $this->nama = $nama;
        $this->jeniskelamin = $jeniskelamin;
        $this ->hobi = $hobi;
    }


    function introduce () {
        return $this->nama . " - " . $this->jeniskelamin . " - " . $this->hobi;
    }
}

$saya = new DataDiri("Raihan", "Pria", "Ngoding");


echo $saya->introduce();

?>
