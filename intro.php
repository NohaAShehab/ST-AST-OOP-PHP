<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>';


echo "<div class='container'>";
echo "<h1> OOP </h1>";

//
//echo "this first day with ooP";
//
//$name = "Noha";
//
//echo "My name is{$name}";


#### validate string
//$message = "      Nice to meet you              ";
//var_dump($message);
//
//$message= trim($message);
//$message = htmlspecialchars($message);
//var_dump($message);



//function cleanstr(String $message, int $x ){
//    $message= trim($message);
//    $message = htmlspecialchars($message);
//    return $message;
//}
//


//function sumnum(int $x, int $y){
//    return $x+$y;
//}
//
//$z = sumnum(3, 4);
//var_dump($z);
//$m = sumnum("Ahmed", "Ali");
//var_dump($m);


################3 to call script into anther script

//require "connecttod.php";  # require --->if the file is not exists
//# require will raise an error
//$mydb=connectTodatabase();
//var_dump($mydb);
//
//
//echo "<h1>Testtttttttttttttttttttt </h1>";

################## Include

//include "connecttodb.php";  # if the file is not existing ,,, php raise warning
//# and will continue the execution ...
//$mydb=connectTodatabase();
////var_dump($mydb);
//echo "<h1>Testtttttttttttttttttttt </h1>";
//################################
//printHello();
//
//### by default if you don't specify return for the function it will return null
//function printHello(){
//    echo " <h1> Hello World </h1>";
//}
//
//$x = printHello();
//var_dump($x);


####################################### args


//function sumnum1($x, $y){
//    echo "<br>x= {$x} y={$y}" ;
//}
//
//sumnum1(4, 6);


############## new function ---> accept variable number of argumements
//function sumnum(...$args){  ### ...$args --> arguments passed to the function can be zero or more
//    var_dump($args);
//    $sum = 0;
//    foreach ($args as $a){
//        $sum+=$a;
//
//    }
//    var_dump($sum);
//    echo " <br> ---------------------------------------------- <br>";
//}
//sumnum(4,5,6,67,7);
//sumnum(56, 6);
//sumnum(4);
//sumnum();
########################################33
//function sumnum($message, ...$args){  ### ...$args --> arguments passed to the function can be zero or more
//    var_dump($message, $args);
//    $sum = 0;
//    foreach ($args as $a){
//        $sum+=$a;
//
//    }
//    var_dump($sum);
//    echo " <br> ---------------------------------------------- <br>";
//}
//sumnum(4,5,6,67,7);
//sumnum(56, 6);
//sumnum(4);
//sumnum("this is the message");








#################################### call function by value > ################################


function sayhello($username){
    echo "Hello {$username}, Nice to meet you ";
}

$myname  ="Noha";
sayhello($myname);




//function incrementbyten($num){
//    $num  = $num  + 10;
//    echo "<h1> num = {$num} </h1>";
//}
//


//incrementbyten($year);
//var_dump($year);


$year = 2022;
function incrementbyten(&$num){  # send the address of the argument
    $num  = $num  + 10;
    echo "<h1> num = {$num} </h1>";
}

$year = 2022;
incrementbyten($year);   # accept the address of $year
var_dump($year);






































