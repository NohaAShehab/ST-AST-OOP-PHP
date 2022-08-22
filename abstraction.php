<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>';
echo "<link rel='stylesheet' href='styles.css'> ";

echo "<div class='container'>";
echo "<h1> Inheritance   </h1>";




abstract class Employee{
    public $name;
    public $email;
    protected $salary;
    abstract function displayEmployeeInfo();
    abstract function calNetSal($comm=0, $diduction=0);
}

### when extends from abstract class --->
## you must implement all abstract functions in the partent class

#### Any class defined as abstract class ---> must contain abstract method
### any class contains abstract method , the class must be defined as abstract also.
class Engineer extends Employee{
    public $sepcialization ;
    function __construct($name, $email, $salary=1000){
        $this->name= $name;
        $this->email = $email;
        $this->salary = $salary;
        $this->sepcialization= "Computer";
    }
     function displayEmployeeInfo(){
        echo "My name is {$this->name}, {$this->sepcialization} engineer";
     }
     function calNetSal($comm=0, $diduction=0){
         $netsal = $this->salary + $comm - ($diduction*2);
         return $netsal;
     }
}

$eng = new Engineer("Noha", "noha@gmail.com");
var_dump($eng);
$eng->displayEmployeeInfo();

$netsal = $eng->calNetSal(0, 50);
var_dump($netsal);
class Teacher extends  Employee{
    function __construct($name, $email, $salary=700){
        $this->name= $name;
        $this->email = $email;
        $this->salary = $salary;
    }
    function displayEmployeeInfo(){
        echo "My name is {$this->name}, {$this->email}";
    }
    function calNetSal($comm=0, $diduction=0){
        $netsal = $this->salary + ($comm*5) - ($diduction*2);
        return $netsal;
    }
}

$t = new Teacher("test",
    "test@gmail.com");
var_dump($t);

$netsal = $t->calNetSal(100, 0);
var_dump($netsal);









