<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>';
echo "<link rel='stylesheet' href='styles.css'> ";

echo "<div class='container'>";
echo "<h1> Clousure  </h1>";

# clousre is ananoymous function
# must end with ;

//(function(){
//    echo "Good morning";
//})();

###############################################
//$myclousre = function(){
//    echo "Good morning from clousures";
//};
//
//# to use this clousure
//
//$myclousre();
//
//var_dump($myclousre);



############## closure uses external variables

$qunatity = 10;


//$incremantQuantity = function () use($qunatity){
//    $no_of_itmes = 100;
//    $no_of_itmes = $no_of_itmes  + $qunatity;
//    var_dump($no_of_itmes);
//};
//
//$incremantQuantity();
//



$incremantQuantityextra = function (int $extra) use($qunatity){
    $no_of_itmes = 100;
    $no_of_itmes = $no_of_itmes  + $qunatity + $extra;
    var_dump($no_of_itmes);
};

$incremantQuantityextra(85);






















