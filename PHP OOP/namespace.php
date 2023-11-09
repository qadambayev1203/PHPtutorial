<?php

// use classes\Table;
use kitchen\Table as KTable;

require 'classes/Dog.php';
// require 'clasess/Table.php';
require 'classes/Kitchen/Table.php';

// $bingo=new Dog();
// var_dump($bingo);

// $tablemodel= new classes\Table();
// $model=new kitchen\Table();

// $tablemodel= new Table();
$model=new KTable();

var_dump($model);
?>