<?php
    echo "
            <div id='menu-1'>
                <p>Loại sản phẩm</p>
                        <ul>";
                        $q1="SELECT * FROM menu ";                                    
                        $r1=mysqli_query($dbc,$q1);
                        confirm_query($r1,$q1);
                        while($nb=mysqli_fetch_array($r1,MYSQLI_ASSOC)){
                            echo "<li><a href='Them-sp.php?idmn={$nb['id_menu']}&name={$nb['name_menu']}'>{$nb['name_menu']}</a></li>";
                        }
                    echo "</ul></div>";
                   
?>