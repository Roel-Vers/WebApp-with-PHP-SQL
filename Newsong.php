<!DOCTYPE HTML>
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
    	<?php include_once 'header.php';?>

<?php

if ($_POST != null) {    
    require_once "connect.php";

    $sql = "SELECT * FROM Artist WHERE Name LIKE '%" . $_POST["Artist"] . "%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $artistId = $row["ArtistID"];
            $genreId = $row["GenreID"];
        }
    }

    $sql = "SELECT * FROM Categories WHERE Name LIKE '%" . $_POST["Categories"] . "%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $categoryID = $row["CategoryID"];
        }
    }

    $sql = "SELECT * FROM Albums WHERE ATitle LIKE '%" . $_POST["Album"] . "%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $albumID = $row["AlbumID"];
        }
    }

    $sql = "INSERT INTO Songs (GenreID, AlbumID, CategoryID, STitle) VALUES (" .$genreId . "," .$albumID. "," .$categoryID. ",'" .$_POST["Name"]. "')";

    if ($conn->query($sql) === TRUE) {
        echo "New song added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<form action="Newsong.php" method="post">
Song: <input type="text" name="Name"><br>
Artist: <input type="text" name="Artist"><br>
<!-- Genre: <input type="text" name="Genre"><br> -->
Album: <input type="text" name="Album"><br>
Categories: <input type="text" name="Categories"><br>
<input type="submit">
</form>

<?php include_once 'footer.php';?>

</body>
</html>