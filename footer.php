<?php include 'function.php';
if (isset($_POST['subscribe'])) {
  $email = $_POST['email'];
  $result = add_email_to_database($email);
  if ($result) {
    // If the email address was inserted successfully, display a success message
    echo '<script>alert("Thank you for subscribing!");</script>';
  } else {
    // If there was an error inserting the email address, display an error message
    echo "Error: Unable to add email address.";
  }
}
?>
<footer>
        <div class="top-div">
            <div class="footer-h1">
                <h1>ETHICA</h1>
            </div>
            <div class='footer-info'>
                <h3>New To Ethica?</h3>
                <span>Subscribe to our newsletter to get updates on our latest offers</span>
                <div class="footer-input">
                    <form action="" method="post">
                    <input type="email"  name="email" placeholder="Enter your email">
                    <button name="subscribe">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom-div">
            <div class="items">
                <div class="bottom-left">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="bottom-center">
                    <h3>Help</h3>
                    <ul>
                        <li><a href="error_404.php">Shipping & Returns</a></li>
                        <li><a href="error_404.php">Privacy Policy</a></li>
                        <li><a href="error_404.php">Terms & Conditions</a></li>
                        <li><a href="error_404.php">Sitemap</a></li>
                    </ul>
                </div>
                <div class="bottom-right">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Pinterest</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        