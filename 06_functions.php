<?php 
/* 
 Funcation are blocks of code we can name we run anywhere

 
 */
// scopes 

 $y = 12;

//  function registerUser() {
//     $x = 10;
    // echo "$x" + "$y"; inside a function block cant access a variable outside of function scope
    // echo "User registered";
//  }
 // echo "$x";  cant access a variable declared inside the function scope outside it
//  registerUser();

 // However if we wanna use a global variable whinin a function use the global (suntax or whatever it is do correct it if need be chat gpt!)

//  function useGlobalVariable() {
//     global $y;
//     echo $y + 10;
//  }

//  useGlobalVariable();

// Arguments

function registerUserEmail($email) {
    echo "$email registered!";
}

registerUserEmail("umaraliy092@gmail.com");

// function sum($n1, $n2) {
//     return $n1 + $n2;
// };

// $number = sum(10, 20);
// echo $number;

//default values

// function sum($n1=5, $n2=10) {
//     return $n1 + $n2;
// };

// $number = sum();
// echo $number;

// anonymous functions => not a named function we just assigning it to a variable

// $subtract = function($n1, $n2) {
//     return $n1 - $n2;
// };

// echo $subtract(10, 5);

// Arrow Function 

$multiply = fn($n1, $n2) => $n1 * $n2;
echo $multiply(5, 5);