<?php
$exercice = "Exercice2";
include "header.php";
session_start();
?>
<h3>
    Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu 
    des variables lastname, firstname et age grâce aux sessions. Ces variables auront été définies 
    directement dans le code. Il faudra afficher le contenu de ces variables sur la deuxième page.
</h3>
<div>
    <?php
        if(isset($_SESSION['lastname'])){ ?>
           <p>session lastname = <?= $_SESSION['lastname'] ?></p>
    <?php 
      ;} ?> 
    <?php 
        if(isset($_SESSION['firstname'])){ ?>
           <p>session firstname = <?= $_SESSION['firstname'] ?></p>
    <?php
      ;} ?>
    <?php 
        if(isset($_SESSION['age'])){ ?>
           <p>session age = <?= $_SESSION['age'] ?></p>
    <?php 
      ;} ?>
</div>
</body>
</html>