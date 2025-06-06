<?php

/* 
        Exceptions
    PHP has an exception model similar to that of other programming languages. 
    An exception can be throw, and caught within PHP. 
    Code may be surrounded in a try block, to facilitate the catching of potential exceptions. 
    Each try must have at least one corresponding catch or finally block.    

*/

function inverse($x) {
    if(!$x) {
        throw new Exception("Division by zero");
    }
    
    return 1/$x;
}

// echo inverse(0);

try {
    echo inverse(5);
    echo inverse(0);
}catch(Exception $e) {
    echo "Caught Exception", $e->getMessage(), " ";
} finally {
    echo "First Finally";
} // executed whether or not the exeption is thrown. it is a way to handle errors elegantly and not have fatal errors and keep our script keep executing

echo "Hello Everybody";