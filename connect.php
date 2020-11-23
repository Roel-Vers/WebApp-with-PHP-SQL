<?php
$servername = "127.0.0.1:49482";
// $servername = "localhost";
$username = "azure";
// $username = "root";
$password = "6#vWHD_$";
// $password = "";
// $dbname = "MUSIC.APP";
$dbname = "localdb";
  // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
   echo " ";
   
?>