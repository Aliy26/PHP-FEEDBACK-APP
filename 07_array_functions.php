<?php
  $fruits = ["apple", "orange", "banana"];

  // Get length using count (method or function whatever it is called)

//   echo count($fruits);

  // Search array (using in_array() funciton/method)

//   var_dump(in_array("apple", $fruits));

  // Add to array | similar to javascpirt with slight difference in syntax

  $fruits[] = "grape";
  array_push($fruits, "blueberry", "strawberry"); // adds to the end of an array | js version fruits.push("blueberry, strawberry);
  array_unshift($fruits,"pineapple"); // adds to the front of an array | js version fruist.unshift("pineapple");

  //Remove from array

 array_pop($fruits); // removes from the back of an array | js version fruits.pop()
 array_shift($fruits); // removes from the front of an array | js version fruits.shift()
//  unset($fruits[2]); // removes the specific index with its assigned value

// Split into 2 chunks
// $chuncked_array = array_chunk($fruits, 2);


//   print_r($chuncked_array);

// Concatenate

$arr1 = [1,2,3];

$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
// we could also use a spread operator
$arr4 = [... $arr1, ...$arr2]; // just like in js

// print_r($arr4);

$a = ["green", "yello", "orange"];
$b = ["kiwi", "banana", "orange"];
$c = array_combine($a, $b); // combines two array in key value pair first argument being the key and second being the value

// print_r($c);

// array of keys

$keys = array_keys($c);
// print_r($keys);

// flip the array

$flipped = array_flip($c); // changes the key value / index value order
// print_r($flipped);

//range give little bit of desc

$numbers = range(1, 20); // creates an array with a range of numbers

// print_r($numbers);

// map give little bit of desc where its used

$newNumbers = array_map(function($number) {
    return "Number $number";
}, $numbers);

// print_r($newNumbers);

// filter give little bit of description

$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
// print_r($lessThan10);

// reduce give little bit of desc

$sum = array_reduce($numbers, fn($accumulator, $number) => $accumulator + $number);
print_r($sum);
