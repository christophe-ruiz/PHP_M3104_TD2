<?php
    include 'utils.inc.php';
    if (isset($_POST['action'])) {
        $login = $_POST['login'];
        $pwd = $_POST['pwd'];
        start_page('Bienvenue');
        echo '<h1> Bienvenue ' . $login . '</h1>' . PHP_EOL;
        end_page();
    } else {
        header('Location: erreur.php');
    }
?>