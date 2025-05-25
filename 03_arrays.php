<?php
    // types of arrays Simple array
    $numbers = [1,2,3,4];

    $fruits = array("apple", "banana", "orange");
    
    // Associative array

    $colors = [1 => "red",
    4 => "green",
    2 => "blue"];

    $hex = [
        "red" => "#FF0000",
        "green" => "#00FF00",
        "blue" => "#0000FF"
    ];


    // similar to javaScript objects, python dictionaries
    $person = [
        "first_name" => "Aliy",
        "last_name" => "Khan",
        "email" => "umaraliy092@gmail.com"
    ];


    // Multidimensional array

    $people = [
        [
            "first_name" => "Aliy",
            "last_name" => "Khan",
            "email" => "umaraliy092@gmail.com"
        ],
         [
            "first_name" => "Brad",
            "last_name" => "Taylor",
            "email" => "traversymedia@gmail.com"
         ],
         [
            "first_name"=> "John",
            "last_name"=> "Doe",
            "email"=> "john@gmail.com"
         ]
         ];

        //  echo $people[1]["email"];

     // json_encode

     var_dump(json_encode($people));