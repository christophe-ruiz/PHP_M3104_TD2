<?php
    include 'utils.inc.php';
    start_page('Pass');
?>
<form method="POST" action="test-pass.php">
    <input type="text" name="login">
    <input type="password" name="pwd">
    <button name="action" type="submit"></button>
</form>
<?php end_page(); ?>
