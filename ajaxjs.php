<?php
// Fetching Values From URL
$name2 = $_POST['name'];
$email2 = $_POST['email'];
$address = $_POST['address'];
$mobile = $_POST['contact'];

$receiver = "konzept.testing@gmail.com";
$subject = "Request A Quote";
$body = " User name is : " . $name2 .
    " And Mobile Number is : " . $mobile .
    " And Email Is : " . $email2 .
    " And Describe is : " . $address;
$sender = "From:konzept.testing@gmail.com";
mail($receiver, $subject, $body, $sender);
?>
