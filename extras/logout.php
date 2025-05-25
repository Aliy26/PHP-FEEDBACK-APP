<?php
 session_start();

 session_destroy();

header("Location: /php-start/13_sessions.php");