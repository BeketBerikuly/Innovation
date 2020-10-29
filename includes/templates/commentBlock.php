<?php
require "includes/php/SQLsavedcomments.php";

if(isset($_SESSION['id'])){
    ?>
    <div class="post-comment">
        <div class="comment-title">
            <h1>comments</h1>
        </div>
        <div class="inner-post-comment">
            <form action= '' method='POST'>
            <input type="hidden" name="form" value="B"><!--  invisible input  -->   
                <textarea name="textarea" id="" cols="30" rows="10"></textarea>
                <button name="addcomment">add comment</button>   
            </form>
        </div>
    </div>
    <?php
}
else{
    echo "<div class=\"comment_message\">Вы должны войти в систему, иметь возможность комментировать.
    </div>";
} 


$result = mysqli_query($conn, $sql);
?>
                <div class="post-saved-comments">
                    <?php
                        while($row = mysqli_fetch_array($result))
                        { ?>
                        <div class="saved-comment">
                            <div class="comment-user">
                                <div><p><?php echo $row['account_name'] ?></p></div>
                                <div><p><?php 
                                echo date( "d M Y H:i", strtotime($row['comment_date'])) ?></p></div>
                            </div>
                            <div class="comment-paragraph">
                                <p><?php echo $row['comment_text'] ?></p>
                            </div>
                        </div>
                    <?php }?>
                </div>
