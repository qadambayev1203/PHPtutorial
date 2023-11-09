<?php
// $a=152;
// $b=152;
// echo $a . " " . $b;
// print $a;
// echo "<h2>" . $b . "</h2>";

// $array=[1,5,'aaaa',4.5];
// $array2=array(1,5,'aaaa',4.5);
// print_r($array);
// print_r($array2);


//    str


// $string="fkejignfibn";
// echo strlen($string);  // string uzunligi

// $array=[1,2,3,4,5,6];
// echo min($array);

// $math=rand();
// echo $math;

// define('aa','konstanta');
// echo aa;

// echo 15%4;

// $array=[1,2,4,5,6,8];
// foreach($array as $item){
//     echo $item . '<br>';
// }


// $person=array("Ali"=>15,"Vali"=>20);
// // echo $person["Ali"];
// foreach($person as $name => $age){
//     echo $name . ' ' . $age . '<br>';
// }



// Function


// function funksiya($a,$b){
//     return $a+$b;
// }

// $a=15;
// $b=20;
// $c=funksiya($a,$b);
// echo $c;

// $str="fecfcef";

// var_dump($str);  // ishlashda davom etadi
// die($str);  // dastur to'xtaydi 

/*

//SUPERGLOBALS

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILE
$_ENV
$_COOKIE
$_SESSION



var_dump();
*/
?>
<!-- <?php
$car='Malibu';
$Taomlar=['Norin','Manti', 'Osh'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Salom

    <?php
    echo $car;
    ?>
    </h1>
    <ul>
        <?php foreach($Taomlar as $taom):    ?>
            <li><?= $taom ?></li>
        <?php endforeach;    ?>
        
    </ul>

    
</body>
</html> -->


<!-- Html forlamar -->

<?php
// var_dump($_SERVER);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $sur_name=$_POST['sur_name'];
   

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <h4>To'ldiring</h4>
       <div>
       <label for="">Ismingiz</label>
        <input type="text" name="name">
       </div>

       <div>
       <label for="">Familiyangiz</label>
        <input type="text" name="sur_name">
       </div>

       <div>
        <button type="submit">Jo'natish</button>
       </div>

       <div>
        <div>Name: <?=$name ?? '';?></div>
        <div>SurName: <?=$sur_name ?? '';?></div>
       </div>

    </form>





</body>
</html>

<!-- // include & require -->

