<?php 
    require "includes/php/SQLsidebar.php";
     
    $result = mysqli_query($conn, $sql); 
?>

<div class="sidebar">
    
                <div class="inner-sidebar">
                    <h1>Popular</h1>
                    <?php 
                        while($row = mysqli_fetch_array($result))
                        { ?>
                            <div class="popular-post">
                                <a  href="index.php?post_id=<?php echo $row['id'] ?>"><h3><?php echo $row['post_title']; ?></h3></a>
                                <div class="like-seen">
                                    <div class="like">
                                        <i class="im im-facebook-like"></i>
                                        <p><?php echo $row['post_like']; ?></p>
                                    </div>
                                    <div class="like">
                                        <i class="im im-eye"></i>
                                        <p><?php echo $row['post_seen'];  ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                </div>
</div>
<div class="ad-place">
    
    <div class="inner-ad-place">
        <div class="ad-image"> 
            <a href="#">
                <img src="static/images/ad/1.png" alt=""></img>
            </a>
        </div>
        <h1>may you like it</h1>
    </div>

</div>