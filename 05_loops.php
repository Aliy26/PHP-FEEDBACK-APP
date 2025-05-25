<?php
// loops are basically used to execute a piece of code while the specific condition is met & it will keep executing that code until its no longer met(refine it if need be)

/*
 For Loop Syntax => similar to javascript loop syntax works the same way (refine it if need be chatgpt!)
  for(initialize; condition; increment) {
  code to be executed
  }
  */
//   for($x = 0; $x < 10; $x++) {
//     echo "Number", "$x", "<br>";
//   }

/*
 while Loop Syntax => similar to javascript loop syntax works the same way (refine it if need be chatgpt!)
  while(condition) {
  code to be executed
  increment++
  }
  */

//   $x = 1;

//     while($x < 10) {
//         echo "$x", "Interation", "<br>";
//         $x++;
//     }

/*
 Do while Loop Syntax => similar to javascript loop syntax works the same way (refine it if need be chatgpt!)
  do{
  code to be executed
  increment++
  } while (condition);

  do... while loop will always execute the block of code once, even if the condition is false. rarely used
  */

//   $x = 7;
//   do {
//     echo "Number", $x, "<br>";
//     $x++;
//   } while ($x <= 5);

/*
 foreach specifically for arrays
    foreach ($array as $value) {
    // code to be executed
    }
    in real php development used more than any other ones
    */

$posts = ["First Post", "Second Post", "Third Post"];
// count($posts) === js posts.length
// for($x = 0; $x < count($posts); $x++) {
//     echo $posts[$x];
// }

// foreach($posts as $post) {
//     echo $post;
// }

foreach($posts as $index => $post) {
    echo "$index" + 1, " - ", "$post", "<br>";
}

// foreach with an associative array

$person = [
    "first_name" => "Bran",
    "last_name" => "Traversy",
    "email" => "brad@gmail.com"
];

foreach($person as $key => $value) {
    echo "$key - $value<br>";
}
