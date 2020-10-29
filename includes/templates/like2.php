<div class="like-seen">
        <form class="like" action="" method="POST">
            <input type="hidden" name="form" value="D"><!--  invisible input  -->  
            <button onclick = "myFunction()" type = "submit" value = "like" name='like'><i class="im im-facebook-like"></i></button>
            <p><?php echo $row['post_like']; ?></p>
        </form>   
        <div class="like">
            <i class="im im-eye"></i>
            <p><?php echo $row['post_seen']; ?></p>
        </div>
        <div class="like">
            <i class="im im-speech-bubble-comment"></i>
            <p><?php echo $row['post_comment']; ?></p>
        </div>       
</div>