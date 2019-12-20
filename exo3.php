<?php

if(isset($_COOKIE['user'])){
    //si le cookie existe on boucle pour afficher la clé et la valeur associés
    foreach ($_COOKIE["user"] as $key => $value){
    echo "le cookie nommé :  $key contient la valeur : $value <br />";
    }
}
 else {
     if(!empty($_POST['nom']) && !empty($_POST['psw'])){
        //si le cookie n'existe pas mais qu'on a envoyé le formulaire, alors on créee le cookie
        setcookie("user[nom]", $_POST['nom'], time()+300, "/");
        setcookie("user[psw]", $_POST['psw'], time()+300, "/");
     }
     else{
         // si on accède pour la 1ère fois à la page (formulaire non rempli)
         echo "le cookie n'existe pas";
     }  
}

$exercice = "Exercice3";
include "header.php";
var_dump($_COOKIE)?>
<h3>
    Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. 
    A la validation du formulaire, stocker les informations dans un cookie.
</h3>
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
<div> 
</div>
</body>
</html>