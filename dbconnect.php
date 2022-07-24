<?php
$servername = "localhost";
$username   = "crimsonw_fypusers";
$password   = "zrj9B#y=[6A{";
$dbname     = "crimsonw_fypdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo '';
}
?>