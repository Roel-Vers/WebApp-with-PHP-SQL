<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Music App</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href = "page-stylesheet.css" rel = "stylesheet" type = "text/css" />
        <link href = "login.css" rel = "stylesheet" type = "text/css" />
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Audiowide&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	<body>

    <?php
        // connecting
        require_once "connect.php";
    
        // Initialize session
        session_start();
        // If form submitted, insert values into the database.
        if (isset($_POST['username'])){
            // removes backslashes
            $username = stripslashes($_POST['username']);
            //escapes special characters in a string
            $username = mysqli_real_escape_string($conn,$username);
            $psw = stripslashes($_POST['password']);
            $psw = mysqli_real_escape_string($conn,$psw);
            //Checking is user existing in the database or not
            $query = "SELECT * FROM `User` WHERE username='$username' and password='".md5($psw)."'";
            $result = mysqli_query($conn,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            
            if($rows==1){
                $_SESSION['username'] = $username;
                // Redirect user to welcome page
                header("Location: logged-in.php");
                exit();
            }else{
                echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
            }
        // }else{
        //     echo "Something went wrong. Please try again later.";
        //     // Close statement
        //     // mysqli_stmt_close($stmt);
        // }
        }
        
        $conn->close(); //close the connection
    ?>
        
    <?php include_once 'header.php';?>
        
        <body class="main-bg">
        <div class="login-container text-c animated flipInX">
                <div>
                    <h1 class="logo-badge"><span class="fa fa-user-circle"></span></h1>
                </div>
          <h3 class="text-whitesmoke">Log In</h3>
                <div class="container-content">
                    <form class="margin-t" method="post">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="*****" required="">
                        </div>
                        <button type="submit" class="form-button button-l margin-b">Log In</button>

                        <a class="text-darkred" href="#"><small>Forgot your password?</small></a>
                        <p class="text-whitesmoke text-center"><small>Do not have an account?</small></p>
                        <a class="text-darkred" href="register.php"><small>Sign Up</small></a>
                    </form>
                </div>
            </div>
        </body>

        <?php include_once 'footer.php';?>
</body>
</html>