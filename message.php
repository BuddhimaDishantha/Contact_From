<?php
    $name=$_POST["name"];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $Website=$_POST['Website'];
    $message=$_POST['message'];

   if(!empty($email)&& !empty($message)){
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            $receiver="dishanthabuddhima@gmail.com";
            $subject="From: $name <$email>";
            $body="Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $Website\n\nMessage: $message\n\nRegards,\n$name";
            $sender="From:$email";
            if(mail($receiver,$subject,$body,$sender)){
                echo "Your message has been sent";
            }
            else{
                echo "Sorry,failed to send your message!";
            }
        }
        else{
            echo "Enter a valid email address!";
        }
   }else{
    echo "Email and password field is required!";
   }










?>