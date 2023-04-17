<?php 

// Inheritance

class Vehicle {
    private $nama;
    private $color;

    function __construct ($nama, $color) {
        $this->nama = $nama;
        $this->color = $color;
    }

    function greet() {
        return "Hello, I am a" . " " . $this->nama . " " . $this->color;
    }
}

class Car extends Vehicle {

}

$car = new Car("BMW", "Silver");
echo $car -> greet(); 
?>