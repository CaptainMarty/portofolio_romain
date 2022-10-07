<?php

if(
    isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['subject']) && !empty($_POST['subject']) &&
    isset($_POST['message']) && !empty($_POST['message'])
){

    /* Variable pour les mails */

    $name = $_POST['name'];
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $body = '
                <p>Nom : '. $_POST['name'] . '</p>
                <p>email : '. $_POST['email'] . '</p>
                <p>subject : '. $_POST['subject'] . '</p>
                <p>message : '. $_POST['message'] . '</p>
    ';
 
    $headers = "From: Romain";  
    $headers .= "Reply-To: romslavoiz88@gmail.com\r\n";  
    $headers .= "Return-Path: romslavoiz88@gmail.com\r\n";  
    $headers .= "X-Mailer: PHP5\n";  
    $headers .= 'MIME-Version: 1.0' . "\n";  
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  

    /* condition envoie mail */
    
    if ( mail($to,$subject,$body,$headers) ) {
        $ok = 'Votre mail a été envoyé avec succès';
    }  

}