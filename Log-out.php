<?php
session_start();
    $_SESSION;
    
    if(isset($_SESSION['id'])){
        unset($_SESSION['id']);
    }
    
    header("Location: Register.php")

?>



