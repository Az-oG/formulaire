<?php

            $retour = mail('passat3bg@hotmail.be', 'Envoi depuis la page formulaire', $_POST['message','email','text','submit'], '');
            if ($retour)
                echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
}

