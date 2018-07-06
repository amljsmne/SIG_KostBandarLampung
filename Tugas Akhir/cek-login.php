<?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if($username=="sikos" AND $password=="sikos")
    {
        $_SESSION["username"]=$username;
        header("location:SIG_KostBandarLampung.html");
    }else{
        header("location:login.php?login_error");
    }
?>