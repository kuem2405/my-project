<?php include('../includes/header.php')?>
<?php include('../includes/mysqli_connect.php')?>
<?php include('../includes/fucntion.php')?>
<?php include('../includes/sibar-3.php')?>

        <div id="info">
            <fieldset>
                <legend> Phòng đang hoạt động</legend>
                <table border=1 width=750>
                <tr>
                   <th>Tầng trệt</th>
                   <th>Tầng 1</th> 
                </tr>
                <tr>
                   <td>
                        <table border=1>
                            <tr>
                                
                                <th>Tên phòng</th>
                                
                                <th>Xem hóa đơn</th>
                            </tr>
                                 <?php
                                    if(isset($_GET['id_phong'])&& filter_var($_GET['id_phong'],FILTER_VALIDATE_INT,array('min_range'=>1))){
                                        $id_phong=$_GET['id_phong'];
                                        $q="UPDATE tb_phong SET trang_thai='yes' where id_phong=$id_phong ";
                                        $r=mysqli_query($dbc,$q);
                                        confirm_query($r,$q);
                                    }
                                                     
                                    $q1="select * FROM tb_phong as p where p.trang_thai='yes' and lau = 0";
                                    $r1=mysqli_query($dbc,$q1);
                                    confirm_query($r1,$q1);
                                    
                                    while($dv=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                                        echo "
                                            <tr>
                                                
                                                <td>{$dv['name_phong']}</td>
                                                
                                                <td><a href='admin.php?id_phong={$dv['id_phong']}'>Xem hóa đơn</a><br/></td>
                                            </tr>
                                                                                                                                        
                                        ";
                                    }
                                ?>   
                        </table>
                   </td>
                   <td>
                        <table border=1>
                            <tr>
                                
                                <th>Tên phòng</th>
                                
                                <th>Xem hóa đơn</th>
                            </tr>
                                 <?php
                                           
                                    $q3="select * FROM tb_phong as p where p.trang_thai='yes' and lau = 1";
                                    $r3=mysqli_query($dbc,$q3);
                                    confirm_query($r3,$q3);
                                    
                                    while($dv=mysqli_fetch_array($r3,MYSQLI_ASSOC)){
                                        echo "
                                            <tr>
                                                
                                                <td>{$dv['name_phong']}</td>
                                                
                                                <td><a href='admin.php?id_phong={$dv['id_phong']}'>Xem hóa đơn</a><br/></td>
                                            </tr>
                                                                                                                                        
                                        ";
                                    }
                                ?>   
                        </table>
                   </td> 
                </tr>
                <tr>
                   <th>Tầng 2</th>
                   <th>Tầng 3</th> 
                </tr>
                <tr>
                   <td>
                        <table border=1>
                            <tr>
                                
                                <th>Tên phòng</th>
                                
                                <th>Xem hóa đơn</th>
                            </tr>
                                 <?php
                                    
                                                     
                                    $q5="select * FROM tb_phong as p where p.trang_thai='yes' and lau = 2";
                                    $r5=mysqli_query($dbc,$q5);
                                    confirm_query($r5,$q5);
                                    
                                    while($dv=mysqli_fetch_array($r5,MYSQLI_ASSOC)){
                                        echo "
                                            <tr>
                                                
                                                <td>{$dv['name_phong']}</td>
                                                
                                                <td><a href='admin.php?id_phong={$dv['id_phong']}'>Xem hóa đơn</a><br/></td>
                                            </tr>
                                                                                                                                        
                                        ";
                                    }
                                ?>   
                        </table>
                   </td>
                   <td>
                        <table border=1>
                            <tr>
                                
                                <th>Tên phòng</th>
                                
                                <th>Xem hóa đơn</th>
                            </tr>
                                 <?php
                                                
                                    $q11="select * FROM tb_phong as p where p.trang_thai='yes' and lau = 3";
                                    $r11=mysqli_query($dbc,$q11);
                                    confirm_query($r11,$q11);
                                    
                                    while($dv=mysqli_fetch_array($r11,MYSQLI_ASSOC)){
                                        echo "
                                            <tr>
                                                
                                                <td>{$dv['name_phong']}</td>
                                                
                                                <td><a href='admin.php?id_phong={$dv['id_phong']}'>Xem hóa đơn</a><br/></td>
                                            </tr>
                                                                                                                                        
                                        ";
                                    }
                                ?>   
                        </table>
                   </td> 
                </tr>
                <tr>
                   <th>Tầng 4</th>
                   <th>Tầng 5</th> 
                </tr>
                <tr>
                    <td>
                        <table border=1>
                            <tr>
                                
                                <th>Tên phòng</th>
                                
                                <th>Xem hóa đơn</th>
                            </tr>
                                 <?php
                                            
                                    $q12="select * FROM tb_phong as p where p.trang_thai='yes' and lau = 4";
                                    $r12=mysqli_query($dbc,$q12);
                                    confirm_query($r12,$q12);
                                    
                                    while($dv=mysqli_fetch_array($r12,MYSQLI_ASSOC)){
                                        echo "
                                            <tr>
                                                
                                                <td>{$dv['name_phong']}</td>
                                                
                                                <td><a href='admin.php?id_phong={$dv['id_phong']}'>Xem hóa đơn</a><br/></td>
                                            </tr>
                                                                                                                                        
                                        ";
                                    }
                                ?>   
                        </table>
                    </td>
                    <td>
                        <table border=1>
                            <tr>
                                
                                <th>Tên phòng</th>
                                
                                <th>Xem hóa đơn</th>
                            </tr>
                                 <?php
                                    
                                                     
                                    $q13="select * FROM tb_phong as p where p.trang_thai='yes' and lau = 5";
                                    $r13=mysqli_query($dbc,$q13);
                                    confirm_query($r13,$q13);
                                    
                                    while($dv=mysqli_fetch_array($r13,MYSQLI_ASSOC)){
                                        echo "
                                            <tr>
                                                
                                                <td>{$dv['name_phong']}</td>
                                                
                                                <td><a href='admin.php?id_phong={$dv['id_phong']}'>Xem hóa đơn</a><br/></td>
                                            </tr>
                                                                                                                                        
                                        ";
                                    }
                                ?>   
                        </table>
                    </td>
                </tr>
                <tr>
                    <th>Tầng 6</th>
                   
                </tr>
                <tr>
                    <td>
                        <table border=1>
                            <tr>
                                
                                <th>Tên phòng</th>
                                
                                <th>Xem hóa đơn</th>
                            </tr>
                                 <?php
                                               
                                    $q14="select * FROM tb_phong as p where p.trang_thai='yes' and lau = 6";
                                    $r14=mysqli_query($dbc,$q14);
                                    confirm_query($r14,$q14);
                                    
                                    while($dv=mysqli_fetch_array($r14,MYSQLI_ASSOC)){
                                        echo "
                                            <tr>
                                                
                                                <td>{$dv['name_phong']}</td>
                                                
                                                <td><a href='admin.php?id_phong={$dv['id_phong']}'>Xem hóa đơn</a><br/></td>
                                            </tr>
                                                                                                                                        
                                        ";
                                    }
                                ?>   
                        </table>
                    </td>
                    <td></td>
                </tr>
            </table>
            </fieldset>
            
            
            <?php
                 
                                
                
                
                while($dv=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                    echo "                                                                                            
                    ";
                }
            ?>
        </div><!--end info-->

<?php include('../includes/footer.php')?>