<?php
    $dbc=mysqli_connect("localhost","root","","tiki");
    if(!$dbc){
        trigger_error("Not connect: ".mysqli_connect_error());
    }else{
        mysqli_set_charset($dbc,'UTF8');
    }
?>