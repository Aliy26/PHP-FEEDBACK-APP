<?php

$string = "Hello World";

// Get the length of a string

// echo strlen($string);

// Find the position of the first occurrence of a substring in a string

// echo strpos($string, "o");

// Find the position of the last occurrence of a substring in a string

// echo strrpos($string, "o");
// var_dump(strpos("$string", "o") !== strrpos("$string", "o")); //bool(true);

// Reverse a string
// echo strrev($string);

// Convert all characters to lowercase

// echo strtolower($string);

// Convert all characters to uppercase

// echo strtoupper($string);

// Uppercase the first character of each word

// echo ucwords($string);

// String replace

// echo str_replace("World", "Everyone", $string);

// Return portion of a string specified by the offset and length

echo substr($string, 0, 5); // index 5 exclusive
// echo substr($string, 5); // index 5 exclusive

// String with
// case sensitive

if (str_starts_with($string, "Hel")) {
    echo "YES";
}

// Ends with
// case sensitive

if (str_ends_with($string, "ld")) {
    echo "YES";
};

// HTML special chars used for security

$string2 = "<script>alert(1)</script>"; // can be subject for attack and h1 tag can be changed to <scrpit> with some logic say alert and it will end up in the browser

echo htmlspecialchars($string2);

// talk about %s & %d

// formatted string when have outside data. provide more detailed info on that!

printf("%s likes to %s", "Brad", "code");
printf("1+1=%d", 1+1);
