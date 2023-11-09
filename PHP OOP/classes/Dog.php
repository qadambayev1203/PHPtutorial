<?php
class Dog{
    public $name;
    const BREED="Doberman";
    public static $weight = '25 kg';
    public function bark(){
        return 'bch' . self::BREED;
    }
    public static function eat(){
        return 'eat';
    }
}