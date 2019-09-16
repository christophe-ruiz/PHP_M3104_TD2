<?php
    include 'utils.inc.php';
?>
<!DOCTYPE html>
<html>
<body>
    <form style="display: flex; justify-content: center; align-items: center; width = 100%; height = 100%;">
        <input type="text" name="id" placeholder="Identifiant">
        <input type="radio" id="male" name="male">
        <label for="male">Homme</label>
        <input type="radio" name="female">
        <label for="female">Femme</label>
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Mot de passe">
        <input type="password" name="verifPwd" placeholder="Vérifiez le mdp">
        <input type="text" name="phone" placeholder="Téléphone">
        <select id="pays">
            <option value="">Selectionner Pays</option>
            <option value="france" name="fr">France</option>
            <option value="belgique" name="bg">Belgique</option>
            <option value="monaco" name="mn">Monaco</option>
            <option value="autre" name="autre">Autre</option>
        </select>
        <input type="checkbox" id="cgu" name="cgu">
        <label for="cgu">J'accepte les Conditions Générales d'Utilisation</label>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
