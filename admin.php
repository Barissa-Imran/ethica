<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ethica Fashion| Admin Panel</title>
</head>
<body id="admin">
    <?php include 'navbar.php';
 ?>
 <main>


    <h2>Admin Panel</h2>
    <div>
        <h2 class="add_user-title">Add User</h2>
        <form class="add_user" method="POST" action="admin_func.php">
            <label>Username:</label>
            <input type="text" name="username" required>
            <br>
            <label>Password:</label>
            <input type="password" name="password" required>
            <br>
            <label>Do you want to add admin: </label>
            <input type="hidden" name="subcheck" value="0" />

            <input type="checkbox" name="subcheck" value="1" />
            <br>
            <input type="submit" name="add_user" value="Add User">
        </form>
        <form method="POST" action="admin_func.php">
            <input type="submit" name="logout" value="Logout">
        </form>
    </div>
</main>
    <?php include 'footer.php' ?>

    <script type="text/javascript" src="main.js"></script>
</body>
</html>
