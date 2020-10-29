<?php    

    $postId = explode("=", $id);  
    
    $accountId = $_SESSION['id'];
    $comments= $_POST['textarea'];
    
    $sql = "INSERT INTO comment (post_id, account_id, comment_text) 
             VALUES  ($postId[1], '$accountId', '$comments')";
    mysqli_query($conn, $sql);

    $query = "UPDATE post set `post_comment` = `post_comment` + 1 where `id` = '$postId[1]'";
    mysqli_query($conn, $query);
    header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
    exit();
?>