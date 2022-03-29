<?php

function check_login($connect){
    
    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        $query = "select * from students where id = '$id' limit 1";
        $result = mysqli_query($connect, $query);
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
}
?>

