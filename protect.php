<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

echo "<p><a href='index.html'>Retour au formulaire</a></p>";
?>

<?php
$email = $_POST['email'];
$point = strpos($email,".");
$aroba = strpos($email,"@");

if($point=='')
{
    echo "Votre email doit comporter un <b>point et un '@'</b>";
}
elseif($aroba=='')
{
    echo "Votre email doit comporter un <b>'@'</b>";
}
else
{
    echo "Votre email est: '<a href=\"mailto:"."$email"."\"><b>$email</b></a>'";
}
?>
