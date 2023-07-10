
        <?php
        $to = 'dsanjay9027@gmail.com';
        $subject = ' Message From SudoZap ';
        $name = $_POST['name'];
        $email= $_POST['email'];
        $message= $_POST['message'];
        $from = 'cs@sudozap.com';
         
        // Sending email
        if(mail($to,$subject,$name,$message, $email)){
            echo 'Your mail has been sent successfully.';
        } else{
            echo 'Unable to send email. Please try again.';
        }
        ?>
