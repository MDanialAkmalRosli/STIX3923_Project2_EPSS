<?php
$username = $_POST['username'];
$reg_email = $_POST['reg_email'];
$reg_password = $_POST['reg_password'];

if (!empty($username) || !empty($reg_email) || !empty($reg_password) ){
    $host = "localhost";
    $dbUsername = "crimsonw_fypusers";
    $dbPassword = "zrj9B#y=[6A{";
    $dbname = "crimsonw_fypdb";
    
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    if(mysqli_connect_error()){
        die('Connect error('. mysqli_connect_erno().')'. mysqli_connect_error() );
    }
    else{
        $SELECT = "SELECT reg_email FROM tbl_273046_user WHERE reg_email = ? LIMIT 1";
        $INSERT = "INSERT INTO tbl_273046_user(username, reg_email, reg_password) VALUES (?, ?, ?)";
        
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $reg_email);
        $stmt->execute();
        $stmt->bind_result($reg_email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        if($rnum==0){
            $stmt->close();
            
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sss", $username, $reg_email, $reg_password);
            $stmt->execute();
            echo "<script>alert('New record inserted successfully! Redirecting to the Login Page')</script>";
            echo "<script>location.href='loginform.php'</script>";
        }
        else{
            echo "<script>alert('The credentials are already being used...')</script>";
            echo "<script>location.href='registrationform.html'</script>";
        }
        $stmt->close();
        $conn->close();
    }
}   else {
        echo "Please fill in all the required fields!";
        die();
}

?>