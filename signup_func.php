<?php
// Get the user's username and password from the form data
$username = $_POST["username"];
$password = $_POST["password"];
$admin = 0;



// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

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

// Insert the user's data into the database
$sql = "INSERT INTO users (username, password, admin) VALUES ('$username', '$hashed_password', '$admin')";
if ($mysqli->query($sql) === TRUE) {
        echo '<script>alert("Login successful.");</script>';
        echo '<script type="text/javascript">window.location.href="https://vesta.uclan.ac.uk/~sdigumarthi/admin.php";</script>';
} else {
    echo '<script>alert("Please try another username or password");</script>';
    echo '<script type="text/javascript">window.location.href="https://vesta.uclan.ac.uk/~sdigumarthi/signup.php";</script>';

}

// Close the database connection
$mysqli->close();

// clear the form
$_POST = array();
?>
