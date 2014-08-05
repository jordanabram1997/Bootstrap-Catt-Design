<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Customer'; 
    $to = 'jordan16abram@gmail.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
            
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
                
    if ($_POST['submit'] && $human == '4') {                 
        if (mail ($to, $subject, $body, $from)) { 
<<<<<<< HEAD
        header( 'Location: /contactredirect.html' ) ;
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        } 
    } else if ($_POST['submit'] && $human != '4') {
        echo '<p>You answered the anti-spam question incorrectly!</p>';
=======
        ;header( 'Location: /contactredirect.html' ) ;
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    } 
    } else if ($_POST['submit'] && $human != '4') {
    echo '<p>You answered the anti-spam question incorrectly!</p>';
>>>>>>> 57f5f333fa7c21ba6ad3d6d3908ed5ce63958bc9
    }
?>