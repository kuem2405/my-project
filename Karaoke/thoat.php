<?php
    session_destroy();
    // delete cookies
    setcookie('PHPSESSID', '', time()-3600, '/','', 0, 0);
    header("Location: http://http://kuem2405.esy.es"); 
?>