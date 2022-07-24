<?php
    include_once("dbconnect.php");
    if(count($_POST) > 0){
        mysqli_query($conn, "UPDATE tbl_273046_user SET username = '". $_POST['username'] ."',
                            reg_password = '". $_POST['reg_password'] ."'
                            WHERE reg_email = '". $_POST['reg_email'] ."'
        ");
        $mesej = "Profile Updated Successfully!";
    }
    $result = mysqli_query($conn, "SELECT * FROM tbl_273046_user WHERE reg_email = '". $_GET['reg_email'] ."' ");
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Profile</title>
    </head>
    
    <style>
        .container_editprofile {
            position: relative;
            margin-left:auto; margin-right:auto;
            margin-top:0%; margin-bottom:10%;
            width:17cm; height:7cm;
            background-color:rgb(255, 234, 234);
            color:black;
            border: 2px solid black;
            text-align:center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
        }
        
        .button {
          border: 1px solid black;
          color: white;
          /*padding: 20px;*/
          text-align: center;
          display: inline-block;
          font-size: 18px;
          cursor: pointer;
        }
        
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
    </style>
    
    <body style="background-color: #FFC9FF;">
        <h3 style="font-family: Arial, Helvetica, sans-serif; margin-top:9%;">
            <center>If you don't want to edit your account, you can just click <a href="homepage.php">BACK HERE</a>.</center>
        </h3>
        <form action="" method="post">
        <div>
            <?php 
            if(isset($mesej)){
                echo "<script> alert('$mesej') </script>";
                echo "<script>location.href='homepage.php'</script>";
            }
            ?>
        </div>
        <div class="container_editprofile">
            <br>Edit your profile<br><br>
            <input type="hidden" name="reg_email" class="txtfield" value="<?php echo $row['reg_email']; ?>">
            Username: 
            <input type="text" name="username" class="txtfield" value="<?php echo $row['username']; ?>"><br><br>
            Password: 
            <input type="password" name="reg_password" class="txtfield" value="<?php echo $row['reg_password']; ?>"><br><br>
            
            <input class="button" name="save" style="background-color:rgb(71, 68, 215); width:4cm; height:0.8cm;" type="submit" value="Save Changes">
        </div>
        </form>
        
    </body>
    
</html>