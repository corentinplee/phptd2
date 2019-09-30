<?php
include 'utils.inc.php';
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$password=$_POST['password'];
$verifpassword=$_POST['verifpassword'];
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$to='justin.ozannat@etu.univ-amu.fr';
$subject="Vos informations enregistrés sont $nom, $prenom, $password";
$message="Votre mail a bien été enregistré";

echo "<p><a href='index.html'>Retour au formulaire</a></p>";
?>

<?php
$email = $_POST['email'];
$point = strpos($email,".");
$aroba = strpos($email,"@");
if ($password!=$verifpassword)
{
    echo "mot de passe différents";
}

if($point=='')
{
    echo "Votre email doit comporter un <b>point </b>";
}
elseif($aroba=='')
{
    echo "Votre email doit comporter un <b>'@'</b>" ;
}
else
{
    mail($to,$subject,$message);
    echo "<br/>Votre mail a bien été envoyé<br/>";
    echo "<br/>Bonjour, <a>$nom </a><b>$prenom</b> <br/>" .PHP_EOL;
    echo "<br/>Votre email est: '<a href=\mailto"."$email"."\"><b>$email</b></a>'<br/>" .PHP_EOL;
    echo "<br/>Votre mot de passe est: <a>$password</a> <br/>" .PHP_EOL;

}
?>
