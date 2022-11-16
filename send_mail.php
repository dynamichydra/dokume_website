<?php

	   $senderName = $_POST['name'];
       $senderEmail = $_POST['email'];
       $senderSub = $_POST['subject'];
       $senderMessage = $_POST['message'];

      $htm = 'New contact message received from:- <br> Name: "'.$senderName.'" <br>Email: "'.$senderEmail.'" <br> Message: "'.$senderMessage.'"';

        $headers  = "From: admin@dokume.in\r\n";
        $headers .= "Reply-To: noreply@dokume.in\r\n";
        // $headers .= "CC: susan@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $mailsent = mail('niraj.singh88.ns@gmail.com', $senderSub, $htm, $headers);

        if($mailsent){
        	$_SESSION['flash'] = 'Mail sent,Thank you for your message!';
        	redirect('https://dokume.in/contact.php');
        }

?>