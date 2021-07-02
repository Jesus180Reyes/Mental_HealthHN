<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mensage = $_POST['message'];

    $email_from =   'info@mentalhealthhn.com';

    $email_subject = 'Alguien Hizo una Pregunta en MH';

    $email_body = "Nombre de Usuario: $name.\n".
                    "Email de Usuario: $email.\n".
                    "$name Realizo El Siguiente Comentario: $mensage.\n";


    $to = 'luisdejesus200122@gmail.com';
    
    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");






?>
