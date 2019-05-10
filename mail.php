<?php

//Validate email
function isValidEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}


if (isset($_POST['email']) && !empty($_POST['email'])) {

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    //Validate email address
    if(!isValidEmail($email)){
        echo "<h2>Email address is not valid.</h2>";
        echo '<a href="demo.html">Click here</a>';
        die();
    }


    $to = "vinay.jaiswal@shobizexperience.com";
    $subject = "My subject test";
    $txt = "Hello world!";
    $headers = "From: webmaster@example.com" . "\r\n";// . "CC: somebodyelse@example.com";

    $mail = mail($to, $subject, $txt, $headers);
    if($mail){
        echo '<script>window.location.href = "demo.html";</script>';
    }



}