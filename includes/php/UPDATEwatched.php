<?php 
    $sql = "UPDATE post set `post_seen` = `post_seen`+1 where `id` = '$postId[1]'";
    $result = mysqli_query($conn, $sql);
?>