<?php
    $id = $_SERVER['QUERY_STRING'];
    $postId = explode("=", $id); 

    if($_POST['like']) {
        $sql = "UPDATE post set `post_like` = `post_like`+1 where `id` = '$postId[1]'";
        $result = mysqli_query($conn, $sql);
        header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
        exit();
    }
?>