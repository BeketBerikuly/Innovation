<?php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $email = mysqli_real_escape_string($conn, strtolower($_POST['email']));
        $password = mysqli_real_escape_string($conn, $_POST['password']);  
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
        $sql = "SELECT account_id, account_name FROM accounts WHERE account_email = '$email' and account_passwd = '$password'";
        
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        
        while($row = mysqli_fetch_array($result))
        {   
            if($count == 1) {
                $_SESSION["id"] = $row['account_id'];
                $_SESSION['login_user'] = $row['account_name'];
                header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
                exit();
            }
            else{
                
            }
        }
    }
?>
