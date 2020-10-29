<?php 
    require "includes/php/SQLpostlist.php";
    // Associative array
    
    $result = mysqli_query($conn, $sql);
    
    
    while($row = mysqli_fetch_array($result))
    {
?>
<div class="post-top-info">
                    <div class="author_img"><img src="static/images/authors/<?php echo $row['author_image']; ?>" alt=""></div>  
                    <div><h5><?php echo $row['author_name']." ".$row['author_surname'];  ?></h5></div>
                    <div><h5><?php echo date( "m/d/Y", strtotime($row['post_date']));  ?> </h5></div>
                    <!--categorie_name----->
                    <div><h5><?php echo $row['categorie_name']; ?></h5></div>
                    <!--categorie_name----->
                </div>
                <div class="post-title">
                    <h1><?php echo $row['post_title']; ?></h1>
                </div>
                <div class="post-desc">
                    <p><?php echo substr($row['post_desc'], 0, 505).'...'; ?></p>
                </div>
                <div class="post-image"><img src="static/images/posts/<?php echo $row['post_image'] ?>" alt="post_image"> 
                </div>
                
                <div class="post-bottom-info">
                    <div class="readmore-but">
                        <!--button readmore-->
                        <a href="index.php?post_id=<?php echo $row['id'] ?>">Read more→</a>
                    </div>
                    <div class="like-seen">
                        <div class="like">
                            <i class="im im-facebook-like"></i>
                            <p><?php echo $row['post_like']; ?></p>
                        </div>
                        <div class="like">
                            <i class="im im-eye"></i>
                            <p><?php echo $row['post_seen']; ?></p>
                        </div>
                        <div class="like">
                            <i class="im im-speech-bubble-comment"></i>
                            <p><?php echo $row['post_comment']; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>