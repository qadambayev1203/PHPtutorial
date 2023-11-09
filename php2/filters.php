<?php

//Filters
// $str='<h1>Hello world</h1>';
// $newstr=filter_var($str,FILTER_SANITIZE_STRING);
// echo $newstr;


// JSON
// json_encode();  => JSON formatga o'girish
// json_decode();    => JSON formatni php ga o'girish;

$age=['ali'=>15,'vali'=>20,'nabi'=>22];
$jsonobj='{"ali":15,"vali":20,"nabi":22}';
$obyekt=json_decode($jsonobj);
$array=json_decode($jsonobj,true);
echo $obyekt->ali;
echo $array['vali'];
?>