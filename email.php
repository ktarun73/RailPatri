<?php
$to_email = $_POST['email'];
$subject = "RailParti: E-Ticket Booking";
$body = "Hi, Thank You for Subscription...";
$headers = "From: Abhinavv218@gmail.com";
if (mail($to_email, $subject, $body, $headers)) {
    echo '<script>alert("Email has been successfully sent...")</script>';
} else {
    echo "Email sending failed...";
}
?>
<?php include('homepage.php') ?>