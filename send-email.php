<?php

    $message_sent = false;

    if( isset($_POST['name']) && isset($_POST['email']) && $_POST['email'] != '' ) {
        

        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {

            $userName           = $_POST['name'];
            $userEmail          = $_POST['email'];
            $userPhoneNumber    = $_POST['phone'];
            $emailSubject       = $_POST['subject'];
            $userMessage        = $_POST['message'];

            $to = 'lexinhome01@gmail.com';
            $body = '';

            $body .= 'From: '.$userName. '\r\n';
            $body .= 'Email: '.$userEmail. '\r\n';
            $body .= 'Phone: '.$userPhoneNumber. '\r\n';
            $body .= 'Message: '.$userMessage. '\r\n';

            mail($to, $emailSubject, $body);

            $message_sent = true;

        }

        

    }

    

?>