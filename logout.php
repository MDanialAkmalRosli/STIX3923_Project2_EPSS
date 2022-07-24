<?php 
    session_start();
    unset($_SESSION["username"]);
    unset($_SESSION["reg_password"]);
    header("Location: loginform.php");

?>