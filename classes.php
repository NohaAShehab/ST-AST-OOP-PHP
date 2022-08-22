<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>';
echo "<link rel='stylesheet' href='styles.css'> ";

echo "<div class='container'>";
echo "<h1> Classes  </h1>";


//class Studnet
//{   # now I have new datatype student ----> contain general structrue of any instance or object in this class
//}
//
//
//# to take new instance from the class
//
//
//$s = new Studnet(); ### take new object from the class ?
//var_dump($s);
##################################

//class Studnet{   # now I have new datatype student ----> contain general structrue of any instance or object in this class
//    # you must specify the access modifier of these variables
//    ### access modifie ---> how the object property will be treated
//    # public
//    # private
//    # protected
//    #static
//    public $fisrtname= "";   # object property
//    public  $lastname = "";
//
//}
//
//
//# to take new instance from the class
//
//
//$s = new Studnet(); ### take new object from the class ?
//var_dump($s);
//##### any variable proptery with public access modifier, can be accessed throght the object name
//$s->lastname="Shehab";
//$s->fisrtname= "Noha";
//var_dump($s);
//echo "My name is {$s->fisrtname}, {$s->lastname}";

################################ classes can contain functions


// class Studnet{
//     public $fisrtname= "";   # object property
//     public  $lastname = "";

//     function speak(){
//         echo "this is my speak function  <br>";
//         # to access the properties inside an object in the class you can do this using this operator
//         echo " {$this->fisrtname} {$this->lastname}" ;
//     }
// }

// $s = new Studnet(); ### take new object from the class ?
// var_dump($s);
// ##### any variable proptery with public access modifier, can be accessed throght the object name
// $s->lastname="Shehab";
// $s->fisrtname= "Noha";

// $s->speak();




######################### Public, protected and private 

// class Studnet{
//     public $fisrtname= "";   # object property
//     public  $lastname = "";
//     protected $email;  # can be accessed only inside the class or the drived class
//     private $phonenumber; # can be accessed only in the class


//     function speak(){
//         echo "this is my speak function  <br>";
//         # to access the properties inside an object in the class you can do this using this operator
//         echo " {$this->fisrtname} {$this->lastname}" ;
//     }

//     public function modifyEmailphone($email, $phone)
//     {
//         # code...
//         $this->email = $email;
//         $this->phonenumber = $phone;
//     }
// }

// $s = new Studnet(); ### take new object from the class ?
// var_dump($s);
// ##### any variable proptery with public access modifier, can be accessed throght the object name
// $s->lastname="Shehab";
// $s->fisrtname= "Noha";
// // $s->email = "nshehab@iti.gov.eg";
// // $s->phonenumber = "444";

// $s->modifyEmailphone("nshehab@iti.gov.eg", 9808);
// $s->speak();

// var_dump($s);

####################################### static 


// class Studnet{
//     public $fisrtname= "";   # object property
//     public  $lastname = "";
//     protected $email;  # can be accessed only inside the class or the drived class
//     private $phonenumber; # can be accessed only in the class
//     static $country = "Egypt";  # variable doesn't depend on the object from the class 
//     # this varaible can be access using the class name 


//     function speak(){
//         echo "this is my speak function  <br>";
//         # to access the properties inside an object in the class you can do this using this operator
//         echo " {$this->fisrtname} {$this->lastname}" ;
//     }

//     public function modifyEmailphone($email, $phone)
//     {
//         # code...
//         $this->email = $email;
//         $this->phonenumber = $phone;
//     }
// }

// $s = new Studnet(); ### take new object from the class ?
// var_dump($s);
// ##### any variable proptery with public access modifier, can be accessed throght the object name
// $s->lastname="Shehab";
// $s->fisrtname= "Noha";
// // $s->email = "nshehab@iti.gov.eg";
// // $s->phonenumber = "444";

// $s->modifyEmailphone("nshehab@iti.gov.eg", 9808);
// $s->speak();
// var_dump($s);
// var_dump(Studnet::$country);

// Studnet::$country = "Masr";

// var_dump(Studnet::$country);

############### call static property in the class 

// class Studnet{
//     public $fisrtname= "";   # object property
//     public  $lastname = "";
//     protected $email;  # can be accessed only inside the class or the drived class
//     private $phonenumber; # can be accessed only in the class
//     static $country = "Egypt";  # variable doesn't depend on the object from the class 
//     # this varaible can be access using the class name 
//     public static $org = "iti";  # static property is public by default
//     private static $branch = 'Assuit';
//     protected static $loaction = "test location";

//     function callStaticProperty(){
//             // echo Studnet::$country;

//             # self 0---> represent the class 
//             echo self::$country;

//     }
//     function speak(){
//         echo "this is my speak function  <br>";
//         # to access the properties inside an object in the class you can do this using this operator
//         echo " {$this->fisrtname} {$this->lastname}" ;
//     }

//     public function modifyEmailphone($email, $phone)
//     {
//         # code...
//         $this->email = $email;
//         $this->phonenumber = $phone;
//     }
// }



// $s = new Studnet();
// $s->callStaticProperty();

################################3
class Studnet{
    public $fisrtname= "";   # object property
    public  $lastname = "";
    protected $email;  # can be accessed only inside the class or the drived class
    private $phonenumber; # can be accessed only in the class
    static $country = "Egypt";  # variable doesn't depend on the object from the class 
    # this varaible can be access using the class name 
    public static $org = "iti";  # static property is public by default
    private static $branch = 'Assuit';
    protected static $loaction = "test location";
    
    function callStaticProperty(){
            // echo Studnet::$country;

            # self 0---> represent the class 
            echo self::$country;

    }
    public function speak(){
        echo "this is my speak function  <br>";
        # to access the properties inside an object in the class you can do this using this operator
        $this->cleananme();
        var_dump($this->fisrtname, $this->lastname);
        echo " {$this->fisrtname} {$this->lastname}" ;
    }
    protected function getfullname(){
        $fullname = $this->fisrtname. " ".$this->lastname;
        return $fullname;
    }
    private function cleananme(){
            $this->fisrtname = trim($this->fisrtname);
            $this->lastname = trim($this->lastname);

    }
}

$s = new Studnet();
$s->callStaticProperty();

$s->fisrtname = "               Noha       ";
$s->lastname = "               Shehab       ";
var_dump($s);

$s->speak();





















