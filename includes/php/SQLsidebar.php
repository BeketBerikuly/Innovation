<?php
$sql = "SELECT id, post_title,  
post_like, post_seen
FROM post
ORDER BY post_seen DESC LIMIT 3";