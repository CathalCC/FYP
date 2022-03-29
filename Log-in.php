<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
    $_SESSION;
    
    include("Connector.php");
    include("Functions.php");
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $studentid = $_POST['studentid'];
        $password = $_POST['password'];
        
        if(!empty($studentid) && !empty($password)){
            $query = "SELECT * FROM `students` WHERE studentID = '$studentid' limit 1";
            $result = mysqli_query($connect, $query);
            
            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password'] === $password){
                        $_SESSION['id'] = $user_data['id'];
                        echo $user_data['id'];
                        echo $user_data['password'];
                        echo $user_data['fName'];
                        echo $user_data['surname'];
                        echo $user_data['studentID'];
                        header("Location: index.php");
                    
                    }
                }
            }
        }
    }
?>
<html>
    <head>
        <title>Registration and log-in</title>
        <script>
            alertfunction(){
                alert("Password not recognized.");
            }
        </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet'  href='css.css'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div class = "container">
            <form class = "form" method = "POST" id = "signin">
                 <h1 class = "formtitle">
                    Sign in
                 </h1>
                <p class = "forminstruct">
                    Enter your student ID and password to sign into your account.
                </p>
                    <input class = "inputfield" name = "studentid" placeholder = "Student ID">
                    <br>
                    <br>
                    <input class = "inputfield" type = "password" name = "password" placeholder = "Password">
                    <br>
                    <br>
                    <input type="submit" class ="formbutton" value = "Submit">
                    <div>
                        <p class = "formtext">
                            <a href ="Register.php" id = "register">If you don't have an account
                            you can register for one by clicking here.
                            </a>
                        </p>
                    </div>
            </form>
        </div>
    </body>
</html>
