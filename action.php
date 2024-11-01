<?php
if (isset($_POST['valider'])) {
    if (isset($_POST['user_name']) and isset($_POST['user_email']) and isset($_POST['user_message'])) {
        if (!empty($_POST['user_name']) and !empty($_POST['user_email']) and !empty($_POST['user_message'])) {
            $name = htmlspecialchars($_POST['user_name']);
            $email = htmlspecialchars($_POST['user_email']);
            $message = htmlspecialchars($_POST['user_message']);
            echo " <h2> bonjour  <b><mark> $name </b> merci pour votre email :<b><mark>$email </b>, nous avons lu votre message: </br></br><mark> $message </h2>";
            $retour = mail('davidnbr1-85@hotmail.com', 'Envoi depuis la page action.php', $_POST['user_message'], '');
            if ($retour)
                echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
}

