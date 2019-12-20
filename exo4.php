<?php
$exercice = "Exercice4";
include "header.php";
?>
<h3>
    Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.
</h3>
<?php
var_dump($_COOKIE);
if(isset($_COOKIE['user'])){
    //si le cookie existe on boucle pour afficher la clé et la valeur associés
    foreach ($_COOKIE["user"] as $key => $value){
    echo "le cookie nommé :  $key contient la valeur : $value <br />";
    }
} else {
    echo "pas de cookie";
}
?>

</body>
</html>