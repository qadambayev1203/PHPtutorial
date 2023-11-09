<?php 

abstract class Fruits{
    public $color;
    public $name;

    abstract public function Stop();
}

class Apple extends Fruits{
    public function Stop(){
        return 'Stop';
    }

}

$model=new Apple();

?>