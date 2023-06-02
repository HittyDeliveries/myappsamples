<?php
  function registerUser($email, $phone ,$name){
      echo $name . $email . $phone . 'regitered'; 
  }

  registerUser("kogo","evans", '08948792');


  function sum($n1 =4, $n2 =3){
    return $n1 + $n2;
  
  
  };

    //call the function
      $numbers = sum();
  
      echo $numbers ;  


      $subtract = function($n1, $n2){
        return $n1 - $n2;      

      };

      echo $subtract(5,6);



      $mutiply = fn($n1, $n2) => $n1 * $n2;      

      

      echo $mutiply(5,6);
?>


