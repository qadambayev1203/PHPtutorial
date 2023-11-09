<?php
//static
// self:: kalit so'zi orqali class ichida shu clasning static proprty va metodlaridan foydalaniladi ;
// parent:: kalit so'zi orqali meros olingan clas ichida ota classning static proprty va metodlarini chaqirish mumkin;

// const kalit so'zi orqali konstantalar yaratiladi. class ichida self:: kalit so'zi orqali ishlatiladi;
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

echo Dog::$weight;
 
?>