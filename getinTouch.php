<?php
$receiver = "konzept.testing@gmail.com";
$subject = "Get In Touch";
$body = " User name is : " . $_POST['name'] .
    " And Mobile Number is : " . $_POST['mobile'] .
    " And Email Is : " . $_POST['email'] . " And Describe is : " .
    $_POST['reqDes'];
$sender = "from:konzept.testing@gmail.com";
mail($receiver, $subject, $body, $sender);