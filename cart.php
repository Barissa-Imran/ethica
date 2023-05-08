<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ethica Fashion</title>
</head>


<body>
<?php include 'navbar.php';


 ?>

    <div class="location">
        <div class="location-cont">
            <div class="header">
                <h1>Orders</h1>
            </div><?php display_data(); ?>
            <?php
function display_data() {
    // database connection information
    $host = "localhost";
    $username = "sdigumarthi";
    $password = "L4YejaBt";
    $dbname = "sdigumarthi";

    // create a connection
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // select data from table
    $sql = "SELECT * FROM cart";
    $result = mysqli_query($conn, $sql);
    // display data in a table
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Product ID</th><th>Product Name</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row["product_id"]."</td><td>".$row["product_name"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // close connection
    mysqli_close($conn);
}

?>
        </div>

    </div>


    <?php include 'footer.php' ?>
            <script type="text/javascript" src="main.js"></script>

</body>

</html>
