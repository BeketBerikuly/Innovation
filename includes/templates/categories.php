<?php    
                $sql = "SELECT categorie_id, categorie_name FROM categorie";
                $result = mysqli_query($conn, $sql);
                            
                //echo $id;
                while($row = mysqli_fetch_array($result))
                {?>
                    <li>
                    <?php
                    echo "<a href='?".$row['categorie_id']."' >".$row['categorie_name']."</a> "; 
                    ?>
                    </li>
            <?php }?>        