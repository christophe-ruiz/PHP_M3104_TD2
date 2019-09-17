<?php
    include 'utils.inc.php';
    start_page('Login');
    $step = $_GET['step'];
    echo $step;
?>
<form method="POST" action="test-pass.php">
    <input type="text" name="login" placeholder = "Login">
    <input type="password" name="pwd" placeholder = "Password">
    <button name="action" type="submit"> Envoyer </button>
</form>
<?php end_page(); ?>
