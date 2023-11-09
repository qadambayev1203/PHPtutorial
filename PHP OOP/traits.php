<?php

//Trait-   classlardagi umumiy funksiyani jamlashtirish uchun

trait AnimalTrait{
    public function eat(){
        return 'Eat';
    }
}

class Dog implements Animal
{
    public function makeSound()
    {
        return 'Vov-vov';
    }
    use AnimalTrait;
}
class Cat implements Animal
{
    public function makeSound()
    {
        return 'Vov-vov';
    }
    use AnimalTrait;

}

?>