<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Music App</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href = "page-stylesheet.css" rel = "stylesheet" type = "text/css" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Audiowide&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    
    <body>
        
        <?php include_once 'header.php';?><br>
        <div class="container">        
        <?php
            require_once "connect.php";            
            $sql = "SELECT * FROM Songs JOIN Albums ON Songs.AlbumID = Albums.AlbumID JOIN Artist ON Albums.ArtistID = Artist.ArtistID JOIN Genre ON Genre.GenreID = Artist.GenreID";

            // Admin control list
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    // echo "<br> id: ". $row["SongID"]. " - Name: ". $row["STitle"] . " - Album: " . $row["ATitle"] . " - Artist: " . $row["Name"] . "<br>";
                    echo "<div class='row'><div class='col-sm'>";
                    echo $row["Name"];
                    echo "</div><div class='col-sm'>";
                    echo $row["STitle"];
                    echo "</div><div class='col-sm'>";
                    echo $row["ATitle"];
                    echo "</div><div class='col-sm'>";
                    echo $row["Year"];
                    echo "</div><div class='col-sm'>";
                    echo $row["Country"];
                    echo "</div><div class='col-sm'>";
                    echo $row["GName"];
                    echo "</div><div class='col-sm'>";
                    echo $row["Category"];
                    echo "</div></div>";
                }
            } else {
                echo "0 results";
            }

            $conn->close();
        ?>
        <div><a href = "Newsong.php">Add new song</a></div>
        </div>

        <?php include_once 'footer.php';?>
	</body>
</html>
