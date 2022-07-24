<?php 
include_once("dbconnect.php");
$result = mysqli_query($conn, "SELECT * FROM tbl_user");

?>
<!-- File ni cuma sementara waktu saja sebagai eksperimen, sebab lepasni kita akan pindahkan table ke dalam Manage Account -->
<!DOCTYPE html>
<html>
    <head>
        <title>Testing Table</title>
    </head>
    
    <style>
        /* Table for Manage Account content */
        table{
            background-color:thistle;
            margin-top: 75px;
            margin-left: auto;
            margin-right: auto;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
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
        
        /* button to EDIT profile in the Manage Account */
        .button_editprofiletable{
            background-color: green;
            color: white;
            padding:1px 15px;
            cursor: pointer;
            font-size: 16px;
            width:100%; height:100%;
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

        /* Popup that shall appear after clicking the "Edit Profile" button in Manage Account */
        .popupcontainer_editprofile {
            opacity: 0;
            pointer-events: none;
            position: absolute;
            left: 10%;
            margin-top: 30px;
            width:17cm; height:7cm;
            background-color:rgb(255, 234, 234);
            color:black;
            border: 2px solid black;
            text-align:center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
        }

        .popupcontainer_editprofile.show{
            opacity: 1;
            pointer-events: auto;
        }
    </style>

    <body style="background-color: yellow">
    <?php 
    if (mysqli_num_rows($result) > 0){
    ?>
    <table border="1" cellspacing="7" cellpadding="5" width="750" height="100">
        <tr bgcolor="4744d7" style="color:white">    <!-- Row 1 -->
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th colspan="2">Actions</th>
        </tr>
            <?php
            $i=0;
            while($row=mysqli_fetch_array($result)) {
            ?>
        <tr>
            <td><?php echo $row["username"] ?></td>
            <td><?php echo $row["reg_email"] ?></td>
            <td><?php echo $row["reg_password"] ?></td>
            <td bgcolor="green">
                <a href="editprofile.php?reg_email=<?php echo $row['reg_email']; ?>" style="color:white">Edit</a>
            </td>
            <td bgcolor="red">
                <a href="deleteprofile.php?reg_email=<?php echo $row['reg_email']; ?>" style="color:white">Delete</a>
            </td>
        </tr>
            <?php
            $i++;
            }
            ?>
    </table>
    <?php 
    }
    else{
        echo "No result found";
    }
    ?>

    </body>
</html>

