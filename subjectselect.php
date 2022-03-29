<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<!--
I need to write the selected subjects to the database for this to work, and I then need to take
the core modules from the chosen subject and insert them into the account details of the student
currently logged in. Three subjects must be chosen in total.
-->
<?php
session_start();
    
    include("Connector.php");
    include("Functions.php");
    
    $user_data = check_login($connect);
    
    $check1 = 0;
    $check2 = 0;
    $check3 = 0;
    
    $counter = 1;
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        for($x = 1; $x <= 7; $x++){
        if (isset($_POST['G'.$x])){
            if ($counter == 1) {
                $check1 = $_POST['G'.$x];
              } elseif ($counter == 1) {
                $check2 = $_POST['G'.$x];
              } else {
                $check3 = $_POST['G'.$x];}
             $counter++;
              }
    }
        $query = "INSERT INTO `students`(`sub1`, `sub2`, `sub3`) VALUES ('$check1','$check2','$check3');
        SELECT 'CoreMod1','CoreMod2','CoreMod3' FROM 'subjects' WHERE $check1 == '$user_data'['sub1'];";
        mysqli_query($connect, $query);  
    }
    
    //Do the screenshotted for loop here
    //look at notepad doc for the right SQL
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet"> 
        <title></title>
        
    </head>
    <body>
       <form method = "POST" class = "form" onsubmit = "return validatecount()">
                <p>
                    <h1>
                        Select three subjects. You may only choose one subject from each group
                    </h1>
                </p>
                <fieldset>
                <h2>
                    Group 1
                </h2>
                    <input id = "subject" type = "radio" name = "G1" value = "Archaeology">Archaeology<br>
                    <input id = "subject" type = "radio" name = "G1" value = "French">French<br>
                    <input id = "subject" type = "radio" name = "G1" value = "Mathematics and Mathematical Studies">Mathematics and Mathematical Studies<br>
                    <input id = "subject" type = "radio" name = "G1" value = "International Development">International Development<br>
                <h2>
                    Group 2
                </h2>
                    <input id = "subject" type = "radio" name = "G2" value = "Legal Studies">Legal Studies<br>
                    <input id = "subject" type = "radio" name = "G2" value = "Psychology">Psychology<br>
                    <input id = "subject" type = "radio" name = "G2" value = "Celtic Civilisation">Celtic Civilisation<br>
                    <input id = "subject" type = "radio" name = "G2" value = "Peformance and Screen Studies">Performance and Screen Studies<br>
                <h2>
                    Group 3
                </h2>
                    <input id = "subject" type = "radio" name = "G3" value = "Classics">Classics<br>
                    <input id = "subject" type = "radio" name = "G3" value = "Modern Irish Culture (Music and Literature">Modern Irish Culture (Music and Literature)<br>
                    <input id = "subject" type = "radio" name = "G3" value = "Geography">Geography<br>
                    <input id = "subject" type = "radio" name = "G3" value = "German">German<br>
                    <input id = "subject" type = "radio" name = "G3" value = "Léann na Cumarsáide">Léann na Cumarsáide<br>
                    <input id = "subject" type = "radio" name = "G3" value = "Global Media">Global Media<br>
                <h2>
                    Group 4
                </h2>
                    <input id = "subject" type = "radio" name = "G4" value = "English">English<br>
                    <input id = "subject" type = "radio" name = "G4" value = "Economics">Economics<br>
                <h2>
                    Group 5
                </h2>
                    <input id = "subject" type = "radio" name = "G5" value = "Sociological and Political Studies">Sociological and Political Studies<br>
                    <input id = "subject" type = "radio" name = "G5" value = "Information Technology">Information Technology<br>
                    <input id = "subject" type = "radio" name = "G5" value = "Léann an Aistriúchán">Léann an Aistriúchán<br>
                <h2>
                    Group 6
                </h2>
                    <input id = "subject" type = "radio" name = "G6" value = "History">History<br>
                    <input id = "subject" type = "radio" name = "G6" value = "Spanish">Spanish<br>
                <h2>
                    Group 7
                </h2>

                    <input id = "subject" type = "radio" name = "G7" value = "Gaeilge">Gaeilge<br>
                    <input id = "subject" type = "radio" name = "G7" value = "Italian">Italian<br>
                    <input id = "subject" type = "radio" name = "G7" value = "Philosophy">Philosophy<br>
                </fieldset>
                <input type="submit" value="Submit">
		<input type="reset" value="Reset">
    </form>
    </body>
</html>