<?php
// echo 'aa'.'<br>';

// echo date('Y.m.d');


// cookie

// setcookie('test','bu qiymat', time()+(5)); // 3-parametr vaqt birligi. berilgan vaqtdan keyin cookie o'chiriladi
// setcookie('user_name','name');

// $_COOKIE superglobal


//SESSION brauzerda emas serverda saqlanadi.
// $_SESSION superglobal
session_start();
$_SESSION['username']='qadamboyev'; 

session_unset();  //sessiya ma'lumotlarini tozalaydii
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <div>Name: <?php echo $_COOKIE['user_name']; ?></div> -->
</body>
</html> 