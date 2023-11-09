<?php


//Interfase
interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{
    public function makeSound()
    {
        return 'Vov-vov';
    }
}


?>