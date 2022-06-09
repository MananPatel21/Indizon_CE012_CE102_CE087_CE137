<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$nm = $address = $username = $email = $password = $confirm_password = "";
$nm_err = $address_err = $username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please your Email.";
    }else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This Email is already Registered.";
                } else{
                    $username = trim($_POST["username"]);
                }

                // if(mysqli_stmt_num_rows($stmt) == 1){
                //     $username_err = "This username is already Registered.";
                // } else{
                //     $username = trim($_POST["username"]);
                // }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    if(empty(trim($_POST["nm"]))){
        $nm_err = "Please enter a Name.";
    } else{
    $nm = trim($_POST["nm"]);
    }

    if(empty(trim($_POST["address"]))){
        $address_err = "Please enter your Address.";
    } else{
        $address = trim($_POST["address"]);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a Password.";     
    } elseif(strlen(trim($_POST["password"])) < 8){
        $password_err = "Password must have atleast 8 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm Password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($nm_err) && empty($address_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, nm, password, address) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_nm, $param_password, $param_address);
            
            // Set parameters
            $param_nm = $nm;
            $param_username = $username;
            $param_address = $address;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Indizon | SignUp</title>
    <link rel="shortcut icon" type="image/png" href="Favicon.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 100%; padding: 5% 35% 0 35%;}
    </style>

    <style>
        .footer {
            /* position: fixed; */
            width: 50%;
            background: linear-gradient(rgb(250,250,250),white);
            margin-left:25%;
            text-align: center;
        }
        .button{
            border-radius:10px;
            height:35px;
            background: linear-gradient(#ffcc99,#ffa31a);
            border:none;
        }
        .button:hover{
            background: linear-gradient(#ffa31a,#ffcc99);
        }
    </style>
</head>
<body>
    <div class="wrapper">
    <img src="Logo1.png" width="170px" style="margin-left:30%;padding-bottom:8%;">
        <h2 style="padding-bottom:4%;">Sign Up</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label><b>Email</b></label>
                <input type="email" name="username" placeholder="Email" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label><b>Username</b></label>
                <input type="text" name="nm" placeholder="Username" class="form-control <?php echo (!empty($nm_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $nm; ?>">
                <span class="invalid-feedback"><?php echo $nm_err; ?></span>
            </div>
            <div class="form-group">
                <label><b>Password</b></label>
                <input type="password" name="password" placeholder="Password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label><b>Confirm Password</b></label>
                <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <label><b>Address</b></label>
                <input type="text" name="address" placeholder="Address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $address; ?>">
                <span class="invalid-feedback"><?php echo $address_err; ?></span>
            </div>
            <div class="form-group" style="text-align:center;padding-top:3%;">
                <input type="submit" class="button" style="width:50%;" value="Sign Up">
            </div>
            <p style="text-align:center;">Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
</div>    
</body>
</html>