<?php
error_reporting(1);
include"connection_db.php";
session_start();
header('Content-Type: text/html; charset=UTF-8');


// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            $_SESSION["loggedin"] = false;
                            $_SESSION["id"] = '';
                            $_SESSION["username"] = '';  

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;  

                            if ($_SESSION["id"] =='1' || $_SESSION["id"] =='2') 
                            {
                              header("location: admin.php");
                            }else{
                               header("location: home.php");
                            }


                             
                            
                            // Redirect user to welcome page
                            
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
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
        <form class="login-form" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="login-wrap">
            <p class="login-img"><i class="">Login</i></p>

            <div class="input-group  <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
 
             <input style="width:280px; " type="text" name="username" id="input" class="form-control" value="<?php echo $username; ?>" required="required"  placeholder="Username">
              <span class="help-block"><?php echo $username_err; ?></span>
          </div>
          <div class="input-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>"">

              <input style="width:280px;" type="password" name="password" class="form-control" placeholder="Password">
              <span class="help-block"><?php echo $password_err; ?></span>
          </div>
          <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
            <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
          </label>
          <button class="btn btn-primary btn-lg btn-block" type="submit"  value="Login">Login</button>


        <p style=" color: red; font-weight: bold;">Don't have an account? <a href="Signup.php">Sign up now</a>.</p>
        </div>
      </form>
    </div>
        
    <div class="text-right">
      <div class="credits">
              
            <a href="https://www.linkedin.com/in/nguyen-huu-tuan-42b67b179/">Create </a> by <a href="https://www.linkedin.com/in/nguyen-huu-tuan-42b67b179/">Nguyen Huu Tuan</a> and <a href="#">Ho Van Tao</a>
        </div>
    </div>
</div>


</body>

</html>
