<?php
    include 'utils.inc.php';
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
// BD
    $dbLink = mysqli_connect('mysql-christophe.alwaysdata.net', '173824', 'admin_root26+')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink , 'christophe_td2')
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $query = 'SELECT * FROM user WHERE login = \'' . $login . '\'';

    if(!($dbQuery = mysqli_query($dbLink, $query)))
    {
        echo 'Erreur de requête<br/>';
        // Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    } else if (isset($_POST['action']) && !empty(trim($login)) && !empty(trim($pwd)) ) {
        while ($fetch = mysqli_fetch_assoc($dbQuery)) {
            var_dump($fetch);
            echo $login . PHP_EOL . $pwd;

            if ($login != $fetch["login"] && $pwd != $fetch["password"]) {
                $_GET['step'] = 'ERROR';
                header('Location: login.php');
            } else {
                $_GET['step'] = 'LOGIN';
                start_page('Bienvenue');
                echo '<h1> Bienvenue ' . $login . '</h1>' . PHP_EOL;
                end_page();
            }
        }
    } else {
        $_GET['step'] = 'ERROR';
        header('Location: login.php');
    }
?>