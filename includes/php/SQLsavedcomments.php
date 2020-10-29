<?php 

$sql = "SELECT  
                                    a.account_id, a.account_name,
                                    c.post_id, c.account_id, c.comment_date, c.comment_text
                    FROM comment c 
                        INNER JOIN accounts a ON a.account_id = c.account_id WHERE c.post_id = ".$postId[1];