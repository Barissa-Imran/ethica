<?php
session_start();

// Get the user's username and password from the form data
$username = $_POST["username"];
$password = $_POST["password"];

 $host = "localhost";
 $username = "sdigumarthi";
 $password = "L4YejaBt";
 $dbname = "sdigumarthi";

// Connect to the database
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check for database connection errors
if ($mysqli->connect_error) {
    die("Database connection failed: " . $mysqli->connect_error);
}

// Prepare a SELECT statement to retrieve the user's data from the database
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $mysqli->query($sql);

// Check if a row was returned
if ($result->num_rows == 1) {
    // Get the row as an associative array
    $row = $result->fetch_assoc();

    // Verify the password using password_verify
    if (password_verify($password, $row["password"])) {
        // Password is correct, log the user in
        echo '<script>alert("Login successful.");</script>';
        echo '<script type="text/javascript">window.location.href="https://vesta.uclan.ac.uk/~sdigumarthi/admin.php";</script>';
    } else {
        // Password is incorrect, display an error message
        echo '<script>alert("Incorrect username or password.");</script>';
    }
} else {
    // Username not found, display an error message
    echo '<script>alert("Incorrect username or password.");</script>';
}

// Close the database connection
$mysqli->close();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ethica Fashion| Login page</title>
</head>
<style>
    h2, form, .warning {
        margin: 2rem;
    }

    .loginbtn {
        padding: 5px;
        background: teal;
        color: #fff;
        outline: none;
        border: none;
        margin-top: 10px;
    }

    .warning {
        background: #b34045;
        color: #fff;
        padding: 3px;
    }

    p > a {
        color: blue;
    }
</style>
<body>
    <?php include 'navbar.php';
 ?>
    <h2>Login</h2>
    <?php if (isset($error)) { ?>
        <p class="warning"><?php echo $error; ?></p>
    <?php } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        <p style="margin-top: 10px;"><a href="error_404.php">Forgot password?</a></p>
        <input class="loginbtn" type="submit" value="Login">
    </form>

        <?php include 'footer.php' ?>

    <script type="text/javascript" src="main.js"></script>
</body>
</html>
