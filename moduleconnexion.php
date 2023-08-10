<?php include('connexion.php');



    $uneconnexion -> select_where_utilisateur($_POST['id_utilisateur'],$_POST['email'],$_POST['mdp']);


    header("Location: index.php");
    exit();

    ?>