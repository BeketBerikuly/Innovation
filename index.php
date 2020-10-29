<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Livecy(~livecycle) - a simple blog website">
    <meta name="keywords" content="HTML, CSS, JavaScript, Jquery, PHP">
    <meta name="author" content="Beket Berikuly">
    <title>innovation</title>
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css">
    <link rel="shortcut icon" href="static/images/logo/favicon.png">
</head>
<body style="min-width: 960px; margin: auto;">
    <!--button to top-->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="im im-care-up"></i></button>
    <?php 
        //$_SESSION['admin'] = 1;
        if(!isset($_SESSION['admin'])){
            require_once "includes/templates/header.php"; 
            require_once "includes/templates/main.php"; 
        }
        else{
            require_once "admin/admin.php";
        }
    ?>

    <!--footer------------------------------->
    <?php require_once "includes/templates/footer.php" ?>
    <!--footer------------------------------->

    <script>
        //Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script> 
    <script src="static/js/loginPage.js"></script>
    <script src="static/js/signupPage.js"></script>
    
</body>
</html>