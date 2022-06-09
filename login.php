<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$nm = $username = $password = "";
$username_err = $password_err = $login_err = $nm_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter your Email.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your Password.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty(trim($_POST["nm"]))) {
        $nm_err = "Please enter your Name.";
    } else {
        $nm = trim($_POST["nm"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["nm"] = $nm;

                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else {
                            // Password is not valid, display a generic error message
                            $login_err = "Incorrect Password.";
                        }
                    }
                } else {
                    // Username doesn't exist, display a generic error message
                    $login_err = "Email is not registered yet.";
                }
            } else {
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
    <title>Indizon | Login</title>
    <link rel="shortcut icon" type="image/png" href="Favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 100%;
            padding: 5% 35% 0 35%;
        }
    </style>

    <style>
        .footer {
            /* position: fixed; */
            width: 50%;
            background: linear-gradient(rgb(250, 250, 250), white);
            margin-left: 25%;
            text-align: center;
        }

        .button {
            border-radius: 10px;
            height: 35px;
            background: linear-gradient(#ffcc99, #ffa31a);
            border: none;
        }

        .button:hover {
            background: linear-gradient(#ffa31a, #ffcc99);
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <img src="Logo1.png" width="170px" style="margin-left:30%;padding-bottom:8%;">
        <h2 style="padding-bottom:4%;">Login</h2>
        <?php
        if (!empty($login_err)) {
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>

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
                <input type="password" name="password" placeholder="Password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group" style="text-align:center;padding-top:3%;">
                <input type="submit" class="button" style="width:50%;" value="Login">
                <p style="padding:5%;">Don't have an account? <a href="register.php">Sign up now</a>.</p>
            </div>
        </form>
    </div>
    <div class="footer">
        <hr style="width:100%;">
        © 2022-2023, Indizon.com, Inc. or its affiliates
    </div>
</body>

</html>