<?php
 $numbers = [1,2,3,4,5,6];

 $fruits =array('apple','orange','peer');

 $fruits = ['oranges','banana','watermelon'];

 echo  $fruits[2];

// associate aray 

    $hex = [
    'red' => '#f00344',
    'blue' => '#f8549o',
    'green' => 'f0000',
    ];

    echo  $hex['red'];

    $person = [
        'first_name' => 'ekk',
        'secound_name' => 'kogo',
    ];

    echo  $person['first_name'];

 
// multidimentional arays this is aray within arays

    $people = [
        //personal arributes
        [
            'first_name' => 'ekk',
            'secound_name' => 'kogo',
        ],

        //work experiences

        [
            'emeployement_date' => 2012/3/04,
            'company_name' => 'Hitty Deliveries',
        ]
        ];

     echo $people[0]['secound_name'];

// json fomart

var_dump(json_encode($people));


?>
