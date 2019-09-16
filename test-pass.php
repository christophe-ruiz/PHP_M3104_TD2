<?php
    include 'utils.inc.php';
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
    if (isset($_POST['action']) && $login == 'Jacques' && $pwd == 'azerty123') {
        start_page('Bienvenue');
        echo '<h1> Bienvenue ' . $login . '</h1>' . PHP_EOL;
        end_page();
    } else {
        header('Location: erreur.php');
    }
?>