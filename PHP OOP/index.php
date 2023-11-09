<?php

class Car
{
    //property
    public $name;

    //Construktor
    public function __construct( /*Attribute*/$name)
    {
        $this->name = $name;
    }

    //method
    public function drive()
    {
        return 'driving';
    }
    public function setModel($name)
    {
        $this->name = $name;
    }
}

$bmw = new Car('BMW M-4');
// $bmw->setModel('BMW');
echo $bmw->name;

?>