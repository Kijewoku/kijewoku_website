<?php
    $nom=htmlspecialchars($_POST["name"]); 
    $mail=htmlspecialchars($_POST["email"]); 
    $message=htmlspecialchars($_POST["message"]); 
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 
    $headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 
    
    $subject="|| /!\ MAIL PROVENANT DE KIJEWOKU /!\ ||"; 
    $destinataire="contact@kijewoku.fr"; 
    $body=$message; 
    if (mail($destinataire,$subject,$body,$headers)) { 
        echo "<p>Votre mail a été envoyé</p>";
        header('Location: index.php#contact');
    } else { 
        echo "<p>Une erreur s'est produite</p>"; 
    } 
?>