<?php
if (isset($_POST['submit'])) {
    extract($_POST);
    if (!empty($user_name) and !empty($user_email) and !empty($user_message)) {
        $to = "passat3bg@hotmail.be";
        $from = $email;
    }

    if (mail($to, $user_name, $user_message, $header)) {
        echo "Votre courrier a été envoyé";
    } else {
        echo "error: try agan";
    }
}
$header = "From:/$user_name/<$from>/n";
$header .= "Reply-To:$from/n";
$header .= "Content-Type:text/html; charset=/iso-8859-1/";