<?php

// $x =   1;
// while($x <= 15){
//     echo 'Number' . $x .' <br>';
//     $x++;
// }


$posts = ['first post', 'Secound Post', 'third post '];

// for($x = 0; $x < count($posts);$x++){
//     echo $posts[$x];


// foreach($posts as $post){
//     echo $post . '<br>';
// }

// foreach($posts as $post){
//     echo $post . '<br>';
// }

foreach($posts as $index => $post){
    echo $index + 1 . ' - ' . $post . '<br>';
}
$people = [
    //personal arributes
        'name' => 'John',
        'first_name' => 'ekk',
        'last_name' => 'Doe',
    
    
];

    foreach($people as $key => $value){
        echo $key .'-' . $value .'<br>';
    }

?>
