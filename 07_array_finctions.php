<?php

$fruits = ['apple', 'oranges','peer'];

//get the length of an array 

echo count($fruits);

//search array for a specify value




var_dump(in_array('apple', $fruits ));

//add to array 
$fruits [] =' orages';


array_push($fruits, 'Banana', 'Mango', 'Strayberry');
 array_unshift($fruits, 'Avacado');

 //remove from an array 

 ///array_shift($fruits);
// specific 
// unset($fruits[3]);

// splinting into chunks  or groups of 2 , 3, or anythore number 

$chunked_array = array_chunk($fruits,3);

print_r($chunked_array);



// array merge 

$arr2 = [1,3,4,5,6];
$arr3 = [4,6,7,7,88,];

  $arr5 = array_merge($arr2,$arr3);
// how to merge then in javascript 
$arr6 = [...$arr3, ...$arr2];
    //  print_r($arr6);

    //combine array/

    $a = ['green', 'red','yellow'];
    $b = ['banana', 'strawberries', 'pawpaw'];

   $c= array_combine($b,$a);
//    print_r($c);

//array of only keys 
     $key= array_keys($c);
    print_r($key);


    //flipping the array

    // to flip the array we use array_flip
    $flipped = array_flip($c);

    print_r($flipped);

    // getteing arrange of numbers 

    $numbers = range(1,10);

    //print_r($numbers);
    
    //mappin an array 


    $newNumber = array_map(function($number){
        return 'This is number'. $number;

    },$numbers);

    // print_r($newNumber);

    //filter array 

    $less_than10 = array_filter($numbers, fn($number)=> 'Number' . $number <=10);

    print_r($less_than10);


    // array reduce - used to do callation through a list of numbers or item 

    $sum = array_reduce($numbers, fn($carry, $number)=> $carry + $number);

    var_dump($sum);


















?>