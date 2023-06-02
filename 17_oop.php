
<?php

class User{

    public $name;
    public $email;
    public $password;


    // aconstroctor is function or amethod that run whn an opject is created

    public function __construct($name, $email, $password)
    {
        $this -> name = $name;
        $this-> email = $email;
        $this-> password = $password;
    }


    //method is a function that belogs to a class
     function set_name($name){
        $this  -> name =$name;

     }
         function get_name(){
            return $this -> name;
         }


}


//create intances of the object 


$user1 = new User('ekk','ekk@gmail.com', 'jfkdsjk');
$user2 = new  User('kogo','kogo@hitty.com', '');


// echo $user1 -> email;
// echo $user2 -> name;


//inheritance 
  
class Employee extends User {
// costructor 
public function __construct($name, $email, $password , $title)
{
    //inherit the parent atributes
    parent::__construct($name,$email, $password);
    
    $this-> title = $title;
}

public function get_title(){
    return $this-> $title;
}
} 

$employe1 = new Employee('faith', 'koog', 'faith@gmail.com', 'jdkwj', 'sales');

echo  $employe1 ->  get_title();

?>

































