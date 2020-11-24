<?php
    include("config.php");
   
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']); 
            
        $sql = "SELECT id_user FROM users WHERE email = '$username' AND password = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1) {
            header("location: tabla.php");
        }else {
            header("Location: index.php");
        }
    }
?>