<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>';
echo "<link rel='stylesheet' href='styles.css'> ";

echo "<div class='container'>";
echo "<h1> Classes  </h1>";


## we use the access modifiers to limit the accessiblity of the object properties or functions --->
### properties ---> we can apply logic before assigment or reterieving 

## to access the private properties you need to defines setters and getters- function---> 
#



// class Studnet{

//     public $fisrtname= "";   # object property
//     public  $lastname = "";
//     protected $email;  # can be accessed only inside the class or the drived class
//     private $phonenumber; # can be accessed only in the class
//     static $country = "Egypt";  # variable doesn't depend on the object from the class 
   
//     ############### setters and getters to the get the private and proptected ?
//     ### to apply logic before the setter or getter

//     function setEmail($email){

//         # check email valid or not 
//         if (filter_var($email, FILTER_VALIDATE_EMAIL)){
//             $this->email= $email;
//         }else{
//             $this->email= null;
//         }
        
//     }

//     function getEmail(){
//         return $this->email;
//     }


//     function setPhonenumber($phone){
//         $this->phonenumber= $phone;
//     }

//     function getPhonenumberil(){
//         return $this->phonenumber;
//     }

//     public function speak(){
//         echo "this is my speak function  <br>";
//         # to access the properties inside an object in the class you can do this using this operator
//         $this->cleananme();
//         var_dump($this->fisrtname, $this->lastname);
//         echo " {$this->fisrtname} {$this->lastname}" ;
//     }
//     protected function getfullname(){
//         $fullname = $this->fisrtname. " ".$this->lastname;
//         return $fullname;
//     }
//     private function cleananme(){
//             $this->fisrtname = trim($this->fisrtname);
//             $this->lastname = trim($this->lastname);

//     }
// }

// $s = new Studnet();
// $s->setEmail("noha@iti.gov.eg");
// var_dump($s);


###################### constructors 
# by default  when take an object from the class the interpreter ---> check if the class 
# has a constructor function ---> will call it , if not --> it will create an object , contains the deifned
# properties and methods in the class 

// class Studnet{

//     public $fisrtname;   # object property
//     public  $lastname ;
//     protected $email;  # can be accessed only inside the class or the drived class
//     private $phonenumber; # can be accessed only in the class
//     static $country = "Egypt";  # variable doesn't depend on the object from the class 


   
//     ##constructor is special function that is called during the object creation ---> You can use 
//     # it to customize the object while creation

//     function __construct($fname, $lname, $email, $phone)
//     {   
//         echo "this function is called while creating the object";
//         $this->fisrtname = $fname;
//         $this->lastname = $lname;
//         $this->email = $email;
//         $this->phonenumber = $phone;
        
//     }


//     function setEmail($email){

//         # check email valid or not 
//         if (filter_var($email, FILTER_VALIDATE_EMAIL)){
//             $this->email= $email;
//         }else{
//             $this->email= null;
//         }
        
//     }

//     function getEmail(){
//         return $this->email;
//     }


//     function setPhonenumber($phone){
//         $this->phonenumber= $phone;
//     }

//     function getPhonenumberil(){
//         return $this->phonenumber;
//     }

//     public function speak(){
//         echo "this is my speak function  <br>";
//         # to access the properties inside an object in the class you can do this using this operator
//         $this->cleananme();
//         var_dump($this->fisrtname, $this->lastname);
//         echo " {$this->fisrtname} {$this->lastname}" ;
//     }
//     protected function getfullname(){
//         $fullname = $this->fisrtname. " ".$this->lastname;
//         return $fullname;
//     }
//     private function cleananme(){
//             $this->fisrtname = trim($this->fisrtname);
//             $this->lastname = trim($this->lastname);

//     }
// }
  
// $s = new Studnet("Ahmed", "Ali", "ahmed@gmail.com", "897423987489");  

// var_dump($s);

######################################################3
class Studnet{

    public $fisrtname;   # object property
    public  $lastname ;
    protected $email;  # can be accessed only inside the class or the drived class
    private $phonenumber; # can be accessed only in the class
    static $country = "Egypt";  # variable doesn't depend on the object from the class 


   
    ##constructor is special function that is called during the object creation ---> You can use 
    # it to customize the object while creation

    function __construct($fname, $lname, $email="default@gmail.com", $phone=455666666)
    {   
        echo "this function is called while creating the object";
        $this->fisrtname = $fname;
        $this->lastname = $lname;
        $this->email = $email;
        $this->phonenumber = $phone;
        
    }


    function setEmail($email){

        # check email valid or not 
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email= $email;
        }else{
            $this->email= null;
        }
        
    }

    function getEmail(){
        return $this->email;
    }


    function setPhonenumber($phone){
        $this->phonenumber= $phone;
    }

    function getPhonenumberil(){
        return $this->phonenumber;
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
  
$s = new Studnet("Ahmed", "Ali", "ahmed@gmail.com", "897423987489");  
var_dump($s);

$s2 = new Studnet("Mohamed", "Mostafa");  
var_dump($s2);