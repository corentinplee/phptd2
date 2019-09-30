<!DOCTYPE html>
<html><body>
<form method="post" action="protect.php">

       Nom : <input type="text" name="nom" size="12"><br>
    Prénom : <input type="text" name="prenom" size="12"><br>
    Tél : <input type="text" name="tel" size="12"><br>
    Votre email : <input type="text" name="email" size="20"><br>
    Mot de passe : <input type="password" name="password" size="12"><br>
    Verif.Mot de passe : <input type="password" name="verif password" size="12"><br>



    <input name="sexe" type="radio" value="femme"> Femme<br>
    <input name="sexe" type="radio" value="homme" checked> Homme<br>
    <select name="options" size="2" multiple="multiple">
        <option value="op1" selected="selected">France</option>
        <option value="op2">Etats-Unis</option>
        <option value="op3">Royaume-Unis</option>
        <option value="op4">Espagne</option>
        <option value="op5">Italie</option>
        <option value="op5">Autres</option>
    </select><br>
    <input name="conditions générales d'utilisation" type="checkbox" id="cgdu" value="agree" checked> Conditions générales d'utilisation<br>
    <input type="submit" value="OK"><br>
</form></body></html>
