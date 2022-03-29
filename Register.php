<?php
session_start();
    
    include("Connector.php");
    include("Functions.php");
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $fname = $_POST['fname'];
        $surname = $_POST['surname'];
        $studentid = $_POST['studentid'];
        $password = $_POST['password'];
        
        if(!empty($fname) && !empty($surname) && !empty($studentid) && !empty($password)){
            $id = rand(0, 10000);
            $query = "INSERT INTO `students`(`id`, `studentID`, `password`, `fName`, `surname`) VALUES ('$id','$studentid','$password','$fname','$surname')";
            mysqli_query($connect, $query);
            
            header("Location: Log-in.php");
        }
    }
?>
<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet'  href='css.css'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet"> 
        <script>
        function validate()
            {
                console.log("fname="+document.form.fname.value);
                if (document.form.fname.value === "")
                {
                    alert("You must enter your name.");
                    return false;
                }
                if (document.form.surname.value === "")
                {
                    alert("You must enter your surname.");
                    return false;
                }
                console.log("id="+document.form.studentid.value);
                if (document.form.studentid.value.length !== 8)
                {
                    alert("Student ID must be 8 characters long.");
                    return false;
                }
                if (document.form.password.value !== document.form.pass2.value)
                {
                    alert("Passwords must match.");
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body>
        <div class="container">
            <form name = "form" method="POST" onsubmit = "return validate()">
                <h1 class = "formtitle">
                    Register
                </h1>
                <p class = "forminstruct">Please fill in this form to create an account</p>
                <input class = "inputfield" name = "fname" placeholder = "First Name">
                <br>
                <br>
                <input class = "inputfield" name = "surname" placeholder = "Surname">
                <br>
                <br>
                <input class = "inputfield" name = "studentid" placeholder = "Student ID">
                <br>
                <br>
                <input class = "inputfield" name = "password" type = "password" placeholder = "Password">
                <br>
                <br>
                <input class = "inputfield" name = "pass2" type = "password" placeholder = "Repeat Password">
                <br>
                <br>
                <input type="submit" class ="formbutton" value = "Submit">
                <br>
                <br>
            </form>
            <a href ="Log-in.php">
                    Already have an account? Click here to sign in.
            </a>
        </div>
    </body>
</html>
