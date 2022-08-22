<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>';
echo "<link rel='stylesheet' href='styles.css'> ";

echo "<div class='container'>";
echo "<h1> Inheritance   </h1>";

class Test{
    function abc(){

    }
}
# engineer --> writecode ()
interface Engineer{
    const DEPT = "Computer science";
    ## define functions ---> must be found in any class implement interface
    ## contain only function signature, constant
    public function writecode();
}
### teacher --> preparecontent()

interface Teacher{
    public function preparecontent();
}
##### TA  (Engineer, Teacher), Employee


class TeachingAssitant implements Teacher , Engineer {
        # you must override all the abstract functions in the implemented interfaces or define the class
    #    as abstract class

    public function preparecontent()
    {
        // TODO: Implement preparecontent() method.
    }

    public function writecode()
    {
        // TODO: Implement writecode() method.
    }
}



abstract  class TeachingAssistant02 extends Test implements Teacher, Engineer {

}

class ABC extends  TeachingAssistant02{

}