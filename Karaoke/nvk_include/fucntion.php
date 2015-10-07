<?php
    // Kiem tra xem ket qua tra ve co dung hay khong?
    function confirm_query($result, $query) {
        global $dbc;
        if(!$result && !LIVE) {
            die("Query {$query} \n<br/> MySQL Error: " .mysqli_error($dbc));
        } 
    }
    
    //lay dia chi hien tai tren thanh dia chi
    function getURL(){
        $dc="{$_SERVER['HTTP_HOST']}"."{$_SERVER['PHP_SELF']}"."?"."{$_SERVER['QUERY_STRING']}"; 
        if(!empty($dc)){echo $dc;}
    }
    
    function getCurrentPageURL() {
    $pageURL = 'http';
    if (!empty($_SERVER['HTTPS'])) {if($_SERVER['HTTPS'] == 'on'){$pageURL .= "s";}}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}
    function kiem_tra_phong($lau, $trang_thai,$trang){
             global $dbc;
            $q1="select * FROM tb_phong as p where p.trang_thai='{$trang_thai}' and lau = {$lau}";
            $r1=mysqli_query($dbc,$q1);
            confirm_query($r1,$q1);
            if(mysqli_num_rows($r1)>0){
                 $out="<div id='tang'><h1>Tầng {$lau}</h1>";
                    $out.="<ul>";
                    while($dv=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                        $out.="
                            <li><a href='{$trang}?id_phong={$dv['id_phong']}'>{$dv['name_phong']}</a></li>
                                                                                                                        
                        ";
                    }
                    $out.="</ul></div>";                    
            }else{
                $out="";
            }
           return $out;
    }
    function kiem_tra_login($user,$pass){
        global $dbc;
        $p=$pass;
        $pass=md5("nvk".$pass);
            $q="SELECT * FROM tb_user WHERE name_user='{$user}' and pass='{$pass}'";
            $r= mysqli_query($dbc,$q);
            confirm_query($r,$q);
            if(mysqli_num_rows($r)>0){
                $row = mysqli_fetch_array($r);
                $_SESSION['user']=$row['name_user'];
                $_SESSION['ten']=$row['first_name']." ".$row['last_name']; 
                $_SESSION['pass']=$p;
                return true;

            }
    }
    function chuyen_trang(){
        if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
            
        }else{
            header("Location: http://kuem2405.esy.es/dangnhap.php");
        }
        if(kiem_tra_login($_SESSION['user'],$_SESSION['pass'])==true){

        }else{
            header("Location: http://kuem2405.esy.es/dangnhap.php");
        }
    }
?>