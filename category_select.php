<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MUSIC.APP";
$keyword = $_GET["search"];

// echo $keyword;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Songs JOIN Albums ON Songs.AlbumID = Albums.AlbumID JOIN Artist ON Albums.ArtistID = Artist.ArtistID WHERE Name LIKE '%" . $keyword ."%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["SongID"]. " - Name: ". $row["STitle"]. " - Album: " . $row["ATitle"] . " - Artist: " . $row["Name"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>