<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
session_start();
    $_SESSION;
    
    include("Connector.php");
    include("Functions.php");
    
     $user_data = check_login($connect);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>
            Details of logged in user.
        </h2>
        First name: <?php echo $user_data['fName']; ?><br>
        Surname: <?php echo $user_data['surname']; ?><br>
        Student ID: <?php echo $user_data['studentID']; ?><br>
        <?php
        if(!empty($user_data['sub1']) && !empty($user_data['sub2']) && !empty($user_data['sub3'])){
        echo "Subject 1: ".$user_data['sub1']."\n"."Subject 2: ".$user_data['sub2']."\n"."Subject 3: ".$user_data['sub3']."\n";
        echo "Modules: ".$user_data['coremod1']." ".$user_data['coremod2']." ".$user_data['coremod3']." \n".$user_data['coremod4']." ".$user_data['coremod5']." ".$user_data['coremod6']." "." ".$user_data['coremod7']." ".$user_data['coremod8']." ".$user_data['coremod9']." ".$user_data['optmod1']." ".$user_data['optmod2'];
        }
        else{
            echo "Subjects not yet chosen.";
        }
        
        ?>
    </body>
</html>
