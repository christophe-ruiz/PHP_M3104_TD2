<?php
    $action = $_POST['action'];
    if ($action == 'Mailer') {
        $id = $_POST['id'];
        $sexe = $_POST['sexe'];
        $email = $_POST['mail'];
        $pwd = $_POST['pwd'];
        $verifPwd = $_POST['verifPwd'];
        $phone = $_POST['phone'];
        $pays = $_POST['pays'];
        $cgu = $_POST['cgu'];

        $message = 'Identifiant: ' . $id . PHP_EOL;
        $message .= 'Sexe : ' . $sexe . PHP_EOL;
        $message .= 'E-mail : ' . $email . PHP_EOL;
        $message .= 'Password : ' . $pwd . PHP_EOL;
        $message .= 'Téléphone : ' . $phone . PHP_EOL;
        $message .= 'Pays : ' . $pays . PHP_EOL;

        echo $message;

    } else {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }
    if (mail('christophe.ruiz@etu.univ-amu.fr', 'mail du TD2', $message))
        echo 'Mail envoyé !';
?>
<a href=".."><button>Retour</button></a>
