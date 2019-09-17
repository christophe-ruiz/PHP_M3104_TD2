<?php
    header('Location: login.php?step=LOGIN');
    include 'utils.inc.php';
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
    echo empty(trim($login));
    echo empty(trim($pwd));
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
            if ($login != $fetch['login'] && $pwd != $fetch['password']) {
                header('Location: login.php?step=ERREUR');
            } else {
                start_page('Bienvenue');
                echo '<h1> Bienvenue ' . $login . '</h1>' . PHP_EOL;
                end_page();
            }
        }
    } else {
        header('Location: login.php?step=ERREUR');
    }
?>