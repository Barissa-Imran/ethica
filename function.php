<?php
 function connect_to_database() {
   // Database credentials
 $host = "localhost";
 $username = "sdigumarthi";
 $password = "L4YejaBt";
 $dbname = "sdigumarthi";


    // Create connection
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
  }

function login_user($username, $password) {
  $conn = connect_to_database();

  if (mysqli_query($conn)) {
      // Display a success message
      return true;
    } else {
      return false;
    }

    // Close database connection
    mysqli_close($conn);

}

function get_data_from_database() {

    $conn = connect_to_database();

    // SQL query to fetch data
    $sql = "SELECT * FROM products";

    // Execute query and get result
    $result = mysqli_query($conn, $sql);

    // Create an empty array to store results
    $data = array();

    // Check if query returned any rows
    if (mysqli_num_rows($result) > 0) {
      // Loop through each row and add it to the array
      while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
      }
    }

    // Close database connection
    mysqli_close($conn);

    // Return the data array
    return $data;
  }

//   email subscribing
function add_email_to_database($email) {
    $conn = connect_to_database();
    // Sanitize the email input
    $email = mysqli_real_escape_string($conn, $email);

    // Insert the email into the database
    $sql = "INSERT INTO subscribers (email) VALUES ('$email')";
    if (mysqli_query($conn, $sql)) {
      // Display a success message
      return true;
    } else {
      return false;
    }

    // Close database connection
    mysqli_close($conn);
  }

//   sending message
function add_contact_message_to_database($name, $email, $subject, $message) {
    $conn = connect_to_database();
    // Sanitize the form data
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $subject = mysqli_real_escape_string($conn, $subject);
    $message = mysqli_real_escape_string($conn, $message);

    // Insert the form data into the database
    $sql = "INSERT INTO mails (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    if (mysqli_query($conn, $sql)) {
      // If the form data was inserted successfully, return true
      return true;
    } else {
      // If there was an error inserting the form data, return false
      return false;
    }

    // Close database connection
    mysqli_close($conn);
  }

  //  Function to add product to cart
  function addToCart($productName, $productId) {
    $conn = connect_to_database();

    // Escape variables to prevent SQL injection attacks
    $productName = mysqli_real_escape_string($conn, $productName);
    $productId = mysqli_real_escape_string($conn, $productId);

    // Prepare SQL query to insert product into "cart" table
    $sql = "INSERT INTO cart (product_name, product_id) VALUES ('$productName', '$productId')";

    // Execute SQL query and check for errors
    if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Product added to cart successfully.");</script>';
    } else {
      echo '<script>alert("There was a problem fulfilling your purchase, Please try again or Contact Admin!");</script>';
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  // Call the addToCart function for each product when the "Add to cart" button is clicked
  if (isset($_POST['trench_wear'])) {
    addToCart("Trench Wear", "111");
  }
  if (isset($_POST['sea_glass'])) {
    addToCart("Sea Glass", "222");
  }

  if (isset($_POST['blouse'])) {
    addToCart("Casual Blouse", "333");
  }
  if (isset($_POST['jacket'])) {
    addToCart("Maroon Jacket", "333");
  }

  //  Function to add product to orders
  function addToOrders($productId) {
    $conn = connect_to_database();

    // Escape variables to prevent SQL injection attacks
   $productId = mysqli_real_escape_string($conn, $productId);

    // Prepare SQL query to insert product into "cart" table
    $sql = "INSERT INTO orders (product_id) VALUE ('$productId')";

    // Execute SQL query and check for errors
    if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Product added to Orders successfully.");</script>';
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  ?>
