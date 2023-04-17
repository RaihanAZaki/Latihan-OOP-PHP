<?php
/* 
-------------------------------------------- ENCAPSULATION ----------------------------------------------
Sebuah ide dimana semua properti dari sebuah objek seharusnya bersifat tidak terbuka (tertutup) dan yang
                         bisa diakses hanya function dari object tersebut 
---------------------------------------------------------------------------------------------------------

Protected dan Private adalah bagian dari ENCAPSULATION
*/

class DataDiri{
    private $nama;
    private $jeniskelamin;

    // Method introduce (function)

    function set_nama($nama) {
        $this->nama = $nama;
    }

    function set_jeniskelamin($jeniskelamin) {
        $this->jeniskelamin = $jeniskelamin;
    }

    function get_nama() {
        return $this->nama;
    }

    function get_jeniskelamin() {
        return $this->jeniskelamin;
    }
}

$saya = new DataDiri();
$saya -> set_nama("Raihan");
$saya -> set_jeniskelamin("Pria");

echo $saya -> get_nama();
echo $saya -> get_jeniskelamin();

?>
