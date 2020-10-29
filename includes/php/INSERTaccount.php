<?php 

    $accountName = ucwords($_POST['name']);
    $accountEmail = strtolower($_POST['email']);
    $accountPassword = $_POST['password'];

    $query = "SELECT COUNT(*) as total FROM accounts WHERE account_email = '$accountEmail'";
    $resultt = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($resultt);
    
    if($data['total'] == 0){
        $sql = "INSERT INTO accounts (account_name, account_email, account_passwd) 
            VALUES  ('$accountName', '$accountEmail', '$accountPassword ')";
        $result = mysqli_query($conn, $sql);
        header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
        exit();
    }
    else{
    echo "<script>alert('This email address was already registered');</script>";    
    }
?>