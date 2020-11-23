<?php 
// connecting
require_once "connect.php";
    
// Initialize session
session_start();
 
// Escape user inputs for security
$email = mysqli_real_escape_string($conn, $_POST['email']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$psw = mysqli_real_escape_string($conn, $_POST['psw']);
 
// Attempt insert query execution
$sql = "INSERT INTO User(email, username, password) VALUES ('$email', '$username', '" . md5($psw) . "')";

if(mysqli_query($conn, $sql)){
    echo "Successfully registered";
    echo "<br />.Click here to <a href='login.php'>Login</a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>