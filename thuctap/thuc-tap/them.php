<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
                if(!empty($_GET['idmn'])){
                    $mn=$_GET['idmn'];
                }
                print_r($_FILES);
                if(!empty($_POST['name'])){
                    $ten=$_POST['name'];
                }
                if(isset($_POST['nb'])){
                    $nb=$_POST['nb'];
                }
                if(isset($_POST['th'])){
                    $th=$_POST['th'];
                }
                if(isset($_POST['dm'])){
                    $dm=$_POST['dm'];
                }
                if(!empty($_POST['tg'])){
                    $tg=$_POST['nb'];
                }
                if(!empty($_POST['gc'])){
                    $gc=$_POST['gc'];
                }
                if(!empty($_POST['gm'])){
                    $gm=$_POST['gm'];
                }
                
                if(!empty($_POST['tt'])){
                    $tt=$_POST['tt'];
                }
                if(isset($_FILES['image'])){
                    $a=array('image/jpeg','image/png','image/jpg','image/x-png');
                    if(in_array(strtolower($_FILES['image']['type'],$a))){
                        $ext=end(explode('.',$_FILES['image']['name']));
                        $rename=uniqid(rand(),true).'.'."$ext";
                        
                        move_uploaded_file($_FILES['image']['tmp_name'],"images/San-pham/".$rename);
                        $im=$rename;
                    }
                }else{
                    echo "<p class='warning'>hay za i.</p>";
                }
                if(!empty($_GET['idmn'])&&!empty($_POST['name'])&&!empty($_POST['gc'])&&!empty($_POST['gm'])&&isset($_FILES['image'])){
                                $q10="INSERT INTO san_pham(id_menu, id_noi_bat, id_danh_muc, id_thuong_hieu, name_san_pham, gia_cu, gia_moi, tac_gia, images, thong_tin, ban_chay)";
                                $q10.=" VALUES ($mn,$nb,$dm,$th,$name,$gc,$gm,$tg,$im,$tt,'yes')";
                                $r10=mysqli_query($dbc,$q10);
                                confirm_query($r10,$q10);
                                if($r10){
                                    echo "<p class='warning'>Thêm thành công.</p>";
                                }
                }else{
                    echo "<p class='warning'>hay za.</p>";
                }
            }
?>