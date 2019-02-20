<?php
error_reporting(1);
include("connection_db.php"); 

 

// Define variables and initialize with empty values
$username = $phone_number = $Email = $password = $confirm_password = "";
$username_err = $phone_number_err = $Email_err =  $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
	if(empty(trim($_POST["username"]))){
		$username_err = "Please enter a username.";
	} else{
        // Prepare a select statement
		$sql = "SELECT id FROM users WHERE username = ?";

		if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
			$stmt->bind_param("s", $param_username);

            // Set parameters
			$param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
			if($stmt->execute()){
                // store result
				$stmt->store_result();

				if($stmt->num_rows == 1){
					$username_err = "This username is already taken!";
				} else{
					$username = trim($_POST["username"]);
				}
			} else{
				echo "Oops! Something went wrong. Please try again later.";
			}
		}

		$stmt->close();
	}

    // Validate Phone number 
	if(empty(trim($_POST["phone_number"]))){
		$phone_number_err = "Please enter a phone number.";
	} else{
        // Prepare a select statement
		$sql = "SELECT id FROM users WHERE phone_number = ?";

		if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
			$stmt->bind_param("i", $param_phone_number);

            // Set parameters
			$param_phone_number = trim($_POST["phone_number"]);

            // Attempt to execute the prepared statement
			if($stmt->execute()){
                // store result
				$stmt->store_result();

				if($stmt->num_rows == 1){
					$phone_number_err = "This phone number is already taken!"; 
				} else{
					$phone_number = trim($_POST["phone_number"]);
				}
			} else{
				echo "Oops! Something went wrong. Please try again later.";
			}
		}

		$stmt->close();
	}


    // Validate Phone Email 
	if(empty(trim($_POST["Email"]))){
		$Email_err_err = "Please enter a email.";
	} else{
        // Prepare a select statement
		$sql = "SELECT id FROM users WHERE Email = ?";

		if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
			$stmt->bind_param("s", $param_Email);

            // Set parameters
			$param_Email = trim($_POST["Email"]);

            // Attempt to execute the prepared statement
			if($stmt->execute()){
                // store result
				$stmt->store_result();

				if($stmt->num_rows == 1){
					$Email_err = "This email is already taken!"; 
				} else{
					$Email = trim($_POST["Email"]);
				}
			} else{
				echo "Oops! Something went wrong. Please try again later.";
			}
		}

		$stmt->close();
	}

    // Validate password
	if(empty(trim($_POST["password"]))){
		$password_err = "Please enter a password!";     
	} elseif(strlen(trim($_POST["password"])) < 8){
		$password_err = "Password must have atleast 8 characters.";
	} else{
		$password = trim($_POST["password"]);
	}

    // Validate confirm password
	if(empty(trim($_POST["confirm_password"]))){
		$confirm_password_err = "Please confirm password.";     
	} else{
		$confirm_password = trim($_POST["confirm_password"]);
		if(empty($password_err) && ($password != $confirm_password)){
			$confirm_password_err = "Password did not match.";
		}
	}

    // Check input errors before inserting in database
	if(empty($username_err) && empty($phone_number_err) && empty($Email_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
		$sql = "INSERT INTO users (username,phone_number, Email, password) VALUES (?, ?, ?, ?)";

		if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
			$stmt->bind_param("ssss", $param_username, $param_phone_number , $param_Email , $param_password );

            // Set parameters
			$param_username = $username;
			$param_phone_number = $phone_number;
			$param_Email =$Email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
            	header("location: login.php");
            } else{
            	echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli-> close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
	<meta name="author" content="GeeksLabs">
	<meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
	<link rel="shortcut icon" href="img/favicon.png">

	<title>Login</title>

	<!-- Bootstrap CSS -->
	<link href="csss/bootstrap.min.css" rel="stylesheet">
	<!-- bootstrap theme -->
	<link href="csss/bootstrap-theme.css" rel="stylesheet">
	<!--external css-->
	<!-- font icon -->
	<link href="csss/elegant-icons-style.css" rel="stylesheet" />
	<link href="csss/font-awesome.css" rel="stylesheet" />
	<!-- Custom styles -->
	<link href="csss/style.css" rel="stylesheet">
	<link href="csss/style-responsive.css" rel="stylesheet" />

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
      ======================================================= -->
  </head>

  <body class="login-img3-body">

  	<div class="container">
  		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

  			<form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  			 
  				<div class="login-wrap">
  					<p class="login-img"><i class="">Register</i></p>

  					<div class="input-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

  						<input style="width:280px; " type="text" name="username" id="input" class="form-control" value="<?php echo $username; ?>" required="required"  placeholder="Username">
  						<span class="help-block"><?php echo $username_err; ?></span>
  					</div>
					<div class="input-group  <?php echo (!empty($phone_number_err)) ? 'has-error' : ''; ?>">
						<input style="width:280px;" type="number" name="phone_number" class="form-control" placeholder="Phone Number" value="<?php echo $phone_number; ?>">
  						<span class="help-block"><?php echo $phone_number_err; ?></span>
  					</div>     
                    <div class="input-group  <?php echo (!empty($Email_err)) ? 'has-error' : ''; ?>">
						<input style="width:280px;" type="email" name="Email" class="form-control" placeholder="Email" value="<?php echo $Email; ?>">
  						<span class="help-block"><?php echo $Email_err; ?></span>
  					</div>  
					<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
						<input style="width:280px;" type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $password; ?>">
  						<span class="help-block"><?php echo $password_err; ?></span>
  					</div>
  					<div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
						<input style="width:280px;" type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" value="<?php echo $confirm_password; ?>">
  						<span class="help-block"><?php echo $confirm_password_err; ?></span>
  					</div>
  					<button style="    width: 280px;" class="btn btn-primary btn-lg btn-block" type="submit"  value="Login">Register</button>
					<button style="    width: 280px;" class="btn btn-info btn-lg btn-block" type="reset"value="Reset">Reset</button>

  					<p>Already have an account? <a href="login.php">Login here</a>.</p>
  				</div>
  			</form>
  		</div>

  		<div class="text-right">
  			<div class="credits">

  				<a href="https://bootstrapmade.com/">Create </a> by <a href="#">Nguyen Huu Tuan</a> and <a href="#">Ho Van Tao</a>
  			</div>
  		</div>
  	</div>


  </body>

  </html>