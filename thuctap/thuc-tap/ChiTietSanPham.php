<?php session_start();?>
<?php
    include("includes/connect.php"); 
    include("includes/fucntion.php");
    include("includes/Header.php");
    include("includes/menu.php");
?>
            
        <div id="content">
        <?php include("includes/menu1.php");
            if(isset($_GET['idsp'])){
                $q="SELECT * FROM san_pham where id_san_pham={$_GET['idsp']}";
                $r=mysqli_query($dbc,$q);
                confirm_query($r,$q);
                if(mysqli_num_rows($r)<1){
                    echo "<p class='warning'>Không có sản phẩm nào bạn đã chọn.</p>";
                }else{
                    while($sp=mysqli_fetch_array($r,MYSQLI_ASSOC)){
                        echo "
                            <fieldset>
                                <legend>Thông tin sản phẩm</legend>
                                <table >
                                    <tr>
                                        <td width='350px' align='center'><img src='{$sp['images']}'/></td>
                                        <td valign='top'>
                                            <table>
                                                <tr>   
                                                <th>Tên sản phẩm</th>
                                                    <td><span class='ten-sp'>{$sp['name_san_pham']}</span></td>
                                                </tr>
                                                <tr>                
                                                    <th>Tác giả</th>
                                                    <td><span class='tac-gia'>{$sp['tac_gia']}</span></td>                                
                                                </tr>
                                                <tr>                
                                                    <th>Giá cũ</th>
                                                    <td><span class='gia-cu'>{$sp['gia_cu']} VND</span></td>                                
                                                </tr>
                                                <tr>
                                                    <th>Giá mới</th>
                                                    <td><span class='gia-moi'>{$sp['gia_moi']} VND</span></td>                
                                                </tr>
                                                <tr>
                                                    <th>Thông tin</th>
                                                    <td><p class='ttsp'>{$sp['thong_tin']}</p></td>                
                                                </tr>
                                                <tr>
                                                    <th ><div class='mua-sp'><a href='gio-hang.php?idsp={$sp['id_san_pham']}&idm={$sp['id_menu']}' >Thêm vào giỏ</a></div></th>
                                                    <td></td>
                                                </tr>
                                           </table>
                                        </td>
                                    </tr>                
                                </table>
                            </fieldset>
                        ";
                    }
                }
            }
        
        ?>
       
                                    
        
            
        </div><!--end content-->
<?php
    include("includes/footer.php");
    //include("includes/menu.php");

?>
            