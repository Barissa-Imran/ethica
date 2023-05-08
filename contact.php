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

<?php




?>

<body>
<?php include 'navbar.php' ?>

    <div class="location">
        <div class="location-cont">
            <div class="header">
                <h1>Location</h1>
            </div>
            <p>Address: 1234 Main St, Anytown, CA 12345</p>
            <p>Phone: (123) 456-7890</p>
            <p>Email: info@ethica.com</p>
        </div>
        <div class="socials">
            <div class="header">
                <h1>Socials</h1>
            </div>
            <div class="socials-cont">
                <div class="socials-cont-item">
                    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                </div>
                <div class="socials-cont-item">
                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                </div>
                <div class="socials-cont-item">
                    <a href="https://www.twitter.com/" class="fa fa-twitter"></a>
                </div>
                <div class="socials-cont-item">
                    <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>

    </div>
    <div class="contact-form">
        <section class="contact_page">
            <div class="container_contact">
                <div class="row contact_header">
                    <h3>Contact Us</h3>
                </div>
                <div class="row contact_details">
                    <div class="card_item">
                        <div class="card_inner">
                            <i class="fas fa-mail"></i>
                            <h3>Email</h3>
                            <a href="#">info@Ethica.com</a>
                        </div>
                    </div>
                    <div class="card_item">
                        <div class="card_inner">
                            <i class="fas fa-phone"></i>
                            <h3>Phone</h3>
                            <a href="tel:+25470000000">(123) 456-7890</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="contact_form">
                        <form action="" method="post">
                            <div class="form_row">
                                <div class="w-50">
                                    <div class="form-group">
                                        <input type="text" class="form-input" name="name" placeholder="Enter your name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-input" name="email"
                                            placeholder="Enter your email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-input" name="subject"
                                            placeholder="Enter the subject" required>
                                    </div>
                                </div>
                                <div class="w-50">
                                    <div class="form-group">
                                        <textarea type="text" class="form-input" name="message"
                                            placeholder="Write your message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="send" class="form-input btn">Send us Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php

        include 'footer.php';

        if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $result = add_contact_message_to_database($name, $email, $subject, $message);
        if ($result) {
        // If the form data was inserted successfully, display a success message
        echo '<script>alert("Thank you for contacting us! We\'ll get back to you soon.");</script>';
    } else {
        // If there was an error inserting the form data, display an error message
        echo "Error: Unable to send message.";
        }
    }

    ?>
            <script type="text/javascript" src="main.js"></script>

</body>

</html>
