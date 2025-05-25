<?php
// Superglobals

/* Built in variables that are always available in all scopes

 Start with $_
 $_GET - Contains information about variables passed through a URL or a form.
 $_POST - Contains information about variables passed throug a form.
 $_COOKIE - Contains information about variables passed through a cookie.
 $_SESSION - Contains information about variables passed through a session.
 $_SERVER - Contains information about the server environment.
 $_ENV - Contains information about the environment variables.
 $_FILES - Contains information about files uploaded to the script.
 $_REQUEST - Contains information about variables passed through the form or URL.
 
 */

echo $_SERVER["PHP_SELF"];


?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <ul>
    <li>
    Root: <?php echo $_SERVER["DOCUMENT_ROOT"];?>
    </li>
    <li>
       Host: <?php echo $_SERVER["HTTP_HOST"]; ?>
    </li>
    <li>
        Current File Dir: <?php echo $_SERVER["PHP_SELF"]; ?>
    </li>
    <li>
        CLIENT INFO: <?php echo $_SERVER["HTTP_USER_AGENT"]; ?>
    </li>
    </ul>
 </body>
 </html>