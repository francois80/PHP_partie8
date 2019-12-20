<?php
$exercice = "Exercice1";
include "header.php";
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];
$serverName = $_SERVER['SERVER_NAME'];
session_start();
$_SESSION['lastname'] = 'DANIEL';
$_SESSION['firstname'] = 'Jack';
$_SESSION['age'] = 47;
?>
<h4>
    Faire une page HTML permettant de donner à l'utilisateur :<br>
    son User Agent<br>
    son adresse ip<br>
    le nom du serveur
</h4>
<div>User Agent = <?= $userAgent ?></div>
<div>adresse ip = <?= $ip ?></div>
<div>nom du serveur = <?= $serverName ?></div>
<div class="col-4"><a href="exo2.php" title="profil" class="btn btn-block btn-primary ">lien vers l'exercice 2</a></div>
</body>
</html>