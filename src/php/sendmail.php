<?php
  
$name = $_POST["form_nom"];    
$firstname = $_POST["form_prenom"];    
$mail = $_POST["form_mail"];
$numtel = $_POST["form_tel"];
$adress = $_POST["form_adresse"];
$message = $_POST["form_msg"];


if(!(empty($name)||empty($firstname)||empty($mail)||empty($numtel)||empty($adress)||empty($message))){

    $email_subject = "Mail de $firstname $name depuis le site EHPAD André Blanc";
    $email_body = "Vous avez reçu un message de $name $firstname.\n\n".
        "Vous pouvez le recontacter à l'adresse : $mail.\n".
        "ou au : $numtel.\n".
        "Son adresse postale est : $adress.\n\n".
        "Message:\n $message";

    $to = "test@test.com";
    $headers = "From: $mail \r\n";
    $headers .= "Reply-To: $mail \r\n";
    $headers .= "Content-Type: text/plain; charset=\"utf-8\"";



    if (mail($to,$email_subject,$email_body,$headers))
    {
        echo "Votre message a bien été envoyé !";
    } else {
        echo "Votre message n'a pas pu être envoyé !";
    }
} else {
    echo "Le formulaire n'a pas été rempli correctement !";
    exit;
}


?>