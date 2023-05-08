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
    h2, form {
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

     p > a {
        color: blue;
    }
</style>
<body>
    <?php include 'navbar.php';
 ?>
    <h2>Login</h2>
    <form method="post" action="login_func.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        <p style="margin-top: 10px;"><a href="error_404.php">Forgot password?</a></p>
        <input name="login" class="loginbtn" type="submit" value="Login">
    </form>

    <?php include 'footer.php' ?>

    <script type="text/javascript" src="main.js"></script>
</body>
</html>
