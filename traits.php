<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>';
echo "<link rel='stylesheet' href='styles.css'> ";

echo "<div class='container'>";
echo "<h1> Traits   </h1>";






trait GreetingMessage{

    public function sayhello($name){
        echo "<h1 style='color: chocolate'> Hello {$name} </h1>";
    }

    public function sayWelcom($name){
        echo "<h1 style='color: darkblue'> Welcome {$name} </h1>";
    }
}


#trait are used only in the classes
class Person{
   use GreetingMessage;
   ## override the trait function
    public function sayWelcom($name){
        echo "<h1 style='color: purple'> Welcome {$name} Nice to meet you </h1>";
    }
}


$p  = new Person();
$p->sayhello("noha");
$p->sayWelcom("Ali");








