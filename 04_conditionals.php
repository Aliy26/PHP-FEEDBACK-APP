<?php
// conditionals are control structres

/*
operators
< Less than
> Greater than
<= Less than or equal
>= Greater than or equal
== Equal token_get_all
=== Identical (checks type and value)
!= Not equal
!== Not identical to (also checks types)
*/

/* If statement syntax */

$age = 20;
// if($age >= 18) {
//     echo "You are old enough to get a driving license";
// } else {
//     echo "Sorry, you are not old enough to get a driving license";
// };
// $date = date("H");
// if($date < 12) {
//     echo "Good morning";
// } else if($date < 17) {
//    echo "Good Afternoon";
// } else {
//     echo "Good evening";
// };

// empty()

$posts = ["First Post"];
// if(!empty($posts)){
//     echo $posts[0];
// } else {
//     echo "No Posts";
// }

// ternary operator

// echo empty($posts) ? "No Posts" : $posts[0];

// $anyPost = !empty($posts) ? $posts[0] : "No Post";

// echo $anyPost;

// if we don't need a third part for the ternary operator we can give the second condition a value of null

// $anyPost = !empty($posts) ? $posts[0] : null;

// but we can also use coalescing operator (kind of similar to javascript nullish operator if not do correct it chat gpt!)

$firstPost = $posts[0] ?? null;
echo $firstPost;

// switches. cleaner to use when ton of diffrent possibilites than using bunch of ifs

$favColor = "white";

switch($favColor) {
    case "red":
        echo "Your favorite color is red";
    break;
     case "green":
        echo "Your favorite color is green";
    break;
     case "blue":
        echo "Your favorite color is blue";
    break;
    default:
    echo "Your favorite color is not red, green or blue";
};


