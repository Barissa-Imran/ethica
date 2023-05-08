<?php
// Start the session and check if the user is logged in
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

// Connect to the database
$mysqli = new mysqli("localhost", "username", "password", "database_name");

// Check for database connection errors
if ($mysqli->connect_error) {
    die("Database connection failed: " . $mysqli->connect_error);
}

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "add user" form was submitted
    if (isset($_POST["add_user"])) {
        // Get the form data
        $username = $_POST["username"];
        $password = $_POST["password"];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert the new user into the database
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
        if ($mysqli->query($sql) === TRUE) {
            echo "User added successfully.";
        } else {
            echo "Error adding user: " . $mysqli->error;
        }
    }

    // Check if the "delete user" form was submitted
    if (isset($_POST["delete_user"])) {
        // Get the form data
        $user_id = $_POST["user_id"];

        // Delete the user from the database
        $sql = "DELETE FROM users WHERE id = $user_id";
        if ($mysqli->query($sql) === TRUE) {
            echo "User deleted successfully.";
        } else {
            echo "Error deleting user: " . $mysqli->error;
        }
    }

    // Check if the "edit user" form was submitted
    if (isset($_POST["edit_user"])) {
        // Get the form data
        $user_id = $_POST["user_id"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Update the user's data in the database
        $sql = "UPDATE users SET username = '$username', password = '$hashed_password' WHERE id = $user_id";
        if ($mysqli->query($sql) === TRUE) {
            echo "User updated successfully.";
        } else {
            echo "Error updating user: " . $mysqli->error;
        }
    }

    // Check if the "add admin" form was submitted
    if (isset($_POST["add_admin"])) {
        // Get the form data
        $admin_username = $_POST["admin_username"];
        $admin_password = $_POST["admin_password"];
        $admin_check = $_POST["admin_check"];
        $hashed_admin_password = password_hash($admin_password, PASSWORD_DEFAULT);

        // Insert the new admin into the database
        $sql = "INSERT INTO admins (username, password, admin) VALUES ('$admin_username', '$hashed_admin_password', $admin_check)";
        if ($mysqli->query($sql) === TRUE) {
            echo "Admin added successfully.";
        } else {
            echo "Error adding admin: " . $mysqli->error;
        }
    }
}

// Retrieve the user data from the database
function display_user () {
    $sql = "SELECT * FROM users";
    $result = $mysqli->query($sql);

    // Display the user data in a table
    echo "<h2>Users</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Username</th><th>Password</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td><a href='edit_user.php?id=".$row['id']."'>Edit</a> | <a href='delete_user.php?id=".$row['id']."' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}


// Handle logout
if(isset($_POST['logout'])){
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header('location: login.php');
}
?>
