<?php


/*                  
                    File Handling 
    File handling is the ability to read and write files on the server.
    PHP has built in funciton for reading and writing files.
    
*/


$file = "extras/users.txt";

if(file_exists($file)) {
    // echo readfile($file);
    $handle = fopen($file, "r");
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, "w");
    $contents = "Aliy" . PHP_EOL . "Lada" . PHP_EOL . "Moviya";
    fwrite($handle, $contents);
}
