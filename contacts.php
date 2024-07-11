<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css"/>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <p></P>
        <?php include_once("templates/nav.php");?>

        
        <?php
        require_once 'dbconnections.php'; // Make sure to update the path if necessary

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $sql = "INSERT INTO ContactUs (name, email, message) VALUES (?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $name, $email, $message);

            if ($stmt->execute()) {
                echo "<p>Thank you for contacting us!</p>";
            } else {
                echo "<p>Error: " . $stmt->error . "</p>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>

        <form method="post" action="">
            <label for="name">Your Name</label>
            <input type="text" name="name" required>
            <label for="email">Your Email</label>
            <input type="email" name="email" required>
            <label for="message">Message</label>
            <textarea name="message" required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
    <div class="content">
        <h1>Gadget World</h1>
        <p>
        If you have any questions or need assistance, please don't hesitate to contact us using the information provided. We're here to help you!
        </p>
        <h2>Contact Information</h2>
        <p><strong>Email:</strong>gadgetworld@gmail.com</p>
        <p><strong>Phone:</strong>(254) 735-356-670</p>
    </div>
</body>
</html>