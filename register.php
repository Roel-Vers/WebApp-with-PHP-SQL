<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Music App</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href = "page-stylesheet.css" rel = "stylesheet" type = "text/css" />
		<link href = "register_form.css" rel = "stylesheet" type = "text/css" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Audiowide&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    
    <body>
        
        <?php include_once 'header.php';?>

		<form action="add_user.php" method = "POST">
  			<div class="container">
    		<h1>Register</h1>
    			<center><p>Please fill in this form to create an account.</p></center>
    		<hr>

    		<label for="email"><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" id="email" required><br>
			
			<label for="username"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="username" id="username" required><br>

    		<label for="psw"><b>Password</b></label>
    		<input type="password" placeholder="Enter Password" name="psw" id="psw" required><br>

    		
    		<center><p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    		<button type="submit" class="registerbtn">Register</button>
  			</div></center>

  			<div class="container signin">
    			<p>Already have an account? <a href="login.php">Log in</a>.</p>
  			</div>
		</form> 

		<?php include_once 'footer.php';?>
	</body>
	
	
</html>