<?php
    session_destroy();
    // delete cookies
    setcookie('PHPSESSID', '', time()-3600, '/','', 0, 0);
    header("Location: http://localhost:8080/thuc-tap/"); 
?>