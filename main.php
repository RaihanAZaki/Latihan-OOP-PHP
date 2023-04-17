<?php

// Class DataDiri yang menampung properti dan method.
class DataDiri{
    public $nama; //Properti Nama
    public $jeniskelamin; //Properti Jenis Kelamin.
    // Semua object di PHP ditandai dengan tanda "$".

    // Method introduce (function)
    function introduce () {
        return $this->nama . "-" . $this->jeniskelamin;
        // Mengembalikan hasil dari apa yang sudah dideklarasikan oleh properti nama dan jenis kelamin.
        // titik tersebut digunakan untuk menggabungkan string.
    }
}

class Universitas {
    public $nama;
    public $semester;
    public $jurusan;

    function kuliah() {
        return $this->nama . " - " . $this->semester . " - " . $this->jurusan;
    }
}

// Object $saya yang sudah dibuat merupakan bagian dari class DataDiri
$saya = new DataDiri(); //membuat objek baru dari class yang sudah ada yaitu "DataDiri".
$saya -> nama = "Raihan";
$saya -> jeniskelamin = "Pria";

$kampus = new Universitas();
$kampus -> nama = "Universitas Pembangunan Jaya";
$kampus -> semester = "enam";
$kampus -> jurusan = "Informatika";

echo $saya->introduce();
echo $kampus->kuliah();

?>
