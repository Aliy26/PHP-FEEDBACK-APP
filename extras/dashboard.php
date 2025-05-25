<?php
session_start();

if(isset($_SESSION["username"])) {
    echo "<h1> Welcome", $_SESSION["username"], "</h1>"; 
    echo '<a href="/php-start/extras/logout.php">Log out</a>', "<br><br>";
} else {
    echo "<h1>Welcome Guest</h1>";
}

echo '<a href="/php-start/13_sessions.php">Home</a>', "<br>", "<br>";