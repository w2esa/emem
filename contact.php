<?php


if(isset($_POST['submit'])){
    $from = "HERE PUT YOUR HOSTING EMAIL";
    $to = 'info@techforing.com';
    $subject = "$_POST['subject']";
    $message = "message: $_POST['message'] \n name: $_POST['name'] \n email: $_POST['email] \n mobile phone: $_POST['phone']";
    $headers = "From:". $from;
    mail($to,$subject,$message,$headers);

}

exit();

