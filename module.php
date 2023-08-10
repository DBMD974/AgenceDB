<?php include('connexion.php');



    $uneconnexion -> insertion_utilisateur_secure($_POST['nom'],$_POST ['prenom'],$_POST['email'],$_POST['mdp']);


    header("Location: index.php");
    exit();

    ?>