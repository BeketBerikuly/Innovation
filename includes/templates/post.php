<?php  
    require "includes/php/SQLpost.php";

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
                    <p><?php echo $row['post_desc']; ?></p>
                </div>
                <div class="post-image"><img src="static/images/posts/<?php echo $row['post_image'] ?>" alt="post_image"> 
                </div>
                
                <div class="post-bottom-info">
                    <?php 
                        if(isset($_SESSION['id'])){
                            require "includes/templates/like2.php";
                        }
                        else{
                            require "includes/templates/like.php";
                        }
                    ?>
                </div>
    <?php } ?>
    <?php 
        require "includes/php/UPDATEwatched.php";
    ?>
    <?php 
        require "includes/templates/commentBlock.php";
    ?>
                    

                    


