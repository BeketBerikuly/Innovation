<div class="mainbar">
                <?php 
                    if(str_split($id)[0]== 'p'){
                        $postId = explode("=", $id);      
                        require_once "includes/templates/post.php";
                    }
                    else{
                        require_once "includes/templates/postlist.php";
                    }
                ?>       
</div>
            