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
	
		<center>
		<form class="example" action="Result.php">
			<input type="text" placeholder="Search.." name="search">
		  <button type="submit"><i class="fa fa-search"></i></button>
			<select name="option">
				<option value="genre">Genre</option>
				<option value="artist">Artist</option>
				<option value="song">Song</option>
				<option value="album">Album</option>
			</select>
		</form>
		</center>

		<?php include_once 'footer.php';?>
	</body>
</html>