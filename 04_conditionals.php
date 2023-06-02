<?php

$age = 0;


// if ($age >= 20){
//     echo 'You can vote ';
// }else{
//   echo  'you do not qulify to vote';
// }


    // $t =date("H");

    // if($t < 12){
    //     echo 'Good Morning';

    // } elseif($t > 14){
    //     echo 'Good afternoon';
    // }
    
    // else{
    //     echo 'Good evening ';
    // }


    // $post = [];

    // if(empty($post)){
    //     echo ' The is no post ';
    // }else{
        
    //     echo $post[0];
    // }

    $favcolor = '';

        switch ($favcolor){
            case 'red':
                echo ' Favorite color is red ';
                break;
            case 'blue':
                echo ' Favorite color is blue';
                break;
            case 'black':
                echo 'favorite color is black ';
                break;
            default:
            echo 'you have no fav color';

        }


?>