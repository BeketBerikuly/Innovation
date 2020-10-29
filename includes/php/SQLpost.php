<?php
$sql = "SELECT p.id, p.post_title, p.post_desc,  
p.post_date, p.post_image, p.post_like, p.post_seen, p.post_comment, 
a.author_id, a.author_name, a.author_surname, a.author_image,
c.categorie_id, c.categorie_name 
FROM post p 
    INNER JOIN author a ON a.author_id = p.author_id
    INNER JOIN categorie c ON c.categorie_id  = p.categorie_id WHERE p.id = ".$postId[1];
