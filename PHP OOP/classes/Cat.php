<?php
class Cat{
    public $name;
    const BREED="Doberman";
    public static $weight = '15 kg';
    public function bark(){
        return 'bch' . self::BREED;
    }
    public static function eat(){
        return 'eat Cat';
    }
}