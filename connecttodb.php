<?php


function connectTodatabase(){
    $username= 'itiphp';
    $password = 'Iti123456789_';
    $dbname= 'phpcrud';
    $dsn= "mysql:dbname={$dbname};host=127.0.0.1;port=3306";
    $db= new PDO($dsn,$username,$password);
    return $db;
}