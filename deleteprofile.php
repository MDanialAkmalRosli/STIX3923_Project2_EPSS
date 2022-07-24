<?php 
    include_once("dbconnect.php");
    $sql = "DELETE FROM tbl_273046_user WHERE reg_email = '". $_GET['reg_email'] ."' ";

    if(mysqli_query($conn, $sql)){
        echo "<script> alert('Profile Deleted Successfully!') </script>";
        echo "<script>location.href='homepage.php'</script>";
    }
    else{
        echo "<script> alert('Error deleting profile: . mysqli_error($conn)') </script>" ;
    }

    mysqli_close($conn);
?>