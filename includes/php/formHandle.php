<?php 
    if(isset($_POST['form'])){
        switch ($_POST['form']) {
            case "A":
                require_once 'includes/php/SESSIONlogin.php';
                break;
    
            case "B":
                require_once 'includes/php/INSERTcomment.php';
                break;
                
            case "C":
                require_once 'includes/php/INSERTaccount.php';
                break;

            case "D":
                require_once 'includes/php/UPDATElike.php';
                break;
    
            default:
                echo "What are you doing?";
        } 
    } 
?>