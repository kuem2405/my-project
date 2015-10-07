<?php
    //ket noi voi csdl
    $dbc = mysqli_connect('mysql.hostinger.vn','u812367702_root','lanhuong1508','u812367702_karao');
    
    //neu ket noi khong thanh cong thi bao loi ra trinh duyet
    if(!$dbc){
        trigger_error("Not connect DB: " . mysqli_connect_error());
    }else{
        //dat phuong thuc ket noi la utf-8
        mysqli_set_charset($dbc,'UTF8');
        //mssql_query("SET character_set_results=utf-8",$dbc);
      //mysqli_query("SET NAMES 'UTF8'");
        //mssqli_select_db("KN",$dbc);
        //mssqli_query("SET character_set_results=utf8",$dbc);
    }
    
?>