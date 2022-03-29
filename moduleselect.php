<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
session_start();
    
    include("Connector.php");
    include("Functions.php");
    
    $user_data = check_login($connect);
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $opt1 = $_POST['opt1'];
        $opt2 = $_POST['opt2'];
        
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method = "POST" class = "form" onsubmit = "return validatecount()">
                <p>
                    <h1>
                        Select your optional modules.
                    </h1>
                </p>
                <fieldset class = "check">
                    <input type = "checkbox" name = "module">mod1
                    <input type = "checkbox" name = "module">mod2
                    <input type = "checkbox" name = "module">mod3
                </fieldset>
    </body>
</html>
