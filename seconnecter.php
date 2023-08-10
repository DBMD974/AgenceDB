<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM-CONNEXION</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="dark-bg">


<!-- formulaire d'inscription -->
<form class="registration-form" action="moduleconnexion.php" method="POST">
<i class="fa-regular fa-circle-user fa-2xl" style="color: #ff8000;"></i></i><h2>Se Connecter</h2>
  <div class="form-group">
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="mot_de_passe">Mot de passe :</label>
    <input type="password" id="mot_de_passe" name="mdp" required>
  </div>
  <button type="submit" class="btn">S'inscrire</button>
</form>

<!-- bouton de retour -->
<a href="index.php" class="back-button">Retour à l'accueil</a>












<?php
    // Insérer l'utilisateur dans la base de données lorsque le formulaire est soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        // Appeler la fonction d'insertion sécurisée
        $resultat = $connexion->select_where_utilisateur($id_utilisateur,$email, $mdp);

        // Afficher le résultat de l'insertion (succès ou erreur)
        echo $resultat;
    }
    ?>






<script src="script.js"></script>    
</body>
</html>