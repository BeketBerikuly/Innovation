<?php  
    
            if(isset($_GET['logout'])) {
                unset($_SESSION["id"]);
                unset($_SESSION["login_user"]);
                header('location: index.php');
                exit();
            } 
?>