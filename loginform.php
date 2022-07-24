<?php
    session_start();
    $mesej = " ";
    if(count($_POST)>0) {
        include_once("dbconnect.php");
        
        $username = $_POST['username'];             // cuma testing bahagian ni
        $reg_password = $_POST['reg_password'];
        
        $result = mysqli_query($conn, "SELECT * FROM tbl_273046_user WHERE username = '$username' AND reg_password = '$reg_password'");
        $row = mysqli_fetch_array($result);
        
        if(is_array($row)){
            $_SESSION["username"] = $row['username'];
            $_SESSION["reg_password"] = $row['reg_password'];
        }
        else {
            echo "<script> alert('The username or password is invalid!') </script>";
        }
    }
    if(isset($_SESSION['username'])) {
        echo "<script>location.href='homepage.php'</script>";
    }

?>

<!DOCTYPE html>
<html>
    <head>    
        <title>Login Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <center><img src="pics/epss logo.PNG" width="250" height="100"></center>
    <h1 style="font-family:Segoe UI; text-align:center;">Login to your account</h1>

    <style>
        * {
          box-sizing: border-box;
        }
        
        .row::after {
          content: "";
          clear: both;
          display: table;
        }
        
        [class*="col-"] {
          float: left;
          padding: 5px;
        }
        
        .col-1 {width: 8.33%;}
        .col-2 {width: 16.66%;}
        .col-3 {width: 25%;}
        .col-4 {width: 33.33%;}
        .col-5 {width: 41.66%;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}
        .col-8 {width: 66.66%;}
        .col-9 {width: 75%;}
        .col-10 {width: 83.33%;}
        .col-11 {width: 91.66%;}
        .col-12 {width: 100%; height:auto; text-align: center;}
    
        form {
            padding-top: 20px;
            text-align: center;
            font-size: 25px;
        }

        input{
            width: 400px;
            height: 25px;
            font-size: 20px;
        }

        img {
            max-width:100%; height:auto;
        }
    </style>

    <body style="background-color: plum">

        <form action=" " method="post"> 
            Username: <input type="text" name="username" placeholder="Enter your username" required><br><br>
            Password: <input type="password" name="reg_password" placeholder="Enter your password" required><br><br>

            <input type="submit" style="border:none; width: 150px; height: 35px; background-color: limegreen; color:white;" value="Login">
            <!-- <input type="submit" value="Forgot your password?">    -->
        </form>

        <br>
        
        <div class="col-12" style="width:100%; height:100%">
              <img src="pics/epsas intro pic.jpeg" alt="epsas picture 1">
        </div>

    </body>
    
</html>