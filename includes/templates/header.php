<?php 
    include "includes/php/config.php";
    
    $id = $_SERVER['QUERY_STRING'];

    $session_value=(isset($_SESSION['login_user']))?$_SESSION['login_user']:''; 

    require "includes/php/SESSIONlogout.php";

    require "includes/php/formHandle.php";
?>
<div class="header">
            <div class="inner-header">
                <a class="logo" href="index.php">
                    <img src="static/images/logo/logo.png" alt="logo">
                </a>
                <a class="title" href="index.php">
                    <h1>innovation.kz</h1> 
                </a>
                <a class="logo" href="index.php">
                    <img src="static/images/logo/logo.2.png" alt="logo">
                </a>
            </div>
    </div>
<div class="navbar">
    <div class="inner-navbar">        
        <ul class="nav-cat">
            <li><a  href="index.php">All</a></li>      
            <?php require "includes/templates/categories.php"; ?>    
        </ul class="nav-cat">

        <div class="nav-but">   
            <!--invisble----------------------->         
            <div class="dropdown">
                <button class="dropbtn" onclick = 'dropdownUser()'><?php echo  $session_value; ?></button>
                <div class="dropdown-content">
                    <form method = "GET">
                        <button name="logout">Log out</button>
                    </form>
                </div>  
            </div>

            <?php include "includes/templates/login.php" ?>
            
            <?php include "includes/templates/signup_page.php" ?>
            <!--invisble----------------------->

            <a id='loginBut' href="#" onclick="loginPage()">login</a><!--login button-->
            <a id="signupBut" href="#" onclick="signupPage()">sign up</a><!--signup button-->
        </div>
    </div>
</div>

<script>
    let sessionVar='<?php echo $session_value;?>';
    let loginButton = document.querySelector('#loginBut');
    let signupButton = document.querySelector('#signupBut');
    let dropdownButton = document.querySelector('.dropdown');

    if(sessionVar !== ''){
        loginButton.style.display = "none";
        signupButton.style.display = "none";
        dropdownButton.style.display = "block";
    }

    function dropdownUser(){
    let dropDown = document.querySelector('.dropdown-content');
    dropDown.style.display = "block";
    }

    window.addEventListener("mouseup", function (e) { 
    if (($(e.target).closest(".dropdown-content").length === 0)) { 
    document.querySelector(".dropdown-content").style.display = "none";
    } 
    });
</script>
   