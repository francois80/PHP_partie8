<?php
    //si on  valide le formulaire
     if(!empty($_POST['nom']) && !empty($_POST['psw'])){
        //si le cookie n'existe pas mais qu'on a envoyé le formulaire, alors on créee le cookie
        //userBefore pour conserver les 1éres valeurs du cookie
        setcookie("userBefore[nom]", $_COOKIE['user']['nom'] , time()+600, "/");
        setcookie("userBefore[psw]", $_COOKIE['user']['psw'] , time()+600, "/");
        //on efface le cookie user pour le réécrire
        setcookie("user[nom]", "", time()-3600);
        setcookie("user[psw]", "", time()-3600);
        setcookie("user[nom]", $_POST['nom'], time()+300, "/");
        setcookie("user[psw]", $_POST['psw'], time()+300, "/");
     }
     else{
         // si on accède pour la 1ère fois à la page (formulaire non rempli)
         echo "le cookie n'existe pas";
     }  

$exercice = "Exercice5";
include "header.php";

//var_dump($_COOKIE)
?>
<h3>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</h3>
<h4>valeur du cookie de l'exercice 3 (avant modification)</h4>
<p>
    <?php
    if(isset($_COOKIE['userBefore'])){
    //si le cookie existe on boucle pour afficher la clé et la valeur associés du cookie avant la modif
    foreach ($_COOKIE["userBefore"] as $key => $value){
         echo "le cookie nommé :  $key contient la valeur : $value <br />";
    }
} else {
    echo "pas de cookie";
 }
    ?>
</p>
<h4>Valeur du cookie de l'exercice 3 après modification</h4>
<div class="containrer">
    <div class="row justify-content-center">
        <div class="col-md-5 bg-primary">
            <form action="#" method="POST">
                <fieldset>
                    <legend class="text-white">Veuillez saisir votre nom et votre mot de passe !!</legend>
                    <div class="form-group">
                        <label for="nom " class="text-white">Votre nom</label>
                        <input  type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" size="10" />
                    </div>
                    <div class="form-group">
                        <label for="psw" class="text-white">Mot de passe</label>
                        <input type="password" id="psw" name="psw" placeholder="mot de passe" />
                    </div>
                    <input type="submit" name="submit" value="Envoyez" />
                </fieldset>
            </form>
        </div>  
    </div>     
</div>  
    
     <?php
    if(isset($_COOKIE['user'])){
    //si le cookie existe on boucle pour afficher la clé et la valeur associés
    foreach ($_COOKIE["user"] as $key => $value){
        $nom = $key;
        $psw = $value;
    echo "le cookie nommé :  $nom contient la valeur : $psw <br />";
    }
} else {
    echo "pas de cookie";
 }
    ?>

</body>
</html>