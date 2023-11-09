<?php

//Inheritens  ->  extends (Kalit so'zi)

class Car {
    public $name;
    public function __construct($name){ $this->name = $name;}
    public function drive(){ return 'driving'; }
    public function setModel($name){ $this->name = $name; }
}

class ElectricCar extends Car{
    public function __construct(){

    }
}
$jetour=new ElectricCar();
var_dump($jetour);

// class oldiga finel atributi qo'yilsa bu classdan meros olib bo'lmaydi "    final classs Name(){}        "
// final atributi function uchun ham tegishli bo'lib final qo'yilgan methodni override qilib bo'lmaydi;

?>